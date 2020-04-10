@extends('admin.layout')

@section('admin')
{{-- Formulaire de create article --}}
    <div class="container px-5">
      <div class="card px-5">
          <div class="card-body">
            <h3 class="text-center py-2 ">Formulaire de création</h3>
            <p class="mx-5 text-center">Un formulaire pour la création ou 'édition de votre actualité. Veuillez à ce que tout le champ au possible soit remplis</p>
          <form action="{{ route('news.store') }}" method="POST" class="" enctype="multipart/form-data" novalidate>

                  @include('admin.include.form')
                  <div class="form-group">
                      <button type="submit" class="btn btn-warning mx-auto d-flex  text-white mx-3">Créer et Publier</button>
                  </div>
          </form>
        </div>
      </div>
    </div>

@endsection