<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function __invoke(){
        return view('Eng.Flujo.products');
    }
}
