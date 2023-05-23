<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psi;
class PsiController extends Controller
{

    public function index(){
        $psi = Psi::all();

        return view('/resultados/psi_resultados', ['psi'=> $psi]);
    }

    public function store(Request $request){
        $psi = new Psi;
        
        $psi->descricao = $request->descricao;
        $psi->data = $request->data;
        
        $psi->save();

        return redirect('/resultados/psi_resultados');

    }
}
