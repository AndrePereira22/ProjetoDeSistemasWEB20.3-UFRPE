@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Dados</div>
                <div class="card-body">
                    <form action="{{route('agendas.update', $schedule->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <input class="form-control mb-1 mt-3 " value="{{$schedule->reminder}}" type="text" name="reminder" required placeholder="Lembrete">

                        <div class="input-group mt-3 mb-0">
                            <label>Horario:</label>
                        </div>
                        <div class="input-group mt-0 mb-3">

                            <input class="form-control  " type="time" value="{{$schedule->schedule}}" name="schedule" required placeholder="Horario">
                        </div>
                        <div class="input-group mt-3 mb-0">
                            <label>Data:</label>
                        </div>

                        <div class="input-group mt-0 mb-3">
                            <input class="form-control mb-1" type="date" value="{{$schedule->date}}" name="date" required placeholder="Data">
                        </div>

                        <select class="custom-select" name="animal_id" id="inputGroupSelect01">
                            <option selected>Animal...</option>
                            @foreach($animais as $animal)
                                <option {{\App\Models\Schedule::find($schedule->id)->animal->name == $animal->name ? 'selected': ''}} value="{{$animal->id}}">{{$animal->name}} </option>
                            @endforeach
                        </select>

                        <select class="custom-select mb-3 mt-3" name="service_id" id="inputGroupSelect01">
                            <option selected>Serviço...</option>
                            @foreach($services as $service)
                                <option {{\App\Models\Schedule::find($schedule->id)->service->description == $service->description ? 'selected': ''}} value="{{$service->id}}">{{$service->description}} </option>

                            @endforeach
                        </select>


                        <button class="btn btn-success">Atualizar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
