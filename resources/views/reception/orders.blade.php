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
          <th scope="col">Pickup Date</th>
          <th scope="col">Status</th>
          <th scope="col">Change Status</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->email}}</td>
          <td>{{$order->date}}</td>
          <td>{{$order->status}}</td>
          <td><a href='update/{{ $order->id }}'class="btn btn-link">Update</a></td>
          <td><a href='orders/{{ $order->id }}'class="btn btn-link">See more</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>

@stop
