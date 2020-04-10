{{-- Footer --}}

<footer>
  <div class="container-fluid bg-dark" >
        <div class="container mx-auto">
            <div class="row p-5 text-white">
                <div class="col-md-4">
                    <h5 class="mb-3 font-weight-bold text-info">INSTITUT SUPERIEUR D'ARCHITECTURE ET D'URBANISME</h5>
                    <p class="text-exception">Un etablissement Supérieur qui forme de cadre et intervient aussi dans l'aménagement du territoire Congolais</p>
                </div>
                <div class="col-md-4">
                    <h5 class="font-weight-bold text-info mb-3">NAVIGATION</h5>
                    <ul class="list-unstyled text-white ">
                        <li class="py-1 "><a class="text-white" href="{{ route('actualite') }}">Actualités</a></li>
                        <li class="py-1 "><a class="text-white" href="">Galerie</a></li>
                        <li class="py-1 "><a class="text-white" href="">Inscription</a></li>
                        <li class="py-1" id="button"><a class="text-white" id="button"  class="">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="font-weight-bold text-info mb-3">LOCALISATION</h5>

                    {{-- <p>Bottom footer</p> --}}

                    <p>02, av. De la liberation (ex. 24 Novembre), Gombe</p>
                    <p class="mb-0"><i class="fa fa-phone text-danger mr-3"></i>+243 82 458 11 59</p>
                    <p><a href="mailto:isaugombe@gmail.com" class="text-white" style="text-decoration-line: none;"><i class="fa fa-envelope text-danger mr-3"></i>isaugombe@gmail.com</a></p>
                </div>
            </div>
        </div>
  </div>

  {{-- Copyright 2020 --}}

  <div class="mx-auto text-center p-3">
    <span>Copyright &copy; <?= date('Y'); ?>  | Designed by <a href="http://" class="text-warning"> Jeannot M.</a></span>
  </div>

</footer>
