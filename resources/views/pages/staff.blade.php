@extends('layout.main')


@section('main-css')
<link rel="stylesheet" href="{{ asset('css/master.css') }}">
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8 mb-4">
        <div class="card">
          <div class="card-body">
            {{-- <h5 class="card-title">Barre de navigation - Top</h5> --}}
            <div class="row">
              <div class="col-12">
                <h5 class="py-4 text-uppercase font-weight-bold">Fonctionnement de l'ISAU</h5>
                <p class="text-justify" style="max-width: 85%; height : auto; line-height: 25px; font-size: 16px;">Comme pour tous les établissements de l'Enseigneent Superieur et Universitaire, le fonctionnement de l'ISAU repose sur les facteurs humains. S'agissant particulièrement du Comité de Gestion.</p><br>
                <p>
                    Notons aussi que celui-ci est composé de :
                </p><br>


                   

              </div>
              <div class="col-md-4">
                      <div class="card">
                      <img class="card-img-top" src="{{ asset('images/dg-isau.jpg') }}" alt="">
                          <div class="card-body text-center ">
                              <p class="card-text">Directeur Général</p>
                              <span class="font-weight-bold">Prof. Ordinaire MPURU MAZEMBE RENE</span>
                          </div>
                      </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img class="card-img-top" src="{{ asset('images/SGACAD.jpg') }}" alt="">
                      <div class="card-body text-center ">
                        <p class="card-text">Secretaire Général Académique</p>
                        <span class="font-weight-bold">Prof. Dr. MULUMBA KENGA</span>
                      </div>
                      </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img class="card-img-top" src="{{ asset('images/sgad.png') }}" class="img-fluid" style=" width: 205px;
                      height: 148px;" alt="">
                      <div class="card-body text-center ">
                        <p class="card-text">Secretaire Général Administratif</p>
                        <span class="font-weight-bold">C.T. MBUYA KABANGU</span>
                      </div>
                    </div>
              </div>
              
              <div class="offset-4 col-md-4 offset-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/ab.jpg') }}" class="img-fluid" alt="">
                    <div class="card-body text-center ">
                      <p class="card-text">Administrateur du Budget</p>
                      <span class="font-weight-bold">DCS. LUKUTE NDJADI</span>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-3 mb-4">
        <div class="card">
          <div class="card-body">
            <h5>Coopération interuniversitaire et internationale</h5>
        </div>
        </div>
      </div>
    </div>
@endsection