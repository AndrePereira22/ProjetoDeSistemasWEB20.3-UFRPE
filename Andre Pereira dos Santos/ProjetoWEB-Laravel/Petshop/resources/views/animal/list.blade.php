
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header">
                    <span class="float-left">Animais</span>
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
                                <td>Nascimento</td>
                                <td>Castrado</td>
                                <td></td>

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
                                            <div class="col-4">
                                                <a class="c" href="{{route('animais.show', $dado->id )}}"><i class="far fa-eye fa-2x "></i></a>
                                            </div>
                                            <div class="col-4">
                                                <a class="e" href="{{route('animais.edit', $dado->id )}}"><i class="fas fa-pen-square fa-2x "></i></a>
                                            </div>
                                            <div class="col-4">
                                                <form action="{{route('animais.destroy', $dado->id )}}" method="POST">
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
