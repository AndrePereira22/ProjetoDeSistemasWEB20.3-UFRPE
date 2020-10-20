@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalhes do Serviço</div>
                <div class="card-body">
                    <h1>{{$service->description}}</h1>
                    <p>Preço:{{$service->price}}</p>
                    <p>Duração: {{$service->duration}} Minutos</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
