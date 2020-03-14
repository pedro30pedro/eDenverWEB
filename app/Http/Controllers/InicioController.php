<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GuzzleController;

class InicioController extends Controller
{
    public function index()
    {

        $kidTestCount = GuzzleController::curl('https://sleepy-inlet-88273.herokuapp.com/api/kidTestCount');
        $kidCount = GuzzleController::curl('https://sleepy-inlet-88273.herokuapp.com/api/kidCount');
        $userCount = GuzzleController::curl('https://sleepy-inlet-88273.herokuapp.com/api/userCount');
        return view('inicio', ['kidtestCount' => $kidTestCount["countTest"], 'kidCount' => $kidCount["count"], 'countUser' => $userCount['countUser'] ]);
    }
}
