@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalhes</div>
                <div class="card-body">
                    <h1>NOME: {{$animal->name}}</h1>
                    <p>SEXO: {{$animal->sex}}</p>
                    <p>RAÇA: {{$animal->breed}}</p>
                    <p>DONO: {{\App\Models\Animal::find($animal->id)->user->name}}</p>
                    <p>DATA DE NASCIMENTO: {{\Carbon\Carbon::parse($animal->birth)->format("d/m/Y")}}</p>
                    <div class="col-md-12 mt-3">
                    <img src="{{ asset('storage/'.$animal->img) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
