@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Dados</div>
                <div class="card-body">
                    <form action="{{route('animais.update', $animal->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <input class="form-control mb-1 mt-3 " type="text" name="name"  value="{{$animal->name}}" required placeholder="Nome">
                        <div class="form-check form-check-inline">

                            <input {{$animal->sex == "Femea" ? 'checked': ''}} class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Femea">
                            <label class="form-check-label" for="inlineRadio1">Femea</label>
                        </div>
                        <div class="form-check mb-1 mt-3 form-check-inline">
                            <input {{$animal->sex == "Macho" ? 'checked': ''}}  class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Macho">
                            <label class="form-check-label" for="inlineRadio2">Macho</label>
                        </div>
                        <div class="input-group mt-3 mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Especie</label>
                            </div>
                            <select class="custom-select" name="species" id="inputGroupSelect01">
                                <option selected>Escolha...</option>
                                <option {{$animal->species == "Felino" ? 'selected': ''}} value="Felino">Felino</option>
                                <option {{$animal->species == "Canino" ? 'selected': ''}} value="Canino">Canino</option>
                                <option {{$animal->species == "Ave" ? 'selected': ''}} value="Ave">Ave</option>
                                <option {{$animal->species == "Reptil" ? 'selected': ''}} value="Reptil">Reptil</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Castramento</label>
                            </div>
                            <select class="custom-select" name="castration" id="inputGroupSelect01">
                                <option >Escolha...</option>
                                <option {{$animal->castration == "SIM" ? 'selected': ''}} value="SIM">Castrado</option>
                                <option {{$animal->castration == "NAO" ? 'selected': ''}} value="NAO">Não-Castrado</option>
                            </select>
                        </div>
                        <div class="input-group mt-3 mb-3">
                            <input class="form-control mb-1" type="text" name="breed" value="{{$animal->breed}}" required placeholder="Raça">
                        </div>
                        <div  class="input-group mt-3 mb-3">
                            <input class="form-control " type="date" name="birth"  value="{{$animal->birth}}" required placeholder="Nascimento">
                        </div>

                        <button class="btn btn-success">Atualizar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
