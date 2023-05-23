@extends('layouts.main')

@section( 'title')

@section('content')

<form action="/resultados/relatorio" method="post">

<div class="row">
    <div class="col align-self-end">
    <div class="form-floating ">
    <select class="form-select"  id="tipo" name="tipo">
        <option value='alim' selected >Alimentação</option>
        <option value="psi">Psicologia</option>
        <option value="cefaleia">Cefaleia</option>
    </select><label class="form-label" for="floatingSelectGrid">Selecione o Relatório</label>
    </div>
</div>
    <div class="col align-self-end ">
        <input class="btn shadow btn-sm btn-primary" type="submit" value="Gerar Relatório">
    </div>
    <div class="col-3"></div>

    
</div>
</form>

@endsection