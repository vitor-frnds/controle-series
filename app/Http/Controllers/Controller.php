<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



/*

A acção do controller recebe por parâmetro uma requisição e retorna uma resposta
*/
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
