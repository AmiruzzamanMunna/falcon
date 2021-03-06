<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="shortcut icon" type="text/css" href="{{asset('images')}}/logo.jpg">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/user.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/owl.theme.default.min.css">
	<script
 		src="https://code.jquery.com/jquery-3.3.1.min.js"
 		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous">
  </script>
  <script src="{{asset('js')}}/owl.carousel.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		<a href="{{route('user.index')}}" class="navbar-brand m-auto">
			<img src="{{asset('images')}}/falcon.jpg" class="navbarimage"> 	Falcon
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar nav m-auto">
				<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Department</a>
					 <div class="dropdown-menu dropmenu">
					    <a class="dropdown-item dropitem" href="{{route('user.ladiesIndex')}}">Ladies</a>
					    <a class="dropdown-item dropitem" href="{{route('user.gentsIndex')}}">Gents</a>
					    <a class="dropdown-item dropitem" href="{{route('user.leatherIndex')}}">Leather Item</a>
					    <a class="dropdown-item dropitem" href="{{route('user.electricIndex')}}">Electric & Electronics</a>
					    <a class="dropdown-item dropitem" href="{{route('user.gadgetPage','gadget')}}">Gadget</a>
					    <a class="dropdown-item dropitem" href="{{route('user.houseHoldIndex')}}">Household Accessories</a>
					    <a class="dropdown-item dropitem" href="{{route('user.furnitureIndex')}}">Furniture</a>
					    <a class="dropdown-item dropitem" href="{{route('user.toysShowIndex')}}">Toys & Show Pieces</a>
					    <a class="dropdown-item dropitem" href="{{route('user.giftIndex','gifts')}}">Gift Items</a>
					    <a class="dropdown-item dropitem" href="{{route('user.flowersindex')}}">Flower & Bouquets</a>
					    <a class="dropdown-item dropitem" href="{{route('user.booksIndex')}}">Books & Magazine</a>
					    <a class="dropdown-item dropitem" href="{{route('user.foodIndex')}}">Food & Grocery Items</a>
					    <a class="dropdown-item dropitem" href="{{route('user.eventIndex')}}">Event Managment</a>
					    <a class="dropdown-item dropitem" href="{{route('user.lightIndex')}}">Lighting & Decoration</a>
					    <a class="dropdown-item dropitem" href="{{route('user.famousTradionalIndex')}}">Famous & Traditional Item</a>
					    <a class="dropdown-item dropitem" href="{{route('user.partsAccessoriesIndex')}}">Parts and Accessories of Bikes & Cars</a>
					    <a class="dropdown-item dropitem" href="{{route('user.medicineEmergencyIndex')}}">Medicine & Emergency</a>
				  	</div>
				</li>
			</ul>
			<div class="col-md-4 col-sm-6 ml-auto">
				<form action="{{route('user.searchItem')}}" >
					{{csrf_field()}}
					<div class="input-group row">
						<input type="search" class="form-control col-md-12" placeholder="search" name="search">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default">
							<span class="fa fa-search srchicon"></span>
						</button>
					</span>
					</div>
				</form>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<ul class="navbar nav">
								<li class="nav-item">
									<a href="{{route('user.newarrival')}}" class="nav-link droplink">New Arrival</a>
								</li>
								<li class="nav-item">
									<a href="{{route('user.discount')}}" class="nav-link droplink">Top Deals</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
 			<ul class="navbar nav ml-auto">
 				<div class="col-md-7 m-auto">
					<div class="row">
						<div class="col">
							<a href=""><img src=""><i class="fab fa-facebook"></i></a>
						</div>
						<div class="col">
							<a href=""><img src=""><i class="fab fa-instagram"></i></a>
						</div>
						<div class="col">
							<a href=""><img src=""><i class="fab fa-youtube"></i></a>
						</div>
					</div>
 				</div>
 				@if(Session::has('loggedUser'))
 				<li class="nav-item dropdown">
 					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
 					<div class="dropdown-menu">
 						<a class="dropdown-item dropitem" href="{{route('user.userAccount')}}">Profile</a><a class="dropdown-item dropitem" href="{{route('user.logout')}}">Logout</a>
 					</div>
 				</li>
 				@else
 				<li class="nav-item dropdown">
 					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Accounts</a>
 					<div class="dropdown-menu">
 						<a class="dropdown-item dropitem" href="{{route('user.login')}}">Login</a>
 						<a class="dropdown-item dropitem" href="{{route('user.signUP')}}">Sign-Up</a>
 					</div>
 				</li>
 				@endif
 			</ul>
 			<ul class="navbar nav">
 				<li class="nav-item">
 					<div class="row">
						<a href="{{route('cart.cartIndex')}}" class="nav-link"><br>
 							<span class="cartitem ">Cart({{$quantity}})
 								<i class="fas fa-cart-arrow-down cart"></i>
 							</span>
 						</a>
 					</div>
 				</li>
 			</ul>
 		</div>
	</nav>
	@yield('container')
	<div class="row footerbody">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<span class="footer_contain">Get to Know Us</span>
					<div class="itemelement">
						<p class="footeritem"><a href="{{route('user.aboutUs')}}">About Us</a></p>
						<p class="footeritem"><a href="{{route('user.policy')}}">Privacy Policy</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<span class="footer_contain">Get in touch with</span>
					<div class="itemelement">
						<p class="footeritem"><a href="{{route('user.contactus')}}">Contact Us</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="col-md-8 m-auto">
						<span class="footer_contain">Falcon.com</span>
					</div>
					<div class="itemelement">
						@forelse($footers as $footer)
						<p class="footeritemparagraph">{{$footer->contact}}</p>
						@empty
						@endforelse
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@yield('script')
</html>