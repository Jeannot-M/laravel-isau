@extends('admin.layout', ['title' => 'Galleries'])

@section('admin')
<div class="row mt-5">
    <div class="col-md-5 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Galleries images</h5>
          <div class="row">
            <div class="col-12">
              <div class="mb-4">
                {{-- <p class="card-text text-muted mb-2">Pending orders</p> --}}
                <div class="progress progress-slim">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            <form action="{{ route('admin.gallery.store') }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label class="custom-file">
                      <input type="file" name="image" id="imagee" placeholder="selectionner" class="custom-file-input" aria-describedby="fileHelpId">
                      <span class="custom-file-control"></span>
                    </label>
                  </div>
                  <button type="submit">Ajouter</button>
              </form>
                
            </div>
            <div class="col-12">
              <p class="text-muted mb-0">
                Note: Cette section est relier au menu Gallerie
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Sales</h5>
          <div class="custom-legend-container w-75 mx-auto">
            <canvas id="sales-chart"></canvas>
          </div>
          <div id="sales-chart-legend" class="legend-right"></div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sales region</h5>
          <div class="table-responsive table-sales">
            <table class="table">
              <thead>
                <tr>
                  <th colspan="2">
                    Country
                  </th>
                  <th class="text-right">
                    Sales
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="flag">
                      <i class="flag-icon flag-icon-us"></i>
                    </div>
                  </td>
                  <td>USA</td>
                  <td class="text-right">
                    2.920
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="flag">
                      <i class="flag-icon flag-icon-in"></i>
                    </div>
                  </td>
                  <td>India</td>
                  <td class="text-right">
                    8.265
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="flag">
                      <i class="flag-icon flag-icon-id"></i>
                    </div>
                  </td>
                  <td>Indonesia</td>
                  <td class="text-right">
                    787
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="flag">
                      <i class="flag-icon flag-icon-gb"></i>
                    </div>
                  </td>
                  <td>United Kingdom</td>
                  <td class="text-right">
                    690
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="flag">
                      <i class="flag-icon flag-icon-ro"></i>
                    </div>
                  </td>
                  <td>Romania</td>
                  <td class="text-right">
                    600
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="flag">
                      <i class="flag-icon flag-icon-br"></i>
                    </div>
                  </td>
                  <td>Brasil</td>
                  <td class="text-right">
                    550
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection