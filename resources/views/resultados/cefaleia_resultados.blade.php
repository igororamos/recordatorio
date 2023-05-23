@extends('layouts.main')

@section( 'Alimentação')

@section('content')

<div class="row">
    <div class="col-9">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Intensidade</th>
                        <th>Fatores desencadeantes</th>
                        <th>Sintomas</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cefaleia as $item)
                    <tr>
                        <td>{{ $item->tipo }}</td>
                        <td>{{ $item->intensidade }}</td>
                        <td>
                            @php
                            if ($item->fatores_desencadeantes != null) {
                               
                                foreach ($item->fatores_desencadeantes  as $key) {
                                echo $key.'; ';
                                }
                            } 
                        @endphp
                        </td>
                        <td>
                            @php
                            if ($item->sintomas != null) {
                            foreach ($item->sintomas  as $key) {
                           echo $key.'; ';
                            }
                        } 
                        @endphp
                        </td>
                        <td>{{ $item->data }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection