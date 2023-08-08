<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Serie;
use PHPUnit\Framework\MockObject\Rule\Parameters;
use Illuminate\Database\Eloquent\Model;

class SeriesController extends Controller
{
    //
    public function index(Request $request)
    {

        // Lista de séries
        $series = Serie::query()->orderBy('nome')->get();

        // compact é exatamente a mesma coisa que está dentro dos colchetes
        //return view('listar-series', [
        //    'series' => $series
        //]);

        //return view('listar-series', compact('series'));

        return view('series.index')->with('series', $series);
    } 

    public function create()
    {
        return view('series.create');
    } 

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();                  //Temos uma classe que representa uma Série
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
