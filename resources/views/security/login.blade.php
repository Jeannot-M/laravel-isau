
@extends('security.template',['title'=> 'Connexion'])

@section('security')
        <a href="/" class="card-title text-center font-bold mb-3 d-flex">
            <img src="{{ asset('images/logo.png') }}" class="w-25  mx-auto" alt="" srcset="">
            </a>
            <h3 class="card-title text-center font-bold mb-5">{{ __('Welcome back !') }}</h3>
            @if (session('error'))
                <div class="alert alert-danger rounded-0" role="alert">
                    <i class="fa fa-warning"></i>
                   {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-danger rounded-0" role="alert">
                   {{ session('success') }}
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST" novalidate>
        @csrf


            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control " placeholder="Adresse Email" required>
            </div>

            <div class="form-group">
                <input class="form-control p_input" name="password" id="password" type="password" placeholder="Mot de passe" required>
              
            </div>

            <div class="form-group d-flex align-items-center">               
                    <input type="checkbox" name="remember" id="remember" class="">
                    <label class="mt-2 ml-1" for="remember" >Se souvenir de moi</label> 
            </div>

    
    <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary btn-block enter-btn uppercase">{{ __('Connexion') }}</button>
          </div>
                             <div class="mt-4 mr-auto">
                              @if (Route::has('forgot.password'))
                                    <a class="text-dark" href="{{ route('forgot.password') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>&nbsp;&nbsp;&nbsp;
                                    @endif
                                @if (Route::has('register'))
                                    <a class="text-danger" href="{{ route('register') }}">
                                        {{ __('S\'inscrire ici ') }}
                                    </a>
                                @endif
                            </div>
</div>
</form>

@endsection
