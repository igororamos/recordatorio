@extends('layouts.main')

@section('title', 'Cefaleia')

@section('content')

    <form action="/cefaleia" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body shadow">
                        <div class="row">
                            <div class="col mb-3">
                               {{--  <div class="card">
                                    <div class="card-body">
                                        <img src="img/dor1.png" width="61" height="91">
                                    </div>
                                </div> --}}
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="tipo" name="tipo">
                                        <option value="tencional" selected="">tencional</option>
                                        <option value="enxaqueca">enxaqueca</option>
                                        <option value="em salvas">em salvas</option>
                                        <option value="secundária à sinusite">secundária à sinusite</option>
                                        <option value="secundária à hipertenção">secundária à hipertenção</option>
                                    </select><label class="form-label" for="floatingSelectGrid">Tipo de Cefaleia</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mb-3">
                                <input class="form-control" type="datetime-local" name="data">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">Intensidade</span>
                                    <select class="form-select" id="intensidade" name="intensidade">
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4>Possíveis fatores desencadeantes</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-1" name="fatores[]" value="falta de sono">
                                    <label class="form-check-label" for="formCheck-1">falta de sono</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-4" name="fatores[]" value="excesso de sono">
                                    <label class="form-check-label" for="formCheck-4">excesso de sono</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-3" name="fatores[]" value="cheiro forte">
                                    <label class="form-check-label" for="formCheck-3">cheiro forte</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-2" name="fatores[]" value="menstruação">
                                    <label class="form-check-label" for="formCheck-2">menstruação</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm" disabled>
                                    <span class="input-group-text">Adicionar</span>
                                    <input class="form-control" type="text">
                                    <button class="btn btn-primary" type="button">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Sintomas</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck-5" name="sintomas[]" value="fotofobia">
                            <label class="form-check-label" for="formCheck-5">fotofobia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck-6" name="sintomas[]" value="enjoo">
                            <label class="form-check-label" for="formCheck-6">enjoo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck-7" name="sintomas[]" value="vômito">
                            <label class="form-check-label" for="formCheck-7">vômito</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck-8" name="sintomas[]" value="aura">
                            <label class="form-check-label" for="formCheck-8">aura</label>
                        </div>
                        <div class="input-group input-group-sm " disabled>
                            <span class="input-group-text">Adicionar</span>
                            <input class="form-control" type="text">
                            <button class="btn btn-primary" type="button">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">

            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <input class="btn shadow btn-sm btn-primary" type="submit" value="Salver registro">
            </div>
            <div class="col-3"></div>
        </div>
    </form>

@endsection
