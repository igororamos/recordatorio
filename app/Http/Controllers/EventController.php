<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function alimentacao(){
        return view('alimentacao');
    }
    public function psi(){
        return view('psi');
    }
    public function cefaleia(){
        return view('cefaleia');
    }
    
     public function relatorio(){
        return view('/resultados/relatorio');
    } 
    public function select(){
        return view('/resultados/select');
    }
}
