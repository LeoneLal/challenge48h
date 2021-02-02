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
<<<<<<< HEAD
            $resultDescription = "énigme 4.2 : ID = romancier e";
=======
            $resultDescription = "énigme 4.2 : 6 ID = romancier";
>>>>>>> 9ff052e6cb6b4b95ad88bf27266317786efdea07
        }else{
            $resultDescription = "Retry :)";
        };
        return view('home')->with('resultDescription', $resultDescription);
    }

    public function leBonLivre(Request $request)
    {
        $livre = strtolower(request()->input("leLivre"));

        if($livre == "vingtmillelieuessouslesmers"){
            $resultLivre = "énigme 4.3 : g  http://127.0.0.1:8000/txt/4ef5s9a.txt";
        }else{
            $resultLivre = "Wrong answer";
        };
        return view('home')->with('resultLivre', $resultLivre);
    }

    public function enigmeFinale(Request $request){
        $password = request()->input("finalpass");
        if($password == "2p!9h6g&kA4340")
        {
            return view('final');
        }else{
            $wrong = "Ce n'est pas la bonne réponse";
            return view('welcome')->with('wrong', $wrong);
        }
    }
}
