<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class distribuidoresController extends Controller
{
    public function __invoke(){
        return view('Pagina.distribuidores');
    }
}
