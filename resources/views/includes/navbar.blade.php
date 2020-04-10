<div class="container p-1">

    <div class="logo-nav">
      <a href="{{ route('actualite') }}">
        <img src="{{asset('images/logo.png')}}" style="width: 50%;" alt="">
      </a>
    </div>
      <nav class="nav justify-content-end text-uppercase  ">
        <a class="nav-link active text-dark font-m" href="/">Actualité</a>
      <a class="nav-link text-white font-m" id="fac">Facultés</a>
      <a class="nav-link text-white font-m" href="{{ route('pages.gallery') }}">Galerie</a>
      <a class="nav-link text-white font-m" href="{{ route('student.create') }}">Inscription</a>
        <a class="nav-link text-white  font-m " onclick="" id="button" >Contact</a>
    </nav>

  </div>
 
