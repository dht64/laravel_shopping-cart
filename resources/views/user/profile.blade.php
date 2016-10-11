@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<h1>User Profile</h1>
		<hr>
		<h2>My Orders</h2>
		@foreach($orders as $order)
		<div class="card">
			<div class="card-header primary-color white-text">
				Order Detail
			</div>
			<div class="card-block">
				<ul class="list-group">
					@foreach($order->cart->items as $item)
					<li class="list-group-item">
						<span class="tag bg-primary pull-xs-right" style="font-size: 1em">${{ $item['price'] }}</span>
						<strong>{{ $item['item']['title']}}</strong> | <span class="tag tag-default" style="font-size: 1em">{{ $item['qty'] }} EA</span>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="card-footer">
				<p><strong>Total Price: <span class="tag secondary-color" style="font-size: 1.1em">${{ $order->cart->totalPrice }}</span></strong></p>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
