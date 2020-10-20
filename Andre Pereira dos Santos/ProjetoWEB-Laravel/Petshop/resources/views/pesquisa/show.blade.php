

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header">
                        <span class="float-left">Meus Animais</span>
                        <a href="{{route('animais.create')}}" class="btn btn-primary float-right"><i class="fas fa-dog"></i>  Novo Animal</a>
                    </div>
                    <div class="card-body ">
                        <table class="table table-bordered">
                            <thead >
                            <tr>
                                <td>Nome</td>
                                <td>Raça</td>
                                <td>Sexo</td>
                                <td>Dono</td>
                                <td>Nasc</td>
                                <td>Castrado</td>
                                <td>Agenda</td>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dados as $dado)
                                <tr>
                                    <td>{{$dado->name}}</td>
                                    <td>{{$dado->breed}}</td>
                                    <td>{{$dado->sex}}</td>
                                    <td>{{\App\Models\Animal::find($dado->id)->user->name}}</td>

                                    <td>{{\Carbon\Carbon::parse($dado->birth)->format("d/m/Y")}}</td>

                                    <td> {{$dado->castration}}</td>


                                    <td>
                                        <div class="row justify-content-center">


                                                <a class="c" href="{{route('pesquisas.edit', $dado->id )}}"><i class="far fa-calendar-alt fa-2x"></i></a>


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
