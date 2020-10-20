@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalhes</div>
                <div class="card-body">
                    <p>Horario: {{$schedule->schedule}} </p>
                    <p>Data: {{\Carbon\Carbon::parse($schedule->date)->format("d/m/Y")}}</p>
                    <p>Animal: {{\App\Models\Schedule::find($schedule->id)->animal->name}}</p>
                    <p>Procedimento: {{\App\Models\Schedule::find($schedule->id)->service->description}}</p>
                   <br>
                    <p>Lembrete: {{$schedule->reminder}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
