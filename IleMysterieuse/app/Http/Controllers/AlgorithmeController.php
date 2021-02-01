<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmeController extends Controller
{
    public function index(){      
        return view('algorithme.index');
    }

    public function exo1(Request $request){
        $hours = request()->input('hours');
        $minutes = request()->input('minutes');
        if($hours == 600 && $minutes == 35){
            $result = "Félicitation ! Enigme 3.1 : ! Nouvel indice : ???";
        }else{
            $result = "Essaie encore";
        };
        return view('algorithme.index')->with('result', $result);

    }
}
