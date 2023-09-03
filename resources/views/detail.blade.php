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

<body>

    @include('layouts.header')

    <div class="container bg-light"><!-- STRART CONTAINER -->
        <div class="row align-items-center ">
            <ol class="breadcrumb justify-content-md-end">
                <li class=""><a href="#">Trang chủ/</a></li>
                <li class=""><a href="#">Giày đá banh/</a></li>
                <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
            </ol>
        </div>
    </div><!-- END CONTAINER-->

    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image vertical_gallery">
                            <!-- <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-vertical="true" data-vertical-swiping="true" data-slides-to-show="5" data-slides-to-scroll="1" data-infinite="false">
                                <div class="item">
                                    <a href="#" class="product_gallery_item active" data-image="assets/images/product_img1.jpg" data-zoom-image="assets/images/product_zoom_img1.jpg">
                                        <img src="assets/images/product_small_img1.jpg" alt="product_small_img1" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-2.jpg" data-zoom-image="assets/images/product_zoom_img2.jpg">
                                        <img src="assets/images/product_small_img2.jpg" alt="product_small_img2" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-3.jpg" data-zoom-image="assets/images/product_zoom_img3.jpg">
                                        <img src="assets/images/product_small_img3.jpg" alt="product_small_img3" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-4.jpg" data-zoom-image="assets/images/product_zoom_img4.jpg">
                                        <img src="assets/images/product_small_img4.jpg" alt="product_small_img4" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item active" data-image="assets/images/product_img1.jpg" data-zoom-image="assets/images/product_zoom_img1.jpg">
                                        <img src="{{asset($product->img)}}" alt="product_small_img1" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-2.jpg" data-zoom-image="assets/images/product_zoom_img2.jpg">
                                        <img src="{{asset($product->img)}}" alt="product_small_img2" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-3.jpg" data-zoom-image="assets/images/product_zoom_img3.jpg">
                                        <img src="{{asset($product->img)}}" alt="product_small_img3" />
                                    </a>
                                </div>
                            </div> -->
                            <div class="product_img_box">
                                <img id="product_img" src="{{asset($product->img)}}" data-zoom-image="assets/images/product_zoom_img1.jpg" alt="product_img1" />
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <i class="fas fa-search-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{$product->name}}</a></h4>
                                <div class="product_price">
                                    <span class="price">{{number_format($product->price,0,',','.') }}đ</span>
                                    <del>{{$product->sale}}đ</del>
                                    <div class="on_sale">
                                        <span>{{$product->image}}</span>
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

                                <div class="product_sort_info">
                                    <ul>
                                        <li><i class="fas fa-calendar-check"></i>Bảo hành trong 1 năm</li>
                                        <li><i class="fas fa-sync"></i> Đổi trả trong 7 ngày</li>
                                        <li><i class="fas fa-dollar-sign"></i> Thanh toán khi nhận hàng</li>
                                    </ul>
                                </div>
                                <div class="pr_switch_wrap">
                                    <span class="switch_lable">{{$product->content}}</span>
                                    <div class="product_color_switch">
                                        <span> {!!$product->status == 0 ?
                                            '<span class="badge badge-success rounded-pill d-inline">Còn hàng</span>' :
                                            '<span class="badge badge-success rounded-pill d-inline">Hết hàng</span>'
                                            !!}</span>

                                    </div>
                                </div>
                                <div class="pr_switch_wrap">
                                    <span class="switch_lable">Size</span>
                                    <div class="product_size_switch">
                                        <span>39</span>
                                        <span>40</span>
                                        <span>41</span>
                                        <span>42</span>
                                        <span>43</span>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="cart_extra">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <button class="btn btn-fill-out btn-addtocart" type="button"><a href="{{asset('cart/add/'.$product->id)}}"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a></button>
                                </div>
                            </div>
                            <hr />


                            <div class="product_share">
                                <span>Share:</span>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="fales">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Chế độ bảo hành</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="true">Bình luận</a>
                                </li>

                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show " id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                    <p>{!!$product->depscription!!}</p>

                                </div>
                                <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                    <div>
                                        <p>
                                            A. ĐỐI VỚI CÁC SẢN PHẨM GIÀY BÓNG ĐÁ CHÍNH HÃNG:
                                            Bóng đá là môn thể thao đối kháng, những va chạm, những trầy xước, hư hao là không thể tránh khỏi. Tất cả sản phẩm Giày <br>
                                            Bóng Đá Chính Hãng mua tại hệ thống DUCANHSPORT.COM đều được hỗ trợ bảo hành xuyên suốt thời gian sử dụng. <br>
                                            - Hotline hỗ trợ bảo hành: 0789.970.907 <br>

                                            Khi cần bảo hành Khách hàng gửi giày kèm sđt mua hàng về chi nhánh NEYMARSPORT gần nhất, chúng tôi tiếp nhận bảo hành và sẽ <br>
                                            thông báo cho khách hàng sau khi hoàn thành.

                                            Sau thời gian bảo hành (90 ngày căn cứ vào ngày mua hàng), các vấn đề liên quan đến giày sẽ được Neymarsport hỗ trợ sửa <br>
                                            chữa. Chi phí sửa chữa giao động từ 30-60k tuỳ từng trường hợp.
                                        </p>
                                    </div>
                                    <div>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>ÉP KEO + MAY VẾT HỞ DƯỚI 5CM</td>
                                                <td>30.000 VNĐ</td>
                                            </tr>
                                            <tr>
                                                <td>ÉP KEO + MAY 50%</td>
                                                <td>40.000</td>
                                            </tr>
                                            <tr>
                                                <td>ÉP KEO + MAY NGUYÊN ĐẾ</td>
                                                <td>50.000</td>
                                            </tr>
                                            <tr>
                                                <td>ĐẮP RA + VÁ CHỖ RÁCH</td>
                                                <td>50.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div>
                                        <p>
                                            - Hình thức bảo hành: SỬA CHỮA, KHẮC PHỤC NHỮNG HƯ HỎNG ĐỂ GIỮ FORM GIÀY CHUẨN VÀ TIẾP <br>
                                            TỤC SỬ DỤNG TỐT. BẢO HÀNH KHÔNG PHẢI LÀ ĐỔI MỚI SẢN PHẨM.
                                        </p>
                                    </div>

                                </div>
                                <div class="tab-pane active " id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <div class="comments">

                                        <h5 class="product_tab_title">Bình luận</h5>
                                        <ul class="list_none comment_list mt-4">
                                            @foreach($comments as $comment)
                                            <li>
                                                <div class="comment_img">
                                                    <img src="{{asset('assets/images/user.jpg')}}" alt="user1" />
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:80%"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta">
                                                        <span class="review_author">{{$comment->name}}</span>
                                                        <span class="comment-date">{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>{{$comment->content}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="card-footer clearfix">
                                        {{$comments->links('pagination.custom')}}
                                    </div>
                                    <div class="review_form field_form">

                                        <h5>Bình luận</h5>

                                        <form class="row mt-3" method="POST">
                                            @csrf
                                            @if($errors = session()->get('errors'))
                                            <ul>
                                                @foreach($errors->messages() as $error)
                                                <li>{{ $error[0] }}</li>
                                                @endforeach
                                            </ul>
                                            @endif
                                            <div class="form-group col-12 mb-3">
                                                <div class="star_rating">
                                                    <span data-value="1"><i class="far fa-star"></i></span>
                                                    <span data-value="2"><i class="far fa-star"></i></span>
                                                    <span data-value="3"><i class="far fa-star"></i></span>
                                                    <span data-value="4"><i class="far fa-star"></i></span>
                                                    <span data-value="5"><i class="far fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 mb-3">
                                                <textarea required="required" placeholder="Your review *" class="form-control" name="content" rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                            </div>
                                            <!-- <div class="form-group col-md-6 mb-3">
                                                <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                                            </div> -->

                                            <div class="form-group col-12 mb-3">
                                                <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Gửi ngay</button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="small_divider"></div>
                                <div class="divider"></div>
                                <div class="medium_divider"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_s1">
                                    <h3>Sản phẩm tương tự</h3>
                                </div>
                                <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                    @foreach($products1 as $product)
                                    <div class="item">
                                        <div class="product">
                                            <span class="pr_flash bg-danger">{{$product->size}}</span>
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
                                                <h6 class="product_title"><a href="shop-product-detail.html">{{$product->name}}</a></h6>
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

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

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
</body>

</html>