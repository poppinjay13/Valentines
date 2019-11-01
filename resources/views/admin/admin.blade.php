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
          <h2 class="section-heading text-uppercase">Admin</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <a href="users" class="custom">
            <div>
              <h4 class="service-heading">Users</h4>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="orderDetails" class="custom">
            <div>
              <h4 class="service-heading">Orders</h4>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="paymentDetails" class="custom">
            <div>
              <h4 class="service-heading">Payments</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@stop
