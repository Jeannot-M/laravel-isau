<h1>Hi ! {{ $user->name }}</h1>

<p>
    S'il vous plait ! Cliquer sur le lien afin de recréer un nouveau mot de passe
<a href="{{ url('reset/'.$user->email.'/'.$code) }}">Changer le mot de passe</a>
</p>