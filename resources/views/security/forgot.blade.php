@extends('security.template',['title'=> 'Mot de passe oublié'])

@section('security')

<a href="/" class="card-title text-center font-bold mb-3 d-flex">
    <img src="{{ asset('images/logo.png') }}" class="w-25  mx-auto" alt="" srcset="">
    </a>
    <h3 class="card-title text-center font-bold mb-5">{{ __('Mot de passe oublié') }}</h3>
    @if (session('error'))
        <div class="alert alert-danger rounded-0" role="alert">
           {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-danger rounded-0" role="alert">
           {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('password') }}" method="POST" novalidate>
            @csrf
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required name="email" value="{{ old('email') }}" autofocus placeholder="Adresse Email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary btn-block enter-btn uppercase">{{ __('Envoyer') }}</button>
        </div>
                            
</div>
</form>


@endsection