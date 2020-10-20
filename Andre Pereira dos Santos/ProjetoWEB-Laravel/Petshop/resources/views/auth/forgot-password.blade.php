
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
</head>
<body>
<div class="container ">
    <div class="d-flex justify-content-center h-100">
        <div class="cartao">
            <div class="card-header  text-light">
                {{ __(' Esqueceu sua senha?  Basta nos informar seu endereço de   e-mail e nós enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}

            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="mb-6 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="input-group form-group">

                        <input type="text" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                    </div>

                    <div class="form-group">
                        <input type="submit" id="reset" value="{{ __('Enviar') }}" class="btn float-center login_btn form-control">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>

