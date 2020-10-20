
@extends('layouts.app')

@section('content')
    <div class="container">
            <h2 class="row">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/12103229093353.55e1c74b80a45.png" class="img-fluid">

            </h2>
    </div>
@endsection
