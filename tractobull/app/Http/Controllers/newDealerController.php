<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newDealerController extends Controller
{
    public function __invoke(){
        return view('Eng.Pagina.newDealer');
    }
}
