@extends('layouts.User-home')
@section('title')
	Flowers & Bouquets Index Page
@endsection
@section('container')
<div class="container">
	<div class="item-heading">
		<h1 class="headingelement">Flowers & Bouquets Shop</h1>
		<p>Shop Amazon Fashion including clothing, shoes, jewelry, watches, bags and more</p>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="col-md-6 col-sm-4 m-auto">
					<div class="col-md-8 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.romance','romance')}}">Romance</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.romance','romance')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/romance.jpg"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 m-auto">
					<div class="col-md-7 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.roses','roses')}}">Roses</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.roses','roses')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/roses.jpg"></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 m-auto">
					<div class="col-md-8 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.birthday','birthday')}}">Birthday</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.birthday','birthday')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/birthday.jpg"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 m-auto">
					<div class="col-md-7 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.anniversary','anniversary')}}">Anniversary</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.anniversary','anniversary')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/anniversary.jpg"></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 m-auto">
					<div class="col-md-8 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.thankyou','thank you')}}">Thank You</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.thankyou','thank you')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/toys.jpg"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 m-auto">
					<div class="col-md-7 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.sympathy','sympathy')}}">Sympathy</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.sympathy','sympathy')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/Sympathy.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection