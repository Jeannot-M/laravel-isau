<h2>Hello {{ $user->name }}</h2>
<p>
    Please click the activation button to activate your account.
<a href="{{ url('activate/'.$user->email.'/'.$code) }}">Activate account</a>
</p>