<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class termsController extends Controller
{
    public function __invoke(){
        return view('Eng.Pagina.terms');
    }
}
