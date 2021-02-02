<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function description(Request $request)
    {
        $msg = strtolower(request()->input("msg"));

        $search = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
        $replace = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
        $msg = str_replace($search, $replace, $msg);
        
        if($msg == "romancier precurseur des decouvertes modernes"){
            $resultDescription = "énigme 4.2 : 6 ID = romancier";
        }else{
            $resultDescription = "Retry :)";
        };
        return view('home')->with('resultDescription', $resultDescription);
    }

    public function leBonLivre(Request $request)
    {
        $livre = strtolower(request()->input("leLivre"));

        if($livre == "vingtmillelieuessouslesmers"){
            $resultLivre = "énigme 4.3 : g";
        }else{
            $resultLivre = "Wrong answer";
        };
        return view('home')->with('resultLivre', $resultLivre);
    }
}
