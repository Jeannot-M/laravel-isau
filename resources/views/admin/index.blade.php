@extends('admin.layout', ['title' => 'Admin'])

@section('admin')


    <h3 class="page-heading mb-4">Taleau de board</h3>
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <h4 class="text-danger">
                  <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                </h4>
              </div>
              <div class="float-right">
                <p class="card-text text-dark">Visiteur</p>
                {{-- <h4 class="bold-text">{{Session::get('compteur_de_visite')}}</h4> --}}
              </div>
            </div>
            <p class="text-muted">
              <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 65% lower growth
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <h4 class="text-warning">
                  <i class="fa fa-list highlight-icon" aria-hidden="true"></i>
                </h4>
              </div>
              <div class="float-right">
                <p class="card-text text-dark">Publication</p>
                <h4 class="bold-text">{{ $news->count() }}</h4>
              </div>
            </div>
            {{-- <p class="text-muted">
              <i class="fa fa-list mr-1" aria-hidden="true"></i> Product-wise sales
            </p> --}}
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <h4 class="text-success">
                  <i class="fa fa-users highlight-icon" aria-hidden="true"></i>
                </h4>
              </div>
              <div class="float-right">
                <p class="card-text text-dark">INSCRIPTION</p>
              {{-- <h4 class="bold-text">{{ $inscrits->count() }}</h4> --}}
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <h4 class="text-primary">
                  <i class="fa fa-eye highlight-icon" aria-hidden="true"></i>
                </h4>
              </div>
              <div class="float-right">
                <p class="card-text text-dark text-uppercase">Followers</p>
                <h4 class="bold-text">+62,500</h4>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="card-deck">
      <div class="card col-lg-12 px-0 mb-4">
        <div class="card-body">
          <h5 class="card-title">Listes de vos publications</h5>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead>
                <tr class="text-primary">
                  <th>Order No</th>
                  <th>Visuel</th>
                  <th>Titre</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th>Date de publication</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @forelse ($news as $item)
                    <tr class="">
                      <td>{{ $item->id }}</td>
                    <td><img src="{{ asset('storage/' .$item->image) }}" style="height: 35px; width: 35px;" class="rounded-circle" alt="" srcset=""></td>
                      <td>{{ Str::words( $item->name, 5) }}</td>
                      <td>{!! Str::words( $item->content, 5) !!}</td>
                        {{-- <td>Credit card</td> --}}
                        <td><label class="badge badge-success">{{ $item->status}}</label></td>
                        <td>{{ $item->created_at }}</td>

                    <td><a href="{{ route('pages.show', $item->slug) }}" target="_blank" class="btn btn-outline-success btn-sm">View Order</a></td>
                        
                    <td><a href="{{ route('news.edit', $item) }}" class="btn btn-outline-danger btn-sm">Modifier</a></td>
                    <form action="{{ route('news.delete', $item) }}" method="POST">
                      @csrf
                      @method('DELETE')
                           <td><button type="submit" href="#" class="btn btn-outline-warning btn-sm">Supprimer</button></td>
                    </form>

                      </tr>
                    @empty
                        
                        <tr>
                          <h2 class="font-weight-bold text-center">Aucun article</h2>
                        </tr>
                    @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
    
@endsection