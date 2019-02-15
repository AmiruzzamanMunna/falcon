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
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a href="" class="navbar-brand m-auto">Falcon</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar nav m-auto">
				<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Department</a>
					 <div class="dropdown-menu dropmenu">
					    <a class="dropdown-item dropitem" href="file:///D:/All%20Project/Ecommerce/Design/ladis-index.html">Ladies</a>
					    <a class="dropdown-item dropitem" href="#">Gents</a>
					    <a class="dropdown-item dropitem" href="#">Leather Item</a>
					    <a class="dropdown-item dropitem" href="#">Electric & Electronics</a>
					    <a class="dropdown-item dropitem" href="#">Gadget</a>
					    <a class="dropdown-item dropitem" href="#">Household Accessories</a>
					    <a class="dropdown-item dropitem" href="#">Furniture</a>
					    <a class="dropdown-item dropitem" href="#">Toys & Show Pieces</a>
					    <a class="dropdown-item dropitem" href="#">Gift Items</a>
					    <a class="dropdown-item dropitem" href="#">Flower & Bouquets</a>
					    <a class="dropdown-item dropitem" href="#">Books & Magazine</a>
					    <a class="dropdown-item dropitem" href="#">Food & Grocery Items</a>
					    <a class="dropdown-item dropitem" href="{{route('user.eventIndex')}}">Event Managment</a>
					    <a class="dropdown-item dropitem" href="{{route('user.lightIndex')}}">Lighting & Decoration</a>
					    <a class="dropdown-item dropitem" href="#">Famous & Traditional Item</a>
					    <a class="dropdown-item dropitem" href="#">Parts and Accessories of Bikes & Cars</a>
					    <a class="dropdown-item dropitem" href="#">Medicine & Emergency</a>
				  	</div>
				</li>
			</ul>
			<div class="col-md-4 col-sm-6">
				<form action="">
					<div class="input-group row">
						<input type="search" class="form-control col-md-12" placeholder="search" name="searchbox">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default">
							<span class="fa fa-search srchicon"></span>
						</button>
					</span>
					</div>
				</form>
			</div>
 			<ul class="navbar nav m-auto">
 				<li class="nav-item dropdown">
 					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Accounts</a>
 					<div class="dropdown-menu">
 						<a class="dropdown-item dropitem" href="#">Login</a>
 						<a class="dropdown-item dropitem" href="#">Sign-Up</a>
 					</div>
 				</li>
 			</ul>
 			<ul class="navbar nav">
 				<li class="nav-item">
 					<div class="row">
 						<a href="" class="nav-link">
 							<span class="cartitem ">Cart(10)
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
						<p class="footeritem"><a href="">About Us</a></p>
						<p class="footeritem"><a href="">Privacy Policy</a></p>
						<p class="footeritem"><a href="">Warrenty Policy</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<span class="footer_contain">Get in touch with</span>
					<div class="itemelement">
						<p class="footeritem"><a href="">Contact Us</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<span class="footer_contain">Falcon.com</span>
					<div class="itemelement">
						<p class="footeritem">House 12, Road 12<br>
						Block F, Niketan, Gulshan 1,<br>
						Dhaka - 1212, Bangladesh</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@yield('script')
</html>