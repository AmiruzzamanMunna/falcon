@extends('layouts.User-home')
@section('title')
	Toys & Show Pieces Index Page
@endsection
@section('container')
<div class="container">
	<div class="item-heading">
		<h1 class="headingelement">Toys & Show Pieces Shop</h1>
		<p>Shop Amazon Fashion including clothing, shoes, jewelry, watches, bags and more</p>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="col-md-6 col-sm-4 m-auto">
					<div class="col-md-8 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.toys','toys')}}">Toys</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.toys','toys')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/toys.jpg"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 m-auto">
					<div class="col-md-7 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.showPieces','show pieces')}}">Show Pieces</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.showPieces','show pieces')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/showpieces.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection