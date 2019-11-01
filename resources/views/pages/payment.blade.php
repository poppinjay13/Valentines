@extends('layouts.default3')
<br>
@section('content')
<div class="container" style="padding-top: 50px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Pay with M-PESA') }}</div>

        <div class="card-body">
          <form method="POST" action="">
            @csrf
            <div class="form-group row">
              <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
              <div class="col-md-6">
                <input type="tel" class="form-control" name="phone" id="phone">
              </div>
            </div>

            <div class="form-group row">
              <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="total" value="{{ session()->get( 'amount' ) }}" id="total">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Pay') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection
