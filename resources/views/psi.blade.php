@extends('layouts.main')

@section('title', 'Psicologia')

@section('content')

<form action="/psi" method="POST">
    @csrf
    <div class="row">
        <div class="col mb-3 col-xs-9">
            <div class="card shadow">
                <div class="card-body"><input class="form-control" type="datetime-local" id="data" name="data"></div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col mb-3 col-xs-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col"><span>Descreva seu evento psicológico</span><textarea
                                class="form-control" id="descricao" name="descricao"></textarea></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col text-end col-xs-12"><!-- Start: Salvar registro --><input
                class="btn shadow btn-sm btn-primary" type="submit" label="Salvar"
                value="Salvar registro" style="text-align: right;"><!-- End: Salvar registro -->
        </div>
        <div class="col-3"></div>
    </div>
</form>

@endsection
