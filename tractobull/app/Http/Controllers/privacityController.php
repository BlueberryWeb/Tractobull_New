<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacityController extends Controller
{
    public function __invoke(){
        return view('Eng.Pagina.privacity');
    }
}
