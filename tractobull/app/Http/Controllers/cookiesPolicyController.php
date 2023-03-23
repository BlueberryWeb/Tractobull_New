<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cookiesPolicyController extends Controller
{
    public function __invoke(){
        return view('Eng.Pagina.cookiesPolicy');
    }
}
