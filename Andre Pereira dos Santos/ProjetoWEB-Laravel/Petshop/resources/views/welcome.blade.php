<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Petshop </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">

        <a class="navbar-brand js-scroll-trigger" ></a>

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a  href="{{ url('/dashboard') }}" class="navbar-brand js-scroll-trigger mr-2" >Pagina Inicial</a>
                @else
                    <a  href="{{ route('login') }}" class="navbar-brand js-scroll-trigger mr-2" >Login</a>

                    @if (Route::has('register'))
                        <a  href="{{ route('register') }}" class="navbar-brand js-scroll-trigger mr-2" >Registrar</a>
                    @endif
                @endif
            </div>
        @endif
    </div>
</nav>





<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Petshop</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Alguns anjos não têm asas, têm quatro patas</h2>

        </div>
    </div>
</header>

<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © PETSHOP 2020</div></footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
