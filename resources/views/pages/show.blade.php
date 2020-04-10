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
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.js" media="print">
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css" media="print">
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    
  
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


</style>
{{-- Navigation and header --}}
    <div class="container-fluid bg-dark h-100 top__header">
        <div class="container p-1">
            <small class="text-white px-4"><i class="fa fa-mobile text-danger pr-2" aria-hidden="true"></i>+243 82 458 11 59</small>
            <small class="text-white px-4 pr-3"><a class="text-white" style="text-decoration-line: none;" href="mailto:isaugombe@gmail.com"><i class="fa fa-envelope text-danger pr-2" aria-hidden="true"></i>isaugombe@gmail.com</a></small>
            <small class="text-white px-4 align-content-end "><i class="fa fa-map-marker text-danger pr-2"></i> 02, av. De la liberation (ex. 24 Novembre), Gombe</small>
        </div>
    </div>

    <div class="container-fluid" style="background : #00ffd9;">
        @include('includes.navbar')
    </div>
    @include('includes.popup__fac')
    @include('includes.content')
    {{-- .<div class="container-fluid">
      
   
   {{-- end navigation --}}

<div class="container  my-3">
   
    <div class="row">
      <div class="col-md-4 mb-4 d-nona">
          <div class="card">
              <div class="card-body ">
                  <div class="row">
                      <div class="col-12">
                        
                    <div class="bg-fonct bg-info text-white text-center ">
                            <figure class="py-5 px-4">
                              <a href="{{ url('staff-academique') }}" class="text-white">
                              <h5 class="text-uppercase font-weight-bold">Fonctionnement <br> de l'ISAU</h5>
                              <p>L'ISAU comme tous les établissements, repose sur les facteurs humains</p>
                              </a>
                            </figure>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                      
                          <div class="bg-fonct bg-info text-white text-center ">
                              <figure class="py-5 px-4">
                                <a href="{{ url('organisation-enseignement') }}" class="text-white">
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
                              <a href="{{ url('our-story') }}" class="text-white">
                              <h5 class="text-uppercase font-weight-bold">Notre histoire</h5>
                              <p>Retrouver dans ce rubrique notre histoire qui met en détail nos racines</p>
                              </a>
                            </figure>
                        </div>

                      </div>

                      <div class="col-12 mt-2">
                          <div class="bg-archive bg-info text-white text-center ">
                            <figure class="py-5 px-4">
                              <a href="{{ url('archive') }}" class="text-white">
                              <h5 class="text-uppercase font-weight-bold">Archive</h5>
                              <p>Retrouvez dans ce rubrique, les ouvrages scientifique et autres publications </p>
                              </a>
                            </figure>
                        </div>

                      </div>

                      <div class="col-12 mt-2">
                        <div class="bg-etudiant bg-info text-white text-center ">
                          <figure class="py-5 px-4">
                            <a href="{{ url('student-space') }}"  class="text-white">
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

  <div class="col-md-8 mb-5 shadow-sm rounded-0">
      <div class="card">
          <div class="card-boby mt-3">
            <div class="card-title">
              <div class="clearfix">
                <div class="float-left">
              <h5 class="font-weight-bold text-uppercase text-center">{{ $news->name }}</h5>
                  
                </div>
                <div class="float-right">
                  <a href="javascript:window.print()" >
                  <i class="fa fa-print text-warning fa-2x" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
              
            @if ($news->image)
            <img src="{{ asset('storage/' .$news->image) }}" class="px-2 w-100 " style="max-height: 303px;"  alt="" srcset="">
            @else
            <img src="{{ asset('images/build.jpg') }}" class="px-2" style=" clear:both; width: 500px;
            height: 300px;" alt="" srcset="">
            @endif
              {{-- <img src="http://placehold.it/250x100"  class="w-100" alt="" srcset=""> --}}

              <div class="d-flex mt-2 mx-auto">
                      <strong class="text-center mx-auto py-2">Publier le {{ (new \DateTime( $news->created_at))->format("d-m-y \à\ H:i") }}</strong>

              </div>
              <p class="px-3 py-4 text-justify" style="line-height: 25px; font-size : 15px;">
                  {{ $news->content }}
              </p>
              {{-- @show --}}


          </div>

          @if (Route::has('login'))
              @if (Sentinel::check())
              <div class="mx-auto d-flex align-items-center mt-3" style="display: inline;">
                <a href="{{ route('news.edit', $news) }}" class="btn btn-outline-primary px-3 py-2 mr-2">Modifier</a>

                <form action="{{ route('news.delete', $news) }}" id="delete" method="POST">
                  @csrf
                  @method('DELETE')
                     
                       <a href="#" class="btn btn-outline-danger px-3 py-2 " onclick="document.getElementById('delete').submit()">Supprimer</a>
                </form>
                
              </div>
              @endif
          @endif
          
      </div>
  </div>
</div>


 </div>

  {{-- Footer include --}}
    @include('includes.footer')

    
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
<script src="{{ asset('public/js/nav.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>