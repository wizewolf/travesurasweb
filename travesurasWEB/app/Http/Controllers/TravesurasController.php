<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TravesurasController extends Controller
{
    public function main(){
    	return View::make('index');
    }
    public function login(){
    	return View::make('login1');
    }
}
