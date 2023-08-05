<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    public function index(Request $request)
    {

        // Lista de séries
        $series = [
            'Peaky Blinders',
            'The Witcher',
            'Breaking Bad'
        ];

        // compact é exatamente a mesma coisa que está dentro dos colchetes
        //return view('listar-series', [
        //    'series' => $series
        //]);

        //return view('listar-series', compact('series'));

        return view('series.index')->with('series', $series);
    } 
}
