@extends('layouts.default3')
<br>
@section('content')
<div class="container" style="padding-top: 50px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Order') }}</div>

        <div class="card-body">
          <form method="POST" action="">
            @csrf

            <input type="hidden" name="email" value="{{ Auth::user()->email }}">

            <div class="form-group row">
              <label for="cakeFlavour" class="col-md-4 col-form-label text-md-right">{{ __('Cake Flavour') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm totalPrice" id="flavourP" name="flavour" required autofocus>
                  <option value="">{{ __('Select') }}</option>
                  @foreach ($flavours as $flavour):
                    <option value="{{$flavour->flavourPrice,$flavour->flavour}}">{{$flavour->flavour}} - {{__('Ksh ')}} {{number_format($flavour->flavourPrice, 0)}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="cakeSize" class="col-md-4 col-form-label text-md-right">{{ __('Cake Size') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm totalPrice" id="sizeP" name="size" required autofocus>
                  <option value="">{{ __('Select') }}</option>
                  @foreach ($sizes as $size):
                    <option value="{{$size->sizePrice,$size->size}}">{{$size->size}} - {{__('Ksh ')}} {{number_format($size->sizePrice, 0)}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="icing" class="col-md-4 col-form-label text-md-right">{{ __('Type of Icing') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm totalPrice" id="icingP" name="icing" required autofocus>
                  <option value="">{{ __('Select') }}</option>
                  @foreach ($icings as $icing):
                    <option value="{{$icing->icingPrice,$icing->icing}}">{{$icing->icing}} - {{__('Ksh ')}} {{number_format($icing->icingPrice, 0)}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="addon" class="col-md-4 col-form-label text-md-right">{{ __('Design Image for Cake Addon') }}</label>
              <div class="col-md-6">
                <input type="file" class="form-control-file" name="addon" id="addon">
                <small id="addonsHelpBlock" class="form-text text-muted">
                  Image that will be used for the cake addon or edible print. Edible Tasty Prints (Cake Addons) are sheets of frosting that can be imprinted with any image using edible inks.
                  Optional.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label for="inscription" class="col-md-4 col-form-label text-md-right">{{ __('Inscription plus Colour') }}</label>
              <div class="col-md-6">
                <input type="text" id="inscription" name="inscription" class="form-control" placeholder="eg Happy Birthday - written in red">
                <small id="inscriptHelpBlock" class="form-text text-muted">
                  The inscription to be put on the cake, and the colour of the inscription.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Pickup Date') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="date" id="datepicker">
              </div>
            </div>

            <div class="form-group row">
              <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="total" value="Ksh" id="total">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Proceed to Payment') }}
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
