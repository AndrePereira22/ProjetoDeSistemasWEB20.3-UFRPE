@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-lg-center ">
<div class="col-lg-12">
<div class="card ">
    <div class="card-header">Agendamento</div>
    <div class="card-body ">
        <form action="{{route('agendas.store')}}" method="POST">
            @csrf
            <input class="form-control mb-1 mt-3 " type="text" name="reminder" required placeholder="Lembrete">

            <div class="input-group mt-3 mb-0">
                <label>Horario:</label>
            </div>
            <div class="input-group mt-0 mb-3">

                    <input class="form-control  " type="time" name="schedule" required placeholder="Horario">
            </div>
            <div class="input-group mt-3 mb-0">
                <label>Data:</label>
            </div>

        <div class="input-group mt-0 mb-3">
            <input class="form-control mb-1" type="date" name="date" required placeholder="Data">
        </div>

                <select class="custom-select" name="animal_id" id="inputGroupSelect01">
                    <option selected>Animal...</option>
                    @foreach($animais as $animal)
                    <option value="{{$animal->id}}" >{{$animal->name}} </option>
                    @endforeach
                </select>




                <select class="custom-select mt-3" name="service_id" id="inputGroupSelect01">
                    <option selected>Serviço...</option>
                    @foreach($services as $service)
                    <option value="{{$service->id}}" >{{$service->description}} </option>
                    @endforeach
                </select>




            <input class="btn btn-success mt-3 justify-content-center " type="submit"  >


        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
