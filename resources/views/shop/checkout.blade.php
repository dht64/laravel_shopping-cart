@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')

<!--
<form action="/your-server-side-code" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_3uy6McVRkspA3QwvBKXEmmS0"
    data-amount="999"
    data-name="Demo Site"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>
-->
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-block">
                <h1>Checkout</h1>
                <h4>Your Total: <span class="tag secondary-color" style="font-size: 1em">${{ $total }}</span></h4>
                <!--
                 @if(count($errors) > 0)
                    <div id="charge-error" class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                -->
                <div id="charge-error" class="alert alert-danger fade in {{ !Session::has('error') ? 'hidden-xs-up' : '' }}">
                	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
					</button>
                    {{ Session::get('error') }}
                </div>
                <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="md-form form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" required name="name">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="md-form form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" required name="address">
                            </div>
                        </div>
                        <hr>
                        <div class="col-xs-12">
                            <div class="md-form form-group">
                                <label for="card-name">Card Holder Name</label>
                                <input type="text" id="card-name" class="form-control" required data-stripe="name">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="md-form form-group">
                                <label for="card-number">Credit Card Number</label>
                                <input type="text" id="card-number" size="20" class="form-control" data-stripe="number" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="md-form form-group">
                                        <label for="card-expiry-month">Expiration Month (MM)</label>
                                        <input type="text" id="card-expiry-month" size="2" class="form-control" data-stripe="exp_month" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="md-form form-group">
                                        <label for="card-expiry-year">Expiration Year (YY)</label>
                                        <input type="text" id="card-expiry-year" size="2"  class="form-control" data-stripe="exp_year" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="md-form form-group">
                                <label for="card-cvc">CVC</label>
                                <input type="text" id="card-cvc" size="4" class="form-control" data-stripe="cvc" required>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Buy now</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
@endsection