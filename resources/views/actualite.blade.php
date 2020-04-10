<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">
    
  
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap');
      </style>
    <title>{{ page_title($title ?? '')  }}</title>
</head>
<body class="bg-white">
    

    <style>
      .card__img::shadow {
        box-shadow: 0em;
      }
        .font-m 
        {
            font-family: Poppins;
        }
        .bg-fonct {
          background: url('images/student.png');

          max-width: 100%;
          height: 100%;
          
        }
        .bg-etudiant {
          background: url('images/student.png');
          max-width: 100%;
          /* height: 100%; */
          
        }
        .bg-story {
          background: url('images/student.png');

          max-width: 100%;
          /* height: 100%; */
          
        }
        .bg-archive {
          background: url('images/student.png');

          max-width: 100%;
          /* height: 100%; */
          
        }
        .bg-fonct h5 p {
          color: #E5E5E5;
          text-align: center;
        }

        /* content slide */

        .popup {
          background: rgba(0, 0, 0, 0.6);
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          display: none;
          justify-content: center;
          align-items: center;
          z-index: 99;
          /* text-align: center */
        }

        .popup-content {
          height: auto;
          width: 700px;
          background: #fff;
          padding: 20px;
          border-radius: 1px;
          position: relative;
        }

        .close {
          position: absolute;
          top: 17px;
          right: 20px;
          background: #fff;
          height: 20px;
          width: 20px;
          border-radius: 50%;
          box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 0.95);
          /* cursor: pointer; */
        }

        .button {
          background: #34495e;
          padding: 8px 55px;
          color: #fff;
          font-weight: bolder;
          text-align: center;
          text-transform: uppercase;
          font-size: 11px;
          border-radius: 5px;
          box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 0.55);
          margin-top: 25px;
          text-decoration: none;
          transition: 0.4s;
          justify-content: center;
        }

        .button:hover {
          background: #34495e;
          color: #fff;
          text-decoration: none;
        }






        /* #b1 { background: url('images/archive.jpg') }
#b2 { background: url('images/cloture.jpg'); }
#b3 { background: hsl(60, 50%, 50%); }
#b4 { background: hsl(90, 50%, 50%); }
#b5 { background: hsl(12, 50%, 50%); }
#b6 { background: hsl(150, 50%, 50%); }
#b7 { background: hsl(180, 50%, 50%); }
#b8 { background: hsl(210, 50%, 50%); }
#b9 { background: hsl(240, 50%, 50%); }
#b10 { background: hsl(270, 50%, 50%); } */
</style>
{{-- Navigation and header --}}
<header class="header" id="home">
  <div class="text-white float-left">LOGO NAME</div>
  <div class="menu">
    <span class="bar"></span>
  </div>
  <nav class="nav">
    <div class="overlay">
      <ul>
        <li><a href="/">Actualité</a></li>
        <li><a href="">Sections</a></li>
        <li><a href="{{ route('pages.gallery') }}">Galerie</a></li>
        <li><a href="{{ route('student.create') }}">Inscription</a></li>
        <li><a href="#"  id="button">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>

  {{-- response --}}

  {{--  --}}
    <div class="container-fluid bg-dark h-100 top__header">
        <div class="container p-1">
            <small class="text-white px-4"><i class="fa fa-mobile text-danger pr-2" aria-hidden="true"></i>+243 82 458 11 59</small>
            <small class="text-white px-4 pr-3"><a class="text-white" style="text-decoration-line: none;" href="mailto:isaugombe@gmail.com"><i class="fa fa-envelope text-danger pr-2" aria-hidden="true"></i>isaugombe@gmail.com</a></small>
            <small class="text-white px-4 align-content-end "><i class="fa fa-map-marker text-danger pr-2"></i> 02, av. De la liberation (ex. 24 Novembre), Gombe</small>

          @if (Route::has('login'))
            @if(Sentinel::check())

              <form action="{{ url('/logout') }}" method="post" id="logout">
                  @csrf
                  <a href="#logout" onclick="document.getElementById('logout').submit()"
                   class="text-white align-content-end"> <i class="fa fa-user pl-5 text-success"></i> Deconnexion</a>
              </form>
               
            @endif
          @endif

        </div>
    </div>

    <div class="container-fluid" style="background : #00ffd9;">
        @include('includes.navbar')
    </div>
    @include('includes.popup__fac')
    @include('includes.content')
    
{{-- Carousel --}}



