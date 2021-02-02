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
            $result_exo1 = "Félicitation ! Enigme 3.1 : ! Nouvel indice : IX-38-13-2   Allez voir Jules Vernes";
        }else{
            $result_exo1 = "Essaie encore";
        };
        return view('algorithme.index')->with('result_exo1', $result_exo1);

    }

    public function exo2(Request $request){
        $date = request()->input('date');
        if($date == 1869){
            $result_exo2 = "Félicitation ! Enigme 3.2 : A Nouvel indice : XXV-102-9-4    Allez voir Jules Vernes";
        }else{
            $result_exo2 = "Essaie encore";
        };
        return view('algorithme.index')->with('result_exo2', $result_exo2);

    }
}
