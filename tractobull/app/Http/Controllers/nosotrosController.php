<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nosotrosController extends Controller
{
    public function __invoke(){
        return view('Pagina.nosotros');
    }
}
