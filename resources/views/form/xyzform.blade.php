form

@if ($user->inrole('Admin'))
    <h3>L'utisateur a un role Administrateur</h3>
    @if ($user->hasAccess(['form.create']))
        <h3>Lutilisateur peut creer</h3>
    @endif
@endif