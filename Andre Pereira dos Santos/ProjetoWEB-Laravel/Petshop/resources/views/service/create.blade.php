

@extends('layouts.app')

@section('content')
<div class="container mt-2">
<div class="card text-black  mb-3 ">
    <div class="card-header ">Novo Serviço</div>
    <div class="card-body ">
        <form action="{{route('services.store')}}" method="POST">
            @csrf
    <div class="form-group row">
        <label for="text" class="col-3 col-form-label">Nome</label>
        <div class="col-9">
            <input id="text" type="text" name="description" placeholder="Descrição"  aria-describedby="textHelpBlock" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-3 col-form-label">Preço</label>
        <div class="col-9">
            <input id="text" type="number" name="price" placeholder="Preço"  aria-describedby="textHelpBlock" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-5 col-form-label" for="select">Tempo Medio</label>
        <div class="col-7">
            <input class="form-control  " type="time" name="duration" required placeholder="Horario">

        </div>
    </div>

    </div>
    <div class="form-group row">
        <div class="offset-4 col-12">
            <button name="submit" type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

