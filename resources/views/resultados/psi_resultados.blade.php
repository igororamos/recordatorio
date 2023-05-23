
@extends('layouts.main')

@section( 'Alimentação')

@section('content')
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
@endsection