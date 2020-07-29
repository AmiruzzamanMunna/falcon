@extends('Layouts.user-home')
@section('title')
    Cart
@endsection
@section('container')

<!--View Cart Area Start-->

<section class="ic-breadcumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcumb-content">
                    <h2>User experience courses</h2>
                    <p> <a href="index.html">Home</a> <span>// </span><a href="#">Categories</a> <span>// </span> <a href="">Design</a> <span>// </span> <a href="#">User Experience</a></p>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="ic-view-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="ic-cart-item-title">
                    <h4 id="showtitle"></h4>
                </div>
                <div id="show">
                    
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="ic-cart-total">
                    <div class="cart-total-title">
                        <h4>cart total</h4>
                    </div>
                    <div class="ic-cart-total-content">
                        <h5 id="showtitle2">03 courses</h5>
                        <div class="row" id="carttotal">
            
                        </div>

                    </div>
                    <div class="ic-cart-total-amount">
                        <div class="row">
                            <div class="col-sm-10">
                                <p>Total</p>
                            </div>
                            <div class="col-sm-2">
                                <p id="totalprice"></p>
                            </div>
                        </div>
                    </div>
                    <div class="ic-cart-checkout-btn">
                        <button type="submit">checkout now</button>
                    </div>
                </div>

                <div class="ic-cart-coupon">
                    <div class="form-group coupon-fleid">
                        <input type="text" name="coupon" class="form-control" placeholder="enter coupon code">
                    </div>
                    <div class="ic-coupon-btn">
                        <button type="submit">apply now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--View Cart Area End-->




<script>

    $(document).ready(function(){

        getCartItem();
    });
    function getCartItem(){

        $.ajax({

            type:"get",
            url:"{{route('user.getCartItem')}}",
            success:function(data){

                console.log(data);

                var html='';
                var html2='';
                var total=0;
                
                if(data.data.length>0){

                    for($i=0;$i<data.data.length;$i++){

                        total+=data.data[$i].course_price;

                        html+='<div class="ic-cart-item">';
                        html+='<div class="row">';
                        html+='<div class="col-md-8">';
                        html+='<div class="ic-cart-image-title">';
                        html+='<div class="row">';
                        html+='<div class="col-sm-3">';
                        html+='<div class="image">';
                        html+='<img src="'+data.data[$i].course_image+'" class="img-fluid" alt="">';
                        html+='</div>';
                        html+='</div>';
                        html+='<div class="col-sm-9 ic-col-pl0">';
                        html+='<div class="title">';
                        html+='<h6>'+data.data[$i].course_name+'</h6>';
                        html+='<p>'+data.data[$i].course_authorname+'</p>';
                        html+='</div>';
                        html+='</div>';
                        html+='</div>';
                        html+='</div>';
                        html+='</div>';
                        html+='<div class="col-md-1 my-auto">';
                        html+='<div class="ic-cart-price">';
                        html+='<p>'+data.data[$i].course_price+'</p>';
                        html+='</div>';
                        html+='</div>';
                        html+='<div class="col-md-3">';
                        html+='<div class="ic-cart-remove-save">';
                        html+='<i class="icofont-close-squared-alt" onclick="cartRemove('+data.data[$i].cart_id+')"></i>';
                        html+='<i onclick="cartToWishList('+data.data[$i].course_id+')" class="icofont-ui-love"></i>';
                        html+='</div>';
                        html+='</div>';
                        html+='</div>';
                        html+='</div>';                            
                                
                            

                        html2+='<div class="col-sm-10 col-md-12 col-lg-10">';
                        html2+='<ul>';
                        html2+='<li>'+data.data[$i].course_name+'</li>';
                        html2+='</ul>';
                        html2+='</div>';
                        html2+='<div class="col-sm-2 col-lg-2 col-md-12 my-auto">';
                        html2+='<p>'+data.data[$i].course_price+'</p>';
                        html2+='</div>';
                        
                    }
                    $("#totalprice").html(total);
                    if(data.data.length>1){

                        $("#showtitle").html(data.data.length+' Courses in cart');
                        $("#showtitle2").html(data.data.length+' Courses');

                    }else{

                        $("#showtitle").html(data.data.length+' Course in cart');
                        $("#showtitle2").html(data.data.length+' Course');
                    }
                    
                    $("#show").html(html);
                    $("#carttotal").html(html2);

                }else{
                    

                    $("#show").html("<h1 style=color:#ff6b1b>Sorry no Course in Cart</h1>");
                    $("#carttotal").html("<h1 style=color:#ff6b1b>Sorry No Course</h1>");

                    $("#showtitle").html('No Course in cart');
                    $("#showtitle2").html('No Course');

                    $("#totalprice").html('0');

                }
                
            },
            error:function(error){

                console.log(error);
            }
        });
    }
    function cartRemove(id){

        $.ajax({

            type:"get",
            url:"{{route('user.cartRemove')}}",
            data:{

                id:id,
            },
            success:function(data){
                
                if(data.status=='remove'){
                    
                    getCartItem();
                }
            },
            error:function(error){

                console.log(error);
            }
        });
    }
    function cartToWishList(id){

        $.ajax({

            type:"get",
            url:"{{route('user.cartToWishList')}}",
            data:{

                course_id:id,
            },
            success:function(data){
                
                if(data.status=='success'){

                    getCartItem();
                }
            },
            error:function(error){

                console.log(error);
            }
        });
    }
</script>


@endsection