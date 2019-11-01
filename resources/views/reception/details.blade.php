@extends('layouts.defaultAdmin')
@section('content')
@if(\Session::has('error'))
<div class="alert alert-danger">
{{\Session::get('error')}}
</div>
@endif

<div class="container" style="padding-top: 50px;">
  <br><br>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Order Details for ') }} {{$order->id}}</div>

        <div class="card-body">
          <form method="POST" action="">
            @csrf

            <div class="form-group row">
              <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="id" value="{{$order->id}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="email" value="{{$order->email}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="flavour" class="col-md-4 col-form-label text-md-right">{{ __('Flavour') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="flavour" value="{{$order->flavour}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('Size') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="size" value="{{$order->size}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="icing" class="col-md-4 col-form-label text-md-right">{{ __('Icing') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="icing" value="{{$order->icing}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="addon" class="col-md-4 col-form-label text-md-right">{{ __('Addon Image') }}</label>
              <div class="col-md-6">
                <a href="">{{$order->addon}}</a>
              </div>
            </div>

            <div class="form-group row">
              <label for="inscription" class="col-md-4 col-form-label text-md-right">{{ __('Inscription') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="inscription" value="{{$order->inscription}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Pickup Date') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="date" value="{{$order->date}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="status" value="{{$order->status}}">
              </div>
            </div>
          </form>
        </div>
      </div>
      <br><br>
    </div>
  </div>
</div>
<br>
@endsection
