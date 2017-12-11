<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GestionIndex extends Controller
{
    public function index(){
        return View::make('indexgestio');
    }
    public function buscarCliente(){
        return View::make('buscarcliente');
    }
    public function cliente(Request $request){
        dd($request);
    }

}