<div class="container">
  <div class="row flex-row">
    <div class="col-md-8 p-5 ">
       
        <div id="carouselExampleControls" class="carousel slide" data-intervale="true" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-uppercase font-weight-bold" style="">Bienvenue sur notre site web</h5>
                  <p>Du 25 Novembre au 25 Decembre</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
    </div>
    <div class="col-md-4 py-5 px-3">
      <div class="row">
        <div class="col-12">
          <h5 class="text-danger">Preparatoire</h5>
          L’admission dans l’une de nos deux fillers à savoir : l’Architecture et l’Urbanisme n’est pas automatique.
        </div>
        <div class="col-12 mt-4">
          <h5>1er Cycle</h5>

          D’une durée de 3 ans, le 1er cycle pour finalité de former des cadres moyens, capable de mener sur le terrain des enquêtes sociales, économiques et ... 
        </div>

        <div class="col-12 mt-4">
          <h5>2eme Cycle</h5>

          Structuré de la même manière que le 1er, avec une composante théorique et des travaux pratiques sur terrain et en atelier, ...
        </div>
      </div>
    </div>
  </div>
</div>




    
   {{-- end navigation --}}

<div class="container  my-3">
   
    <div class="row">
      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body ">
                  <div class="row">
                      <div class="col-12">
                        
                    <div class="bg-fonct bg-info text-white text-center ">
                            <figure class="py-5 px-4">
                            <a href="{{ url('/staff-academique') }}" class="text-white">
                              <h5 class="text-uppercase font-weight-bold">Fonctionnement <br> de l'ISAU</h5>
                              <p>L'ISAU comme tous les établissements, repose sur les facteurs humains</p>
                              </a>
                            </figure>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                      
                          <div class="bg-fonct bg-info text-white text-center ">
                              <figure class="py-5 px-4">
                                <a href="{{ url('/organisation-enseignement') }}" class="text-white">
                                <h5 class="text-uppercase font-weight-bold">Organisation des enseignements</h5>
                                <p>L'ISAU est la conséquence de la fusion de deux Institut du Bâtiment et des Travaux Publics</p>
                                </a>
                              </figure>
                          </div>
                      </div>

                      <div class="col-12 mt-2">
                        {{-- <a href="{{ url('our-story') }}">
                          <img src="{{ asset('images/ar.png') }}" class="img-fluid" alt="" srcset="">
                        </a> --}}

                        <div class="bg-story bg-info text-white text-center ">
                            <figure class="py-5 px-4">
                              <a href="{{ url('/our-story') }}" class="text-white">
                              <h5 class="text-uppercase font-weight-bold">Notre histoire</h5>
                              <p>Retrouver dans ce rubrique notre histoire qui met en détail nos racines</p>
                              </a>
                            </figure>
                        </div>

                      </div>

                      <div class="col-12 mt-2">
                          <div class="bg-archive bg-info text-white text-center ">
                            <figure class="py-5 px-4">
                              <a href="{{ url('/archive') }}" class="text-white">
                              <h5 class="text-uppercase font-weight-bold">Archive</h5>
                              <p>Retrouvez dans ce rubrique, les ouvrages scientifique et autres publications </p>
                              </a>
                            </figure>
                        </div>

                      </div>

                      <div class="col-12 mt-2">
                        <div class="bg-etudiant bg-info text-white text-center ">
                          <figure class="py-5 px-4">
                            <a href="{{ url('/student-space') }}"  class="text-white">
                            <h5 class="text-uppercase font-weight-bold">Espace étudiant</h5>
                            <p>Forum ou espace dedié à la communauté estudiantine de l'ISAU</p>
                            </a>
                          </figure>
                      </div>

                    </div>

                </div>
          </div>
      </div>
  </div>

  <div class="col-md-8 mb-5">
      <div class="card">
          <div class="card-boby mt-3">
            <div class="card-title"></div>
              
              @forelse ($news as $item)
                  @include('includes.card')
              @empty
              <h5 class="text-center">Aucune actualité pour le moment </h5>
              @endforelse


          </div>
      </div>
      <span class="mx-auto d-flex rounded-0 ">{{ $news->links() }}</span>
  </div>
</div>


 </div>

  {{-- Footer include --}}
    @include('includes.footer')

    <script>
    //       function run(interval, frames) {
    //   var int = 1;

    //   function func() {
    //     document.body.id = "b" + int;
    //     int++;
    //     if (int === frames) {
    //       int = 1;
    //     }
    //   }

    //   var swap = window.setInterval(func, interval);
    // }

    // run(1000, 10); //milliseconds, frames

    
    </script>
    <script type="text/javascript">
      $(window).on('load',function(){
          $('#fac').modal('show');
      });
  </script>
  <script>
    document.getElementById("button").addEventListener("click", function () {
      document.querySelector(".popup").style.display = "flex";
    })

    document.querySelector(".close").addEventListener("click", function () {
      document.querySelector(".popup").style.display = "none";
    })

    document.getElementById("fac").addEventListener("click", function () {
      document.querySelector(".popup_fac").style.display = "flex";
      
    })

    document.querySelector(".fermer").addEventListener("click", function () {
      document.querySelector(".popup_fac").style.display = "none";
    })

   
  </script>
  

  @yield('extra-js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="{{ url('/js/nav.js') }}"></script>
<script src=""></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>