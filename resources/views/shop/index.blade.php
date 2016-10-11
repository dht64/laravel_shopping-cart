@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
	@if(Session::has('success'))
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div id="charge-message" class="alert alert-success fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
					</button>
					{{ Session::get('success') }}
				</div>
			</div>
		</div>
	@endif
	@foreach($products->chunk(3) as $productChunk)	
		<div class="row">
			@foreach($productChunk as $product)
				<div class="col-md-4">
					<!--Card-->
					<div class="card">
						<!--Card image-->
						<div class="view overlay hm-white-slight flex-center hm-zoom">
						<img class="img-fluid" src="{{ $product->imagePath }}" alt="{{ $product->title }}">
							<a href="#">
								<div class="mask"></div>
							</a>
						</div>
						<!--/.Card image-->

						<!--Card content-->
						<div class="card-block">
							<!--Title-->
							<h4 class="card-title">{{ $product->title }}</h4>
							<!--Text-->
							<p class="card-text">{{ $product->description }}</p>
							<!-- Card footer -->
							<div class="card-footer">
								<div class="pull-left price">${{ $product->price }}</div>
								<a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary pull-right">Buy</a>
							</div>
							<!--/Card footer -->
						</div>
						<!--/.Card content-->
					</div>
					<!--/.Card-->
				</div>
			@endforeach
		</div>
	@endforeach
@endsection