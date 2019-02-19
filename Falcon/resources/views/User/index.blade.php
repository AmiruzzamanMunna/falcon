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
            items:3
        }
    }
});
</script>
@endsection
@section('container')
<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-12 ml-auto">
			<h1 class="contain-head">Men's clothing Collection</h1>
		</div>
		<div class="owl-carousel owl-theme owlitem"">
		    <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth2.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		    <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth1.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		    <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth3.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		    <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth1.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">Price: 1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		   <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth4.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		   <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth2.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		   <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth1.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		   <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth3.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Panjabi</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9 col-sm-12 ml-auto">
			<h1 class="contain-head">Women's clothing Collection</h1>
		</div>
		<div class="owl-carousel owl-theme owlitem">
			@forelse($ladies as $lady)
		    <div class="item">
		    	@if($lady->discount)
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">{{$lady->discount}}%</span>
		    		</div>
		    	</div>
		    	@endif
		    	<img src="{{asset('images/product')}}/{{$lady->image1}}" class="imagesize">
		    	<div class="buyname col-md-12">
		    		<a href="">{{$lady->product_name}}</a>
		    	</div>
		    	<div class="buyprice">
		    		@if($lady->discount)
		    		<?php
		    			$result=0;
		    			$result=$lady->price-($lady->price * $lady->discount/100);
		    		?>
		    		<span>Price: <del class="errorprice">{{$lady->price}}</del></span>
		    		<span>{{$result}} TK</span>
		    		@else
		    		<span>Price: {{$lady->price}} TK</span>
		    		@endif
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		    @empty
		    <h1>Sorry No Product is Available</h1>
		    @endforelse
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 col-sm-3 m-auto">
			<h1 class="contain-head">Popular Gadget Items</h1>
		</div>
		<div class="owl-carousel owl-theme owlitem">
		    <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile1.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		     <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile1.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		     <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile2.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		     <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile1.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		     <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile2.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		    <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile1.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		     <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile2.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		     <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/mobile2.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Mobile Phone</a>
		    	</div>
		    	<div class="buyprice">
		    		<del class="errorprice">1000TK</del>
		    		<span>550TK</span>
		    	</div>
		    	<button type="button" class="btn btn-success col-md-12">Buy Now</button>
		    </div>
		</div>
	</div>
</div>
@endsection