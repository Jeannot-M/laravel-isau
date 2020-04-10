@extends('layout.main', ['title' => 'Galleries'])

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

@endsection

@section('content')
    
    <div class="gallery-section">
        <div class="inner-width">
            <h1>Notre Galerie</h1>
            <div class="border"></div>

            <div class="gallery">
                
                <a href="{{ asset('images/archive.jpg') }}" class="image">
                    <img src="{{ asset('images/archive.jpg') }}" alt="">
                </a>

                <a href="{{ asset('images/archive.jpg') }}" class="image">
                    <img src="{{ asset('images/archive.jpg') }}" alt="">
                </a>

                <a href="{{ asset('images/archive.jpg') }}" class="image">
                    <img src="{{ asset('images/archive.jpg') }}" alt="">
                </a>

                <a href="{{ asset('images/archive.jpg') }}" class="image">
                    <img src="{{ asset('images/archive.jpg') }}" alt="">
                </a>

                <a href="{{ asset('images/archive.jpg') }}" class="image">
                    <img src="{{ asset('images/archive.jpg') }}" alt="">
                </a>

                <a href="{{ asset('images/build.jpg') }}" class="image">
                    <img src="{{ asset('images/build.jpg') }}" alt="">
                </a>

                <a href="{{ asset('images/archive.jpg') }}" class="image">
                    <img src="{{ asset('images/archive.jpg') }}" alt="">
                </a>

                <a href="{{ asset('images/archive.jpg') }}" class="image">
                    <img src="{{ asset('images/archive.jpg') }}" alt="">
                </a>

            </div>
        </div>
    </div>
@section('extra-js')
<script>
    $(".gallery").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled : true
        }
    });
</script>
@endsection
    


@endsection
