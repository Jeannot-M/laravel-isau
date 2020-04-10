@extends('security.template')

@section('security')
<a href="/" class="card-title text-center font-bold mb-3 d-flex">
    <img src="{{ asset('images/logo.png') }}" class="w-25  mx-auto" alt="" srcset="">
    </a>
    <h3 class="card-title text-center font-bold mb-5">{{ __('INSCRIPTION') }}</h3>
<form autocomplete="off" action="{{ url('/register') }}" method="POST">
    @csrf

    <div class="form-group">
        <input type="text" name="name" id="name" class="form-control" placeholder="Nom d'utilisateur">
    </div>

    {{-- <select class=" form-group custom-select" name="role" id="role">
        <option selected>Choisissez un role</option>
        @foreach ($data['roles'] as $role)
    <option class="" value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
    </select> --}}

    <div class="form-group">
        <select class="form-control form-control-lg" name="role" id="">
        <option selected>Choisissez un role</option>

            @foreach ($data['roles'] as $role)
                <option class="" value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
  </div>

    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Adresse email">
    </div>

    <div class="form-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
    </div>

    <div class="form-group">
        <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Répéter pour confirmer">
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary btn-block enter-btn uppercase">S'inscrire</button>
      </div>
</form>
<a href="{{ url('/login') }}">connexion</a>
@endsection