<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class AlimentController extends Controller
{

    public function index(){
        $ali = Aliment::all();

        return view('/resultados/alimentacao_resultados', ['alimentacao'=> $ali]);
    }
    public function store(Request $request){
        $ali = new Aliment;
        
        $ali->tipo = $request->tipo;
        $ali->descricao = $request->descricao;
        $ali->data = $request->data;
        
        $ali->save();

        return redirect('/resultados/alimentacao_resultados');

    }
}
