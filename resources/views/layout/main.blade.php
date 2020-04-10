<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ page_title($title ?? '')  }}</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.p') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">
    @yield('extra-css')
    @yield('main-css')
</head>
<body >
    

    <style>
        .font-m {
            font-family: Poppins;
        }
        .gn {
            background: url('./images/buzi.jpg');
            margin: auto;
            max-width:80%;height:25%;
            transition: all .3s;
        }
        .gn:hover {
            /* background: #59ADFF; */
            outline-color: #59ADFF
            transition: all .3s;
        }
        /* .nav-link:hover {
            background: #59ADFF;
            margin: 2rem;
        } */
    </style>
{{-- Navigation and header --}}
<div class="container-fluid bg-dark h-100">
    <div class="container p-1">
        <small class="text-white px-4"><i class="fa fa-mobile text-danger pr-2" aria-hidden="true"></i>+243 82 458 11 59</small>
        <small class="text-white px-4 pr-3"><a class="text-white" style="text-decoration-line: none;" href="mailto:isaugombe@gmail.com"><i class="fa fa-envelope text-danger pr-2" aria-hidden="true"></i>isaugombe@gmail.com</a></small>
        <small class="text-white px-4 align-content-end "><i class="fa fa-map-marker text-danger pr-2"></i> 02, av. De la liberation (ex. 24 Novembre), Gombe</small>
    </div>
</div>
<div class="container-fluid" style="background : #00ffd9;">
    <div class="container p-1">
      <div class="">
          <a href="{{ route('actualite') }}">
      <img src="{{asset('images/logo.png')}}" style="width: 50%;" alt="">
    </a>
      </div>
        <nav class="nav justify-content-end text-uppercase">
          <a class="nav-link active text-info font-m" href="{{ route('actualite') }}">Actualité</a>
        <a class="nav-link text-white font-m" href="">Facultés</a>
        <a class="nav-link text-white font-m" href="{{ url('galerie') }}">Galerie</a>
          <a class="nav-link text-white font-m" href="">Inscription</a>
          <a class="nav-link text-white  font-m" id="button" href="#contact">Contactez-nous</a>

        </nav>
    </div>
</div>
@include('includes.content')

   {{-- end navigation --}}
        @yield('page-show')

        <div class="container ">
            @yield('content')

        </div>

  {{-- Footer include --}}
    @include('includes.footer')
    <script>
        document.getElementById("button").addEventListener("click", function () {
          document.querySelector(".popup").style.display = "flex";
        })
    
        document.querySelector(".close").addEventListener("click", function () {
          document.querySelector(".popup").style.display = "none";
        })
      </script>
<script src="{{ asset('public/js/nav.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>