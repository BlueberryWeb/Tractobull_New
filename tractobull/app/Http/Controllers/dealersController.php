<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dealersController extends Controller
{
    public function __invoke(){
        return view('Eng.Pagina.dealers');
    }
}
