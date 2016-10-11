@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row" style="margin-top: 20px">
			<div class="col-md-6 offset-md-3">
				<ul class="list-group">
					@foreach($products as $product)
					<li class="list-group-item">
						{{ $product['item']['title'] }}
						<span class="tag green pull-xs-right" style="font-size: 1em;margin-left: 10px;">${{ $product['price'] }}</span>
						<span class="tag tag-default pull-xs-right" style="font-size: 0.9em;">{{ $product['qty'] }}</span>
						<div class="btn-group" style="margin-left: 10px">
							<button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" type="button">Action </button>
							<ul class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a>
								<a class="dropdown-item" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Remove All</a>
							</ul>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<strong>Total: <span class="tag secondary-color" style="font-size: 1.1em">${{ $totalPrice }}</span></strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<a href="{{ route('checkout') }}" class="btn btn-success" type="button">Checkout</a>
			</div>
		</div>
	@else
		<div class="row">
		<div class="col-md-6 offset-md-3">
			<h2>No items in cart</h2>
		</div>
	</div>
	@endif
@endsection