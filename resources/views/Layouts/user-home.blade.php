<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!--Nice Select-->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/nice-select.css">
    <!--Flat Icon-->
    <link rel="stylesheet" href="{{asset('/')}}assets/fonts/flaticon/flaticon.css">
    <!--Ico Font-->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/icofont.min.css">
    <!--Animated Css-->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/animate.css">
    <!--Owl Carosuel CSS-->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/owl.theme.default.min.css">
    <!--Main CSS-->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/media.css">
    @yield('css')
    


</head>

<body onload="myLoadFunction()">
    <!--Preloader Start-->
    <div id="loading"></div>
    <!--Preloader End-->

    <!--Header Area Start-->
    <header>
        <div class="container">
            <nav id="main_navbar" class="navbar navbar-expand-lg navbar-light  no-x-pad-xs">
                <a class="nav-link ic-m-cart-icon" href="#"><i class="flaticon-bag"></i></a>
                <a class="navbar-brand" href="{{route('user.index')}}">Alliance <span>Academic</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ic-navbar-nav">
                        <li class="nav-item dropdown ic-left-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu ic-dropdown ic-dropdown1" aria-labelledby="navbarDropdown">
                                @foreach($category as $key=>$cat)

                                    
                                    <li class="nav-item dropdown">
                                        {{-- <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{$cat->course_category_name}}
                                        </a> --}}
                                        <ul class="dropdown-menu ic-sub-dropdown" aria-labelledby="navbarDropdown1">
                                            
                                            @foreach ($subCategory as $id=>$val)

                                                @if ($cat->course_category_id==$val->course_category_parent_id)

                                                    @php
                                                        $id=$cat->course_category_id
                                                    @endphp

                                                    <li><a class="dropdown-item" href="{{route('user.courseCategory',$val->course_category_id)}}">{{ $val->course_category_name }}</a></li>

                                                @endif
                                                
                                            @endforeach
                                        </ul>
                                        @if ($id==$cat->course_category_id)

                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{$cat->course_category_name}}
                                        </a>

                                        @else 
                                        <li><a class="dropdown-item" href="{{route('user.courseCategory',$cat->course_category_id)}}">{{ $cat->course_category_name }}</a></li>
                                            
                                        @endif
                                        
                                    </li>
                                    
                                @endforeach
                            </ul>
                            
                        </li>
                        <li class="nav-item ic-left-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item ic-left-item">
                            <a class="nav-link" href="#">View Plans</a>
                        </li>

                        <li class="nav-item ic-cart-icon">
                            <a class="nav-link" href="#"><i class="flaticon-bag"></i></a>
                        </li>
                        <li class="nav-item sign-nav-item">

                            @if (Session::has('loggedUser'))

                            {{-- <li><a class="dropdown-item">Account</a></li> --}}
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                                    <ul class="dropdown-menu ic-sub-dropdown" aria-labelledby="navbarDropdown1">
                                        <li><a class="dropdown-item" href="{{route('user.userProfile')}}">Profile</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.logOut')}}">Log Out</a></li>
                                    </ul>
                                </li>

                            @else

                            <a class="nav-link ic-nav-link signin-btn animation-btn" href="{{route('user.login')}}">Sign in</a>
                                
                            @endif
                            
                        </li>
                        <li class="nav-item ic-start-learning">
                            <a class="nav-link ic-nav-link learning-btn rectangle-in" href="create-account.html">Start Learning now</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>
    <!--Header Area End-->

    <!--Banner Area Start-->

    @yield('container')

    <!--Blog Area End-->

    <!--Footer Area Start-->

    <footer class="ic-footer-area" style="background-image: url(assets/images/fotter-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class=" col-md-4 ">
                    <div class="ic-footer-allience">
                        <h2>Alliance <span>Academic</span> </h2>
                        <p>Aliquam dapibus nunc tellus nitu rutrum turpisionpn rutrum actio. Morbi et eros a turpis vulpuscelerisque. Aenean ultricies risus diam, quis maximus </p>
                        <div class="social">
                            <ul class="nav">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=" col-md-2 col-sm-4 offset-md-1">
                    <div class="ic-footer-solution">
                        <h2>Solution</h2>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">careers</a></li>
                            <li><a href="#">team </a></li>
                            <li><a href="#">instructor</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">donor privacy policy</a></li>
                            <li><a href="#">disclaimer</a></li>
                            <li><a href="#">terms of use</a></li>
                            <li><a href="#">media center</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4 offset-md-1 col-pl-0">
                    <div class="ic-footer-solution ic-partner">
                        <h2>Resource</h2>
                        <ul>
                            <li><a href="#">download</a></li>
                            <li><a href="#">event</a></li>
                            <li><a href="#">teach </a></li>
                            <li><a href="#">partners</a></li>
                            <li><a href="#">affilate program</a></li>
                            <li><a href="#">subscribe</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="ic-footer-solution">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">careers</a></li>
                            <li><a href="#">team </a></li>
                            <li><a href="#">instructor</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">donor privacy policy</a></li>
                            <li><a href="#">disclaimer</a></li>
                            <li><a href="#">terms of use</a></li>
                            <li><a href="#">media center</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ic-footer-copyright text-center">
            <p>© 2020 <span>Alliance Academic.</span> All Rights Reserved. Design And Developed By <a href="https://itclanbd.com/" target="_blank">ITCLANBD.</a></p>
        </div>
    </footer>
    <!--Footer Area End-->

    <!-- scrollToTop Area Start  -->
    <a href="#" class="ic-scroll-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- scrollToTop Area End -->


    <!--Jquery-->
    <script src="{{asset('/')}}assets/js/jquery-3.4.1.min.js"></script>
    <!--Bootstrap Js-->
    <script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
    <!--Nice Select-->
    <script src="{{asset('/')}}assets/js/jquery.nice-select.js"></script>

    <!--Owl Carosuel Js-->
    <script src="{{asset('/')}}assets/js/owl.carousel.min.js"></script>

    <!--Main Js-->
    <script src="{{asset('/')}}assets/js/custom.js"></script>
    <!--Wow JS-->
    <script src="{{asset('/')}}assets/js/wow.js"></script>
    <script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>
    <script>
        new WOW().init();

    </script>
    <script src="{{asset('/')}}assets/js/navbar.js"></script>
    <script>
        $(function() {
            $('#main_navbar').bootnavbar();
        })

    </script>
    <script>

        $("#slick").ddslick({
            width: "100%",
            imagePosition: "left",
            selectText: "Select your Card",

        })

    </script>

    @yield('js')


</body>

</html>
