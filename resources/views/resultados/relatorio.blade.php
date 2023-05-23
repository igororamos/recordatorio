@extends('layouts.main')

@section( 'title')

@section('content')

<form action="/resultados/relatorio" method="post">

<div class="row">
    <div class="col align-self-end">
    <div class="form-floating">
    <select class="form-select"  id="tipo" name="tipo">
        <option value='alim' >Alimentação</option>
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

<p>
    {{$item}}
</p>
{{-- 
    @if ($tipo  == 'alim')
    <div class="row">
    <div class="col-9">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Descrição</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($psi as $item)
                    <tr>
                        
                        <td>{{ $item->descricao }}</td>
                        <td>{{ $item->data }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>



    @elseif ($tipo == 'psi')
        
    <div class="row">
        <div class="col-9">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($alimentacao as $item)
                        <tr>
                            <td>{{ $item->tipo }}</td>
                            <td>{{ $item->descricao }}</td>
                            <td>{{ $item->data }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        

    @elseif ($tipo == 'cefaleia')
    <div class="row">
        <div class="col-9">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Intencidade</th>
                            <th>Fatores desencadeantes</th>
                            <th>Sintomas</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($cefaleia as $item)
                        <tr>
                            <td>{{ $item->tipo }}</td>
                            <td>{{ $item->intencidade }}</td>
                            <td>{{ $item->fatores_desencadeantes }}</td>
                            <td>{{ $item->sintomas }}</td>
                            <td>{{ $item->data }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endif
 --}}

@endsection