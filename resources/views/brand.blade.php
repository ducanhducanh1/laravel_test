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

    <title>Thương hiệu giày đá banh</title>
    <!-- Favicon Icon -->
    @include('layouts.css')

   

</head>

<body>

    @include('layouts.header')

    <div class="container bg-light"><!-- STRART CONTAINER -->
        <div class="row align-items-center ">
            <ol class="breadcrumb justify-content-md-end">
                <li class=""><a href="#">Trang chủ/</a></li>
                <li class=""><a href="#">Thương Hiệu/</a></li>
                <li class="breadcrumb-item active">{{$brand1->name}}</li>
            </ol>
        </div>
    </div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

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
                                                <option value="0" >Sắp xếp</option>
                                                <option value="?sort=a-z">Từ A-Z</option>
                                                <option value="?sort=z-a">Từ Z-A</option>
                                                <option value="?sort=giamdan">Giá giảm dần</option>
                                                <option value="?sort=tangdan">Giá tăng dần</option>
                                            </select>
                                </div>
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    <a href="javascript:Void(0);" class="shorting_icon grid"><i class="fas fa-th"></i></a>
                                    <a href="javascript:Void(0);" class="shorting_icon list active"><i class="fas fa-list"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row shop_container list">
                @foreach($products1 as $product)
                    <div class="col-md-4 col-6">
                        <div class="product">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset($product->img)}}" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{asset('cart/add/'.$product->id)}}"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-regular fa-heart"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                            </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}">{{$product->name}}</a></h6>
                                <div class="product_price">
                                    <span class="price">{{number_format($product->price,0,',','.') }}</span>
                                    <del>{{$product->sale}}</del>
                                    <div class="on_sale">
                                        <span>{{$product->image}}</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(22)</span>
                                </div>
                                <div class="pr_switch_wrap">
                                    <div class="product_color_switch">
                                        <span ></span>
                                    </div>
                                </div>
                                <div class="pr_desc">
                                    <p>{{$product->comment}}</p>
                                </div>
                                <div class="list_product_action_box">
                                <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{asset('cart/add/'.$product->id)}}"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
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
                {{$products1->links('pagination.custom')}}
            </div>
        	</div>
            <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
            	<div class="sidebar">
                	
                    
                    <div class="widget">
                    	<h5 class="widget_title">Danh mục</h5>	
                        <ul class="list_brand">
                            @foreach($categories as $category)
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" onclick="category('{{$category->id}}')" type="checkbox" name="checkbox" id="Arrivals{{$category->id}}" value="{{$category->id}}">
                                    <label class="form-check-label" for="Arrivals{{$category->id}}"><span>{{$category->name}}</span></label>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <!-- <div class="widget">
                                <h5 class="widget_title">Giá</h5>
                    <ul class="list_brand">
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Arrivals" value="">
                                    <label class="form-check-label" for="Arrivals"><span>0 ~ 1.000.000 VNĐ</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Lighting" value="">
                                    <label class="form-check-label" for="Lighting"><span>1.000.000 ~ 2.000.000 VNĐ</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Tables" value="">
                                    <label class="form-check-label" for="Tables"><span>2.000.000 ~ 4.000.000 VNĐ</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Chairs" value="">
                                    <label class="form-check-label" for="Chairs"><span>Trên 4.000.000 VNĐ</span></label>
                                </div>
                            </li>
                           
                        </ul>
                    </div> -->
                    <!-- <div class="widget">
                    	<h5 class="widget_title">Size</h5>
                        <div class="product_size_switch">
                            <span>39</span>
                            <span>40</span>
                            <span>41</span>
                            <span>42</span>
                            <span>43</span>
                            
                        </div>
                    </div> -->
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
        function category(id) {
            // console.log(id);return;
            location.href =  window.location.pathname + '?category=' + id

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