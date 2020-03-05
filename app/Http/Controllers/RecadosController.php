<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecadosController extends Controller
{
    public function index(){
        return view('recados');
    }
}
