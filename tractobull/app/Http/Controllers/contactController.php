<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function __invoke(){
        return view('Eng.Pagina.contact');
    }
}
