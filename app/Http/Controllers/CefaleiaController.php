<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cefaleia;
class CefaleiaController extends Controller
{
    public function index(){
        $cefaleia = Cefaleia::all();

        return view('/resultados/cefaleia_resultados', ['cefaleia'=> $cefaleia]);
    }

    public function store(Request $request){
        $cefaleia = new Cefaleia;

        $cefaleia->tipo = $request->tipo;
        $cefaleia->intensidade = $request->intensidade;
        $cefaleia->fatores_desencadeantes = $request->fatores;
        $cefaleia->data = $request->data; 
        $cefaleia->sintomas = $request->sintomas; 
        
        $cefaleia->save();

        return redirect('/resultados/cefaleia_resultados');

    }
}
