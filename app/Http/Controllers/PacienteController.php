<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GuzzleController;

class PacienteController extends Controller
{
    public function index()
    {

        return view('paciente');
    }

    public function search(Request $request)
    {
        $data = $request->all();
        $search = $data["search"];
        $cpfKid = GuzzleController::curl("https://sleepy-inlet-88273.herokuapp.com/api/informationsKid?cpf=$search");

        if($cpfKid["kidInfo"] == false){
            return redirect()->back()->with(['msgNot',"Nenhum dado encontrado!"]);
        }
        
        return view('paciente', ['paciente' => $cpfKid]);
    }
}
