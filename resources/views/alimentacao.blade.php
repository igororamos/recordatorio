@extends('layouts.main')

@section('title', 'Alimentação')

@section('content')
<form action="/alimentacao" method="POST">
    @csrf
    <div class="row">
        <div class="col mb-3">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col">
                            <div class="form-check" id="tipo-check">
                                <input class="form-check-input" type="radio" id="formCheck-1" checked="" name="tipo" value="café da manhã">
                                <label class="form-check-label text-nowrap" for="formCheck-1" id="tipo" >café
                                    da manhã
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="formCheck-2" name="tipo" value="lanche da manhã">
                                <label class="form-check-label text-nowrap" for="formCheck-2" id="tipo">lanche
                                    da manhã
                                </label>
                            </div>
                            <div class="form-check text-nowrap">
                                <input class="form-check-input" type="radio" id="formCheck-6"
                                    name="tipo" value="almoço">
                                <label class="form-check-label" for="formCheck-6" id="tipo">almoço
                                </label>
                            </div>
                            <div class="form-check text-nowrap">
                                <input class="form-check-input" type="radio" id="formCheck-5"
                                    name="tipo" value="lanche da tarde">
                                <label class="form-check-label" for="formCheck-5" id="tipo">lanche da tarde
                                </label>
                            </div>
                            <div class="form-check text-nowrap">
                                <input class="form-check-input" type="radio" id="formCheck-4"
                                    name="tipo" value="janta">
                                <label class="form-check-label" for="formCheck-4" id="tipo">janta
                                </label>
                            </div>
                            <div class="form-check text-nowrap">
                                <input class="form-check-input" type="radio" id="formCheck-3"
                                    name="tipo" value="outros">
                                <label class="form-check-label" for="formCheck-3" id="tipo">outros
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card shadow" style="margin: 0px;">
                <div class="card-body">
                    <input class="form-control" id="data" name = "data" type="datetime-local">
                </div>
            </div>
        </div>
        <div class="col-3">
        </div>
    </div>
    <div class="row">
        <div class="col-9 mb-3">
            <div class="card shadow border-start-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col">
                            <div>
                                <span>Descreva sua refeição
                                </span>
                            </div>
                        </div>
                    </div>
                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                </div>
            </div>
        </div>
        <div class="col-3">
        </div>
    </div>
    <div class="row">
        <div class="col text-end col-xs-12 col-sm-12 col-md-9">
            <input class="btn shadow btn-sm btn-primary" type="submit" value="Salvar registro">
        </div>
        <div class="col-3">
        </div>
    </div>
</form>


@endsection
