@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-lg-center ">
<div class="col-lg-12">
<div class="card ">
    <div class="card-header">Novo Animal</div>
    <div class="card-body ">
        <form action="{{route('animais.store')}}" method="POST">
            @csrf
            <input class="form-control mb-1 mt-3 " type="text" name="name" required placeholder="Nome">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Femea">
                <label class="form-check-label" for="inlineRadio1">Femea</label>
            </div>
            <div class="form-check mb-1 mt-3 form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Macho">
                <label class="form-check-label" for="inlineRadio2">Macho</label>
            </div>
            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Especie</label>
                </div>
                <select class="custom-select" name="species" id="inputGroupSelect01">
                    <option selected>Escolha...</option>
                    <option value="Felino">Felino</option>
                    <option value="Canino">Canino</option>
                    <option value="Ave">Ave</option>
                    <option value="Reptil">Reptil</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Castramento</label>
                </div>
                <select class="custom-select" name="castration" id="inputGroupSelect01">
                    <option selected>Escolha...</option>
                    <option value="SIM">Castrado</option>
                    <option value="NAO">Não-Castrado</option>
                </select>
            </div>
        <div class="input-group mt-3 mb-3">
            <input class="form-control mb-1" type="text" name="breed" required placeholder="Raça">
        </div>
            <div  class="input-group mt-3 mb-3">
            <input class="form-control " type="date" name="birth"  required placeholder="Nascimento">
            </div>
            <input class="form-control mb-1" type="hidden" name="user_id" value="{{Auth::user()->id}} ">
            <input class="btn btn-success justify-content-center " type="submit"  >

        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
