@extends('layouts.app')


@section('content')
@include('layouts.include.leftmenu')
<div class="container">
  <div class="be-content">
        <div class="main-content container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="widget widget-tile">
          <div class="data-info">
            <div class="desc text-primary text-bold">Total Projects</div>
            <div class="value">
              <span class="indicator indicator-equal mdi mdi-chevron-up"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="widget widget-tile">
          <div class="data-info">
            <div class="desc text-primary text-bold">Total Approved Projects</div>
            <div class="value">
              <span class="indicator indicator-equal mdi mdi-chevron-up"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="widget widget-tile">
          <div class="data-info">
            <div class="desc text-primary text-bold">Total Projects Pending Approval</div>
            <div class="value">
              <span class="indicator indicator-equal mdi mdi-chevron-up"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
  <div class="col-sm-12">
    <div class="card card-table card-border-color card-border-color-primary">
      <div class="card-header">
        <div class="title text-primary text-bold">Projects by Country</div>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-striped table-borderless">
          <thead>                        
            <tr>
              <th style="width:5%;">#</th>
              <th style="width:20%;">Country</th>
              <th style="width:20%;">Project Title</th>
              <th style="width:15%;">Project ID</th>
              <th style="width:20%;">PASS Code</th>
              <th style="width:20%;">PAG Value</th>
              <th style="width:20%;">Donor</th>
              <th style="width:20%;">Expenditure</th>
              <th style="width:20%;">Contribution</th>
            </tr>
          </thead>
          <tbody class="no-border-x">
            <?php $number = 1; ?>
            @foreach($countryprojects as $project)
            <tr>
              <td>{{ $number }}</td>
              <td>{{ $project->projecttitle }}</td>
              <td>{{ $project->projectid }}</td>
              <td>{{ $project->paascode }}</td>
              <td>{{ $project->pagvalue }}</td>
              <td>{{ $project->donors }}</td>
              <td>{{ $project->totalexpenditure }}</td>
              <td>{{ $project->totalcontribution }}</td>
              <td>{{ $project->totalcontribution }}</td>
            </tr>
            <?php $number++; ?>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
@endsection
