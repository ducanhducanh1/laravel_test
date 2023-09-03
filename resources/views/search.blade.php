<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion accessorys, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    
    <title>Giày đá banh chính hãng</title>
    <!-- Favicon Icon -->
    @include('layouts.css')

   

</head>

<body>

@include('layouts.header')

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="custom_select">
                                    <!-- <select class="form-control form-control-sm"> -->
                                    <h4>Tìm kiếm với từ khóa: <span>{{$keyword}}</span></h4>
                            
                                </div>
                            </div>
                            <div class="product_header_right">
                                <div class="products_view">
                                    <a href="javascript:void(0);" class="shorting_icon grid active"><i class="fas fa-th"></i></a>
                                    <a href="javascript:void(0);" class="shorting_icon list"><i class="fas fa-list"></i></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">
                    @foreach($items1 as $product)
                    <div class="col-lg-3 col-md-4 col-6 grid_item">
                        
                        <div class="product">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset($product->img)}}" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}">{{$product->name}}</a></h6>
                                <div class="product_price">
                                    <span class="price">{{$product->price}}</span>
                                    <del>{{$product->sale}}</del>
                                    <div class="on_sale">
                                        <span>35% Off</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>{{$product->comment}}</p>
                                </div>
                                <div class="pr_switch_wrap">
                                    <div class="product_color_switch">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="list_product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
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
                <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">
                    @foreach($accessories as $accessory)
                    <div class="col-lg-3 col-md-4 col-6 grid_item">
                        
                        <div class="product">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset($accessory->img)}}" alt="accessory_img1">
                                </a>
                                <div class="accessory_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accessory_info">
                                <h6 class="accessory_title"><a href="{{asset('ite/'.$accessory->id.'/'.$accessory->slug.'.html')}}">{{$accessory->name}}</a></h6>
                                <div class="accessory_price">
                                    <span class="price">{{$accessory->price}}</span>
                                    <del></del>
                                    <div class="on_sale">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="accessory_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p></p>
                                </div>
                                <div class="pr_switch_wrap">
                                    <div class="accessory_color_switch">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="list_accessory_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
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
            </div>
        </div>
    </div>
</div>
    <!-- END FOOTER -->
    @include('layouts.footer') 
    <a href="#" class="scrollup" style="display: none;"><i class="fas fa-chevron-up"></i></a>

    <!-- Latest jQuery -->
    
    @include('layouts.js') 
</body>

</html>