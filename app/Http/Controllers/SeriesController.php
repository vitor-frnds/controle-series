<?php

namespace App\Http\Controllers;

class SeriesController
{
    // Esse método será executado na rota: /series
    public function listarSeries(){

        // Lista de séries
        $series = [
            'Peaky Blinders',
            'The Witcher',
            'Breaking Bad'
        ];

        // html de resultado que vai conter uma lista
        $html = '<ul>';

        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}