



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link href="{{asset('assets/css/login.css')}}" rel="stylesheet" />
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Registrar</h3>

            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend ">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nome" />

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend ">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" id="email" type="email" name="email" :value="old('email')" required placeholder="Email"  />

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend ">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="password"  type="password" name="password" required autocomplete="new-password" placeholder="Senha" />

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" id="password_confirmation" class="form-control"  type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Senha">
                    </div>
                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 float-left mt-2" href="{{ route('login') }}">
                                {{ __(' Já é Registrado?') }}
                            </a>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit"  value=" {{ __('Registrar') }}" class="btn float-right login_btn ">
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
</body>
</html>


