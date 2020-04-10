@extends('layout.main')

@section('main-css')
<link rel="stylesheet" href="{{ asset('css/master.css') }}">
@endsection

@section('content')
        <div class="container">
            <div class="card-deck">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input id="my-input" class="form-control p_input rounded-0 @error('names') is-invalid @enderror" type="text" name="names" placeholder="Entrer votre nom complet">
                            <small class="form-text text-muted">Renseignez votre Nom, Post-nom et Prenom</small>
            
                        </div>
                                    @error('names') 
                                    <div class="invalid-tooltip">{{ $errors->first('names') }}</div>
                                    @enderror
                    </div>
                </div>
            </div>
        </div>
@endsection