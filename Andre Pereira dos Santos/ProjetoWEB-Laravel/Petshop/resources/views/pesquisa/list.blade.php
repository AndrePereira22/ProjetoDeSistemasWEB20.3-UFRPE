
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span class="float-left">Lista de Procedimentos do animal </span>
                        <a href="{{route('agendas.create')}}" class="btn btn-primary float-right"><i class="fas fa-clock"></i>  Novo Agendamento</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead >
                            <tr>
                                <td>Animal</td>
                                <td>Horario</td>
                                <td>Data</td>
                                <td>Lembrete</td>
                                <td>Serviço</td>
                                <td>Editar / Cancelar</td>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dados as $dado)
                                <tr>
                                    <td>{{\App\Models\Schedule::find($dado->id)->animal->name}}</td>
                                    <td>{{\Carbon\Carbon::parse($dado->schedule)->format("h:m")}}</td>
                                    <td>{{\Carbon\Carbon::parse($dado->date)->format("d/m/Y")}}</td>
                                    <td>{{$dado->reminder}}</td>
                                    <td>{{\App\Models\Schedule::find($dado->id)->service->description}}</td>

                                    <td>
                                        <div class="row justify-content-center">

                                            <div class="col-6">
                                                <a class="e" href="{{route('agendas.edit', $dado->id )}}" ><i class="fas fa-pen-square fa-2x "></i></a>
                                            </div>
                                            <div class="col-5">
                                                <form action="{{route('agendas.destroy', $dado->id )}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="d" type="submit" ><i class="fas fa-ban fa-2x"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
