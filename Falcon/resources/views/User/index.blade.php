@extends('layouts.User-home')
@section('title')
	Home
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
		    <div class="item">
		    	<div class="discount">
		    		<div class="col-md-2 col-sm-2 discount_contain">
		    			<span class="mr-auto discount_price">10%</span>
		    		</div>
		    	</div>
		    	<img src="{{asset('images')}}/cloth5.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">kamiz</a>
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
		    	<img src="{{asset('images')}}/cloth6.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Borka</a>
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
		    	<img src="{{asset('images')}}/cloth7.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Shorts</a>
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
		    	<img src="{{asset('images')}}/cloth5.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Kamiz</a>
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
		    	<img src="{{asset('images')}}/cloth6.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Borka</a>
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
		    	<img src="{{asset('images')}}/cloth7.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Shorts</a>
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
		    	<img src="{{asset('images')}}/cloth5.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Shirt</a>
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
		    	<img src="{{asset('images')}}/cloth6.jpg">
		    	<div class="buyname col-md-12">
		    		<a href="">Shirt</a>
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