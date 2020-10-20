
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-left">Serviços</span>
                    <a href="{{route('services.create')}}" class="btn btn-primary float-right"><i class="fas fa-sign-language"></i>  Novo Serviço</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead >
                            <tr>
                                <td>Descrição</td>
                                <td>Valor</td>
                                <td>Duração</td>
                                <td></td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $dado)
                                <tr>
                                    <td>{{$dado->description}}</td>
                                    <td>{{$dado->price}}</td>
                                    <td>{{$dado->duration}}</td>

                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                <a  class="c" href="{{route('services.show', $dado->id )}}" ><i class="far fa-eye fa-2x "></i></a>
                                            </div>
                                            <div class="col-4">
                                                <a class="e" href="{{route('services.edit', $dado->id )}}" ><i class="fas fa-pen-square fa-2x "></i></a>
                                            </div>
                                            <div class="col-4">
                                                <form action="{{route('services.destroy', $dado->id )}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="d" type="submit"><i class="fas fa-trash fa-2x "></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
{{--                    @php--}}
{{--                    echo "Opa";--}}
{{--                    @endphp--}}
{{--                    <?php echo "opa 2" ?>--}}
{{--                    {{\App\Http\Controllers\DisciplinesController::teste()}}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
