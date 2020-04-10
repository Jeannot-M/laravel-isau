@extends('admin.layout', ['title' => 'Import Excel'])

@section('admin')
    
    <form action="{{ url('/import') }}" method="post" class="mt-5" enctype="multipart/form-data">
        @csrf

        @if (session('errors'))
            @foreach ($errors as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        @endif

        @if (session('success'))
        <li class="alert alert-success">{{ session('success') }}</li>
        @endif
        <div class="form-group">
          <label class="custom-file">
            <input type="file" name="file" id="file" placeholder="" class="custom-file-input" aria-describedby="fileHelpId">
            <span class="custom-file-control"></span>
          </label>
        </div>
        <button type="submit">Upload File</button>
    <a href="{{ url('/sample/student.xlsx') }}">Télécharger le fichier</a>
    </form>

@endsection