@extends('Layouts.user-home')
@section('title')
    Course Details
@endsection
@section('container')

    <!--Course Details Area Start-->

    <section class="ic-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcumb-content">
                        <h2>User Experience Courses</h2>
                        <p> <a href="index.html">Home</a> <span>// </span><a href="blog.html">Categories</a> <span>// </span> <a href="#">Design</a> <span>// </span> <a href="#">User Experience</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Course Details Banner Area Start-->

    <section class="ic-course-details-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ic-course-details-banner-left">
                        <div class="title">
                            <h2>{{$data->course_name}}</h2>
                            {{-- <p>Use XD to get a job in UI Design, User Interface, User Experience design, UX design & Web Design</p> --}}
                        </div>
                        <div class="author-duration-rating">
                            <p>{{$data->course_authorname}}</p>
                            <p><span> {{$data->difficulty_level_name}} </span> / <span> {{$data->course_credithour}} Hours </span> / <span>{{$lecture}} Lectures </span> / <span>2 Exams</span></p>

                        </div>
                        <div class="rating-enroll">
                            <div class="rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <p>4.5(3,547 Ratings)</p>
                            </div>
                            <div class="enroll">
                                <p>30,257 Students Enrolled</p>
                            </div>
                        </div>
                        <div class="price">
                            <p>${{$data->course_price}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="video-wrapper">
                        <video src="{{asset('assets/images/Course')}}/{{$data->course_video}}" poster="{{asset('/')}}assets/images/course-details.jpg"></video>
                    </div>
                    <div class="ic-course-details-banner-right">
                        <button type="button" class="add-cart-btn"><a href="view-cart.html">Add To Cart</a></button>
                        <button type="button" class="buy-now-btn">Buy Now</button>
                        <div class="icon">
                            <a href="#"><i class="icofont-ui-love"></i></a>
                        </div>
                    </div><br><br><br>
                </div>
            </div>
        </div>
    </section>

    <!--Course Details Banner Area End-->


    <!--Course details main content-->

    <section class="ic-course-details-main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="ic-course-details-main-left ic-course-details-main-left2">
                        <ul class="nav nav-tabs ic-course-details-nav-tab ic-navtabs2" id="myTab" role="tablist">
                            @foreach ($courseModule as $key=>$item)

                                @if ($key==0)

                                <li class="nav-item">
                                    <a class="nav-link active" id="content-tab" data-toggle="tab" href="#{{$item->course_module_name}}" role="tab" aria-controls="content" aria-selected="true">{{$item->course_module_name}}</a>
                                </li>
                                    
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" id="content-tab" data-toggle="tab" href="#{{$item->course_module_name}}" role="tab" aria-controls="content" aria-selected="true">{{$item->course_module_name}}</a>
                                </li>
                                @endif
                                
                            @endforeach
                            

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @foreach ($courseModule as $item)

                                <div class="tab-pane fade show active" id="{{$item->course_module_name}}" role="tabpanel" aria-labelledby="resposiable-tab">
                                    {{$item->course_module_description}}
                                </div>
                            @endforeach
                            <div class="ic-course-details-content2">
                                
                                <div class="ic-bottom">
                                    <p>Difficulty level: <span>{{$data->difficulty_level_name}}</span> </p>
                                    
        
                                    <a href="{{route('user.courseDemo',$id)}}" class="btn">Course Demo</a>
                                </div>
                            </div>
                                    
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="ic-course-details-main-right">
                        <div class="ic-course-detais-top">
                            <h4>This Course Includes</h4>
                            <ul>
                                <li>11.5 hours on-demand video</li>
                                <li> 69 downloadable resources</li>
                                <li>Full lifetime access</li>
                                <li>Access on mobile and TV</li>
                                <li>Assignments</li>
                                <li>Certificate of Completion</li>
                            </ul>
                        </div>

                        <div class="ic-share-course-icon">
                            <h4>Share This Course On</h4>
                            <ul>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont-github"></i></a></li>
                                <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-certification-btn">
                        <button type="button"><a href="#">Exam For Certification</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Course details main content-->
    
@endsection