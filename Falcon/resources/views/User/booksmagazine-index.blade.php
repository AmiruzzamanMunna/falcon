@extends('layouts.User-home')
@section('title')
	Books & Magazine Index Page
@endsection
@section('container')
<div class="container">
	<div class="item-heading">
		<h1 class="headingelement">Books & Magazine Shop</h1>
		<p>Shop Amazon Fashion including clothing, shoes, jewelry, watches, bags and more</p>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="col-md-6 col-sm-4 m-auto">
					<div class="col-md-8 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.books','books')}}">Books</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.books','books')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/books.jpg"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 m-auto">
					<div class="col-md-7 col-sm-6 section-item-name m-auto">
						<a class="m-auto" href="{{route('user.magazine','magazine')}}">Magazine</a>
					</div>
					<div class="itemcontain">
						<a href="{{route('user.magazine','magazine')}}"><img class="img-fluid" id="itemcontain-img" src="{{asset('images')}}/magazines.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection