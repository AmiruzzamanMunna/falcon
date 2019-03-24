@extends('layouts.User-home')
@section('title')
	Falcon
@endsection
@section('script')
<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
    responsiveClass:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
});
</script>
@endsection
@section('container')
	<div id="demo" class="carousel slide imageslide" data-ride="carousel">

	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>

 	<div class="carousel-inner">
	    @foreach($events as $event)
	    <div class="carousel-item active">
	      <img class="img-fluid" src="{{asset('images/uploads')}}/{{$event->image1}}" alt="Los Angeles" width="1100" height="500">
	    </div>
	    <div class="carousel-item">
	      <img class="img-fluid" src="{{asset('images/uploads')}}/{{$event->image2}}" alt="Chicago" width="1100" height="500">
	    </div>
	  </div>
	    
	    <a class="carousel-control-prev" href="#demo" data-slide="prev">
	      <span class="carousel-control-prev-icon"></span>
	    </a>
	    <a class="carousel-control-next" href="#demo" data-slide="next">
	      <span class="carousel-control-next-icon"></span>
	    </a>
	    @endforeach
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="row indexcontain">
				@forelse($contains as $event)
				<div class="col-md-4 col-sm-4 m-auto">
					<div class="col-md-10 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.ladiesIndex')}}">Women's Collection</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.ladiesIndex')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images/uploads')}}/{{$event->image1}}"></a>
					</div>
				</div>
				@empty
				@endforelse
				@forelse($containsgents as $event)
				<div class="col-md-4 col-sm-4 m-auto">
					<div class="col-md-10 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.gentsIndex')}}">Men's Collection</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.gentsIndex')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images/uploads')}}/{{$event->image1}}"></a>
					</div>
				</div>
				@empty
				@endforelse
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 col-sm-3 m-auto">
			<h1 class="contain-head">Popular Gadget</h1>
		</div>
		<div class="owl-carousel owl-theme owlitem">
		    @forelse($gadgets as $gadget)
		    <div class="item">
		    	@if($gadget->discount)
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">{{$gadget->discount}}%</span>
		    		</div>
		    	</div>
		    	@endif
		    	<a href="{{route('productDetails',[$gadget->id])}}" class=""><br>
		    		<img src="{{asset('images/product')}}/{{$gadget->image1}}" class="allproductsize">
		    	</a>
		    	<div class="buyname col-md-12">
		    		<a href="{{route('productDetails',[$gadget->id])}}">{{$gadget->product_name}}</a>
		    	</div>
		    	<div class="buyprice col-md-12 col-sm-8">
		    		@if($gadget->discount)
		    		<?php
		    			$result=0;
		    			$result=$gadget->price-($gadget->price * $gadget->discount/100);
		    		?>
		    		<div class="row">
		    			<div class="row">
		    				<span>Price: <del class="errorprice">{{$gadget->price}} </del>{{$result}} TK</span>
		    			</div>
		    		</div>
		    		@else
		    		<span>Price: {{$gadget->price}} TK</span>
		    		@endif
		    	</div>
		    	<a href="{{route('productDetails',[$gadget->id])}}" class="btn btn-success col-md-12">Buy Now</a>
		    </div>
		    @empty
		    <h1>Sorry No Product is Available</h1>
		    @endforelse
		</div>
	</div>
</div>
@endsection