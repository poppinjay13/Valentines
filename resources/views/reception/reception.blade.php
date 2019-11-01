@extends('layouts.defaultAdmin')
@section('content')
@if(\Session::has('error'))
<div class="alert alert-danger">
{{\Session::get('error')}}
</div>
@endif
  <style>
    a.custom,
    a.custom:hover {
    color: inherit;
    }
  </style>
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Reception</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <a href="orders" class="custom">
            <div>
              <h4 class="service-heading">Orders</h4>
              <p class="text-muted"></p>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="payments" class="custom">
            <div>
              <h4 class="service-heading">Payments</h4>
              <p class="text-muted"></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@stop
