<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunicacaoController extends Controller
{
    public function index($search = null)
    {
        if ($search != null) {
            $cpfKid = GuzzleController::curl("https://sleepy-inlet-88273.herokuapp.com/api/kidTest?cpf=$search");
            return view('comunicacao', ["search" => $cpfKid["kidTestInfo"]]);
        }

        return view('comunicacao');
    }

    public function kidTestSearch($search)
    {
        return $this->index($search);
    }
}
