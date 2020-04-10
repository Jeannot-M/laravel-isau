@extends('admin.layout')


@section('admin')

<div class="card-deck">
    <div class="card col-lg-12 px-0 mb-4">
      <div class="card-body">
        <h5 class="card-title">Liste d'inscription</h5>
        <div class="table-responsive">
          <table class="table center-aligned-table">
            <thead>
              <tr class="text-primary">
                <th>Order No</th>
                <th>Noms</th>
                <th>Option</th>
                <th>Année</th>
                <th>Pourcentage</th>
                <th>Section</th>
                <th>Promotion</th>
                <th>Date & Heure</th>
                <th></th>
                <th></th>
                {{-- <th></th> --}}
              
              </tr>
            </thead>
                <tbody>
                    {{-- @foreach ($inscrits as $item)
              
                        <tr class="">
                        <td>{{ $item->id }}</td>
                          <td>{{ $item->names }}</td>
                         
                          <td>{{ $item->option }}</td>
                          <td>{{ $item->diplome }}</td>
                          <td>{{ $item->pourcentage }} %</td>
                          <td>{{ $item->faculte }}</td>
                          <td>{{ $item->promo }}</td>
                          <td>{{ $item->created_at }}</td>
                        <td><a href="" target="_blank" class="btn btn-outline-success btn-sm">View Order</a></td>
                          <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                        </tr>
                      
                    @endforeach --}}
                </tbody>
          </table>
        </div>
      </div>
      {{-- {{ $inscrits->links() }} --}}
    </div>
  </div>
    
@endsection