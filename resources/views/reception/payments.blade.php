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
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Total</th>
          <th scope="col">Transaction ID</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($payments as $payment)
        <tr>
          <td>{{$payment->name}}</td>
          <td>{{$payment->email}}</td>
          <td>{{$payment->total}}</td>
          <td>{{$payment->transaction_id}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>

@stop
