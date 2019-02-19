@extends('layouts.User-home')
@section('title')
	Electrical & Electronics Index Page
@endsection
@section('container')
<div class="container">
	<div class="item-heading">
		<h1 class="headingelement">Electric & Electronic Shop</h1>
		<p>Shop Amazon Fashion including clothing, shoes, jewelry, watches, bags and more</p>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="col-md-6 col-sm-4 m-auto">
					<div class="col-md-9 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.computerAccessories','computer & accessories')}}">Computer & Accessories</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.computerAccessories','computer & accessories')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/computer.jpeg"></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 m-auto">
					<div class="col-md-7 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.electronics','user.electronics')}}">Electronics</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.electronics','user.electronics')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/electronics.jpg"></a>
					</div>
				</div>
				<div class="col-md-12 col-sm-4 m-auto">
					<div class="col-md-11 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.securityServillance','security&servillance')}}">Security & Servillance</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.securityServillance','security&servillance')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/Surveillance.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection