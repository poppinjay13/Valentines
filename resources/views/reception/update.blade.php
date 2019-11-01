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
        <div class="card-header">{{ __('Update Order Number ') }} {{ $order->id }}</div>

        <div class="card-body">
          <form method="POST" action="">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group row">
              <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
              <div class="col-md-6">
                <select class="form-control" id="status" name="status" required>
                @foreach (['Pending', 'Completed'] as $status)
                  @if ($status === $order->status)
                    <option value="{{ $status }}" selected>{{ $status }}</option>
                  @else
                    <option value="{{ $status }}">{{ $status }}</option>
                  @endif
                @endforeach
              </select>
              </div>
            </div>
            
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Save') }}
                </button>
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
