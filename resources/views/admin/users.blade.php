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
          <th scope="col">User ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Priviledges</th>
          <th scope="col">Created At</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->isAdmin}}</td>
          <td>{{$user->created_at}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>

@stop
