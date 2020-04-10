@extends('admin.layout')

@section('admin')
{{-- Formulaire de create article --}}
    <div class="container px-5">
      <div class="card px-5">
          <div class="card-body">
            <h3 class="text-center py-2 ">Modification de l'article N°{{ $news->id }} </h3>
            <p class="mx-5 text-center">Dans ce Formulaire de modification, vous avez remarquer une erreur dans la saisie des informations relatives à l'article ! Veuillez apportez votre modification</p>
          <form action="{{ route('news.update', $news) }}" method="POST" class="" enctype="multipart/form-data">
                  {{ method_field('PUT') }}
                  @include('admin.include.form')
                  <div class="form-group">
                  <button type="submit" class="btn btn-warning mx-auto d-flex  text-white mx-3">Modifier l'article </button>
                  </div>
          </form>
        </div>
      </div>
    </div>

@endsection