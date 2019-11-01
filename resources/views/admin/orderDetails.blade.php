@extends('layouts.defaultAdmin')
@section('content')
@if(\Session::has('error'))
<div class="alert alert-danger">
{{\Session::get('error')}}
</div>
@endif

<div class="container-fluid">
  <br><br><br>
  <div class="card">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Email</th>
          <th scope="col">Flavour</th>
          <th scope="col">Size</th>
          <th scope="col">Icing</th>
          <th scope="col">Addon</th>
          <th scope="col">Inscription</th>
          <th scope="col">Pickup Date</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->email}}</td>
          <td>{{$order->flavour}}</td>
          <td>{{$order->size}}</td>
          <td>{{$order->icing}}</td>
          <td>{{$order->addon}}</td>
          <td>{{$order->inscription}}</td>
          <td>{{$order->date}}</td>
          <td>{{$order->status}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>

@stop
