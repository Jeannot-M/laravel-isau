<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    {{-- <title>{{ page_title($title ?? '')  }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ url('css/master.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
</head>
<body>
            <div class="container">
            <div class="container-fluid">
                    <div class="row">
                        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
                        <div class="card col-lg-4 mx-auto">
                            <div class="card-body px-5 py-5">
                                @yield('security')
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

</body>
</html>
