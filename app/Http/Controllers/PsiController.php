<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psi;
class PsiController extends Controller
{
    public function store(Request $request){
        $psi = new Psi;
        
        $psi->descricao = $request->descricao;
        $psi->data = $request->data;
        
        $psi->save();

        return redirect('/');

    }
}
