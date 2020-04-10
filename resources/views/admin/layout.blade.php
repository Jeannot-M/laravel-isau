<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ page_title($title ?? '')  }}</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="{{ asset('css/master.css') }}" />
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-dark text-center navbar-brand-wrapper">
      <a class="navbar-brand brand-logo text-white" href=""><img src=""  />ISAU</a>
        <a class="navbar-brand brand-logo-mini text-white" href=""><img src="" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#">
              <img class="rounded-circle" src="" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <style>
      .icon {
        width: 27px;
       height: auto;
      }
    </style>
    {{-- @include('includes.content') --}}
    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
              
       
          <div class="user-info mt-5">
            @if (Sentinel::check())
            <img class="mt-3" src="{{ asset('images/logo.png') }}" alt="">

            <p class="name">{{ Sentinel::getUser()->name }}</p>
            <p class="designation">Admin</p>
            <span class="online"></span>
            @endif
          </div>
          <ul class="nav ">
            <li class="nav-item active">
              <a class="nav-link align-items-center" href="{{ route('admin.index') }}">
                <img src="{{ asset('images/dash.png') }}" style="width: 27px; height: auto;" class="icon" alt="">

                <span class="menu-title  ">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link align-items-center" href="{{ route('news.create') }}">
              <img src="{{ asset('images/create.png') }}" style="width: 27px; height: auto;" alt="">

                <span class="menu-title ">Nouvel</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link align-items-center" href="{{ route('admin.gallery') }}">
                <img src="{{ asset('images/todo.png') }}" style="width: 27px; height: auto;" alt="">

                <span class="menu-title ">Gallerie</span>
              </a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link align-items-center" href="{{ route('student.index') }}">
              <img src="{{ asset('images/student.png') }}" style="width: 27px; height: auto;" alt="">
                <span class="menu-title ">Inscription</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link align-items-center" href="">
                <img src="{{ asset('images/wid.png') }}" style="width: 27px; height: auto;" alt="">
                <span class="menu-title ">Widget</span>
              </a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('nav.index') }}">
                <img src="" alt="">
                <span class="menu-title ">Design</span>
              </a>
            --}}
            </li>
            @if (Route::has('login'))
            <li class="nav-item">
              @if (Sentinel::check())
              <a class="nav-link" href="{{ route('register') }}">
                <img src="" alt="">
                <span class="menu-title ">Utilisateur</span>
              </a>
              @endif
              </li>
            @endif
            
            <li class="nav-item">
              
              @if (Sentinel::check())
              <a class="nav-link align-items-center" href="{{ url('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               <img src="{{ asset('images/out.png') }}" style="width: 27px; height: auto;" alt="">

               {{ __('Déconnexion') }}

           </a>

           <form id="logout-form" action="{{ url('logout') }}" method="POST">
               @csrf
           </form>

            @else
            <li class="nav-item">
              <a class="nav-link align-items-center" href="{{ url('login') }}">
                <img src="{{ asset('images/wid.png') }}" style="width: 27px; height: auto;" alt="">
                <span class="menu-title ">Connexion</span>
              </a>
            </li>
            @endif
                
            </li>
          </ul>
        </nav>

        <!-- partial -->




        <div class="content-wrapper">
            @yield('admin')
        </div>




        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Tableau de bord - Isau Kinshasa</a> &copy; 
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
  </div>
  @yield('extra-js')
  <script>
    $(document).ready(function() {
        $('form').ajaxForm({
            beforeSend:funcion(){
                $('#success').empty();
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
            },

            uploadProgress:function (event, position, total, percentComplete) {
                $('.progress-bar').text(percentComplete + '0%');
                $('.progress-bar').css('width', percentComplete + '0%');
            },
            success:function(data)
            {
                if(data.success)
                {
                    $('#success').html('<div class="text-success text-center"><b>'+data.success+'
                    <b></div><br/><br/>');
                    $('#success').append(data.image);
                    $('.progress-bar').text('Uploaded');
                    $('.progress-bar').css('width', '100%');
                }
            }
        });
    });
</script>
  <script src="http://malsup.github.com/jquery.form.js"></script>
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
  
  <script src="{{ asset('public/js/off-canvas.js') }}"></script>
  <script src="{{ asset('public/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('public/js/misc.js') }}"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
</body>

</html>
