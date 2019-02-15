<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="text/css" href="{{asset('images')}}/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{asset('js')}}/adminscript.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Falcon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
					<a class="nav-link" data-toggle="collapse" data-target="#demo" href="">Account</a>
					<div class="collapse" id="demo">
						<a href="" class="nav-link">Logout</a>
					</div>
				</li>
            </ul>
        </div>
    </nav>
    <div id="sidebar">
        <div class="toggle-btn" onclick="togglesidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class="nav-item"><a class="nav-link" href="">Order</a></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo1" href="#">Ladis<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo1">
                    <a href="" class="nav-link">Ladis Index</a>
                    <a href="" class="nav-link">Clothing Item</a>
                    <a href="" class="nav-link">Juwellay Item</a>
                    <a href="" class="nav-link">Cosmetic Item</a>
                    <a href="" class="nav-link">Shoes Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo2" href="#">Gents<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo2">
                    <a href="" class="nav-link">Gents Index</a>
                    <a href="" class="nav-link">Clothing Item</a>
                    <a href="" class="nav-link">Cosmetic Item</a>
                    <a href="" class="nav-link">Shoes Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo3" href="#">Leather<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo3">
                    <a href="" class="nav-link">Leather Index</a>
                    <a href="" class="nav-link">Bag Item</a>
                    <a href="" class="nav-link">Belt Item</a>
                    <a href="" class="nav-link">Shoes Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo4" href="#">Electric & Electronics<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo4">
                    <a href="" class="nav-link">Electric & Electronics Index</a>
                    <a href="" class="nav-link">Computer & Accessories Item</a>
                    <a href="" class="nav-link">Electronics Item</a>
                    <a href="" class="nav-link">Security & Servillance Item</a>
                </div>
            </li>
            <li class="nav-item"><a href="" class="nav-link">Gadget</a></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo5" href="#">Household & Accessories<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo5">
                    <a href="" class="nav-link">Household & Accessories Index</a>
                    <a href="" class="nav-link">Cushions Item</a>
                    <a href="" class="nav-link">Throws & Blankets Item</a>
                    <a href="" class="nav-link">Mirrors Item</a>
                    <a href="" class="nav-link">Curtains Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo6" href="#">Furniture<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo6">
                    <a href="" class="nav-link">Furniture Index</a>
                    <a href="" class="nav-link">Sofas Item</a>
                    <a href="" class="nav-link">Chairs Item</a>
                    <a href="" class="nav-link">Ottomans Item</a>
                    <a href="" class="nav-link">Tables Item</a>
                    <a href="" class="nav-link">Entertainment Center Item</a>
                    <a href="" class="nav-link">Bed Rooms Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo7" href="#">Toys & Show Pieces<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo7">
                    <a href="" class="nav-link">Toys & Show Pieces  Index</a>
                    <a href="" class="nav-link">Toys Item</a>
                    <a href="" class="nav-link">Show Pieces Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo8" href="#">Flowers & Bouquets<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo8">
                    <a href="" class="nav-link">Flowers & Bouquets Index</a>
                    <a href="" class="nav-link">Romance Item</a>
                    <a href="" class="nav-link">Roses Item</a>
                    <a href="" class="nav-link">Birthday Item</a>
                    <a href="" class="nav-link">Anniversary Item</a>
                    <a href="" class="nav-link">Thank You Item</a>
                    <a href="" class="nav-link">Sympathy Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo9" href="#">Books & Magazine<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo9">
                    <a href="" class="nav-link">Books & Magazine Index</a>
                    <a href="" class="nav-link">Books Item</a>
                    <a href="" class="nav-link">Magazine Item</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo10" href="#">Food & Grocery<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo10">
                    <a href="" class="nav-link">Food & Grocery Index</a>
                    <a href="" class="nav-link">Groceries Item</a>
                    <a href="" class="nav-link">Bread & Bakery Item</a>
                    <a href="" class="nav-link">Fruits & Vegitables Item</a>
                    <a href="" class="nav-link">Meat & Fish Item</a>
                    <a href="" class="nav-link">Fresh Dairy Milk Item</a>
                </div>
            </li>
            <li class="nav-item">
                @foreach($events as $event)
                <a class="nav-link" data-toggle="collapse" data-target="#demo13" href="#">Event Management<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo13">
                    <a href="{{route('admin.eventIndexEdit',[$event->id])}}" class="nav-link">Event Management Index</a>
                    <a href="{{route('admin.weddingEdit',[$event->id])}}" class="nav-link">Wedding Item</a>
                    <a href="{{route('admin.eventBirthdayEdit',[$event->id])}}" class="nav-link">Birthday Item</a>
                    <a href="{{route('admin.eventHospitalityEdit',[$event->id])}}" class="nav-link">Hospitality Item</a>
                    <a href="{{route('admin.eventOthersEdit',[$event->id])}}" class="nav-link">Others</a>
                </div>
            </li>
            <li class="nav-item"><a href="{{route('admin.lightIndexEdit',[$event->id])}}" class="nav-link">Lighting & Decoration</a></li>
            @endforeach
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo11" href="#">Famous & Traditional<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo11">
                    <a href="" class="nav-link">Famous & Traditional Index</a>
                    <a href="" class="nav-link">Nakshikatha Item</a>
                    <a href="" class="nav-link">Pottery and Terracotta Item</a>
                    <a href="" class="nav-link">Shital Pati Item</a>
                </div>
            </li>
            <li class="nav-item"><a href="" class="nav-link">Parts & Accessories of Bikes & Cars</a></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#demo12" href="#">Medicine<i id="listicon" class="fa fa-caret-down"></i></a>
                <div class="collapse" id="demo12">
                    <a href="" class="nav-link">Medicine Index</a>
                    <a href="" class="nav-link">Medicine Item</a>
                    <a href="" class="nav-link">First-Aid kit Item</a>
                </div>
            </li>
        </ul>
    </div>
    @yield('container')
</body>
</html>