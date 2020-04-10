@extends('security.template',['title'=> 'Creation du nouveau mot de passe'])

@section('security')

<h2>Reset password</h2>
<h2>{{ $user->email }}</h2>

    <form action="{{ url('/reset/'.$user->email.'/'.$code) }}" method="post">
        @csrf

        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        @endif

        <div class="form-group">
            <input class="form-control p_input  @error('password') is-invalid @enderror" name="password" id="password" type="password" placeholder="Mot de passe">
            @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror                      
        
        </div>

        <div class="form-group">
            <input class="form-control p_input  @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation" type="password" placeholder="Mot de passe">
            @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror                      
        
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary btn-block enter-btn uppercase">{{ __('Changer') }}</button>
        </div>

    </form>

@endsection
