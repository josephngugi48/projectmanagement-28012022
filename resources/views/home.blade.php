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
            <div class="desc text-primary text-bold">Total Registered</div>
            <div class="value">
              <span class="indicator indicator-equal mdi mdi-chevron-up"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="widget widget-tile">
          <div class="data-info">
            <div class="desc text-primary text-bold">Registered Today</div>
            <div class="value">
              <span class="indicator indicator-equal mdi mdi-chevron-up"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="widget widget-tile">
          <div class="data-info">
            <div class="desc text-primary text-bold">Onsite Registration</div>
            <div class="value">
              <span class="indicator indicator-equal mdi mdi-chevron-up"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div></div>
</div>
@endsection
