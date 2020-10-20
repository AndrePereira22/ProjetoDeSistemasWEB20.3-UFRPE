@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar Dados</div>
                    <div class="card-body">
                        <form action="{{route('services.update', $service->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">

                            <input class="form-control mb-1 mt-3 " type="text" name="description"  value="{{$service->description}}" required placeholder="Descrição">

                            <div class="input-group mt-3 mb-3">
                                <input class="form-control mb-1" type="text" name="price" value="{{$service->price}}" required placeholder="Preço">
                            </div>
                            <div  class="input-group mt-3 mb-3">
                                <input class="form-control " type="time" name="duration"  value="{{$service->duration}}" required placeholder="Duração">
                            </div>

                            <button class="btn btn-success">Atualizar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
