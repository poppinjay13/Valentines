@extends('layouts.default3')
<br>
@section('content')
<div class="container" style="padding-top: 50px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Order Confirmation') }}</div>

        <div class="card-body">
          <p>Your payment has been received and your order will be processed soon.</p>
          <p>You will receive an email notification soon.</p>
          <p>For any inquiries, feel free to contact us.</p>
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">
                {{ __('Return to Home') }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection
