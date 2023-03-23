<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function __invoke(){
        return view('Eng.Pagina.about');
    }
}
