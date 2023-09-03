<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->

    <title>Giày đá banh chính hãng</title>
    <!-- Favicon Icon -->
    @include('layouts.css')

   

</head>

<body >

    @include('layouts.header')
    <div class="bg-light">
    <div class="container bg-light"><!-- STRART CONTAINER -->
        <div class="row align-items-center ">
            <ol class="breadcrumb justify-content-md-end">
                <li class=""><a href="#">Trang chủ/</a></li>
                <li class=""><a href="#">Phụ kiện/</a></li>
                 <li class="breadcrumb-item active">{{$item2->name}}</li> 
            </ol>
        </div>
    </div>
    </div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content bg-white">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-lg-9">
            	<div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="">
                                <select class="form-control form-control-sm">
                                                <option value="0">Sắp xếp</option>
                                                <option value="?sort=a-z">Từ A-Z</option>
                                                <option value="?sort=z-a">Từ Z-A</option>
                                                <option value="?sort=giamdan">Giá giảm dần</option>
                                                <option value="?sort=tangdan">Giá tăng dần</option>
                                            </select>
                                </div>
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    <!-- <a href="javascript:Void(0);" class="shorting_icon grid"><i class="fas fa-th"></i></a> -->
                                    <a href="javascript:Void(0);" class="shorting_icon list active"><i class="fas fa-list"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row shop_container list">
                @foreach($accessories as $accessory)
                    <div class="col-md-4 col-6">
                        <div class="product">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset($accessory->img)}}" alt="accessory_img1">
                                </a>
                                <div class="accessory_action_box">
                                <!-- <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-regular fa-heart"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                <li><a href="#"></a></li>
                                            </ul> -->
                                </div>
                            </div>
                            <div class="accessory_info">
                                <h6 class="accessory_title"><a href="{{asset('accessory/'.$accessory->id.'/'.$accessory->slug.'.html')}}">{{$accessory->name}}</a></h6>
                                <div class="accessory_price">
                                    <span class="price">{{$accessory->price}}</span>
                                    <div class="on_sale">
                                        <span>{!!$accessory->status == 0 ?
                                '<span class="badge badge-success rounded-pill d-inline">Còn hàng</span>' : 
                                '<span class="badge badge-success rounded-pill d-inline">Hết hàng</span>'
                                !!}</span>
                                    </div>
                                </div>
                                <!-- <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="accessory_rate" style="width:80%"></div>
                                    </div>
                                   
                                </div> -->
                                <div class="pr_switch_wrap">
                                    <div class="accessory_color_switch">
                                        <span >{{$accessory->content}}</span>
                                    </div>
                                </div>
                                <div class="list_product_action_box">
                                <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{asset('cart/add/'.$accessory->id)}}"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                            </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        		<div class="card-footer clearfix">
                {{$accessories->links('pagination.custom')}}
            </div>
        	</div>
            <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
            	<div class="sidebar">
                	
                    
                    <div class="widget">
                    	<h5 class="widget_title">Thương hiệu</h5>	
                        <ul class="list_brand">
                        @foreach($brands as $brand)
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" onclick="brand('{{$brand->id}}')" type="checkbox" name="checkbox" id="Arrivals{{$brand->id}}" value="{{$brand->id}}">
                                    <label class="form-check-label" for="Arrivals{{$brand->id}}"><span>{{$brand->name}}</span></label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                    	
                    </div>
                    <div class="widget">
                        <div class="shop_banner">
                            <div class="banner_img overlay_bg_20">
                                <img src="{{asset('assets/images/index_banner_4.jpg')}}" alt="sidebar_banner_img">
                            </div> 
                            <div class="shop_bn_content2 text_white">
                                <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                               
                                <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<div class="section bg_default small_pt small_pb">
	<div class="container">	
    	<div class="row align-items-center">	
            <div class="col-md-6">
                <div class="heading_s1 mb-md-0 heading_light">
                    <h3>Đăng kí để nhận thông tin</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter_form">
                    <form>
                        <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Đăng kí</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->



    @include('layouts.footer')
    <a href="#" class="scrollup" style="display: none;"><i class="fas fa-chevron-up"></i></a>

    <!-- Latest jQuery -->

    @include('layouts.js')
    <script>
        function brand(id) {
            // console.log(id);return;
            location.href =  window.location.pathname + '?brand=' + id

        }
        $(document).ready(function() {
            var active = locatiom.seach;
            $('#form-control option[value"' + active + '"]');

       })
        $('.form-control').change(function() {
            var value = $(this).find(':selected').val();
            if (value != 0) {
                var url = value;
                window.location.replace(url);
            } else {
                alert("hãy lọc")
            }
        })
    </script>
</body>

</html>