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

    <title>Phụ kiện chính hãng</title>
    <!-- Favicon Icon -->
    @include('layouts.css')

   

</head>

<body>

    @include('layouts.header')

    <div class="container bg-light"><!-- STRART CONTAINER -->
        <div class="row align-items-center ">
            <ol class="breadcrumb justify-content-md-end">
                <li class=""><a href="#">Trang chủ/</a></li>
                <li class=""><a href="#">phụ kiện</a></li>
                 <!-- <li class="breadcrumb-item active">Product Detail Thumbnails Left</li> -->
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
                           
                            <div class="product_img_box">
                                <img id="product_img" src="{{asset($accessory2->img)}}" data-zoom-image="assets/images/accessory2_zoom_img1.jpg" alt="accessory2_img1" />
                                <!-- <a href="#" class="accessory2_img_zoom" title="Zoom">
                                <i class="fas fa-search-plus"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="accessory2_description">
                                <h4 class="accessory2_title"><a href="#">{{$accessory2->name}}</a></h4>
                                <div class="accessory2_price">
                                    <span class="price">{{$accessory2->price}}đ</span>
                                    
                                    <div class="on_sale">
                                       
                                    </div>
                                </div>
                                <!-- <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                     <span class="rating_num"> </span>
                                </div> -->
                                <div class="pr_desc">
                                    <p>{{$accessory2->content}}</p>
                                </div>
                                <div class="product_sort_info">
                                    <ul>
                                        <li><i class="fas fa-calendar-check"></i>Bảo hành trong 1 năm</li>
                                        <li><i class="fas fa-sync"></i> Đổi trả trong 7 ngày</li>
                                        <li><i class="fas fa-dollar-sign"></i> Thanh toán khi nhận hàng</li>
                                    </ul>
                                </div>
                                <div class="pr_switch_wrap">
                                    
                                    <div class="product_color_switch">
                                        <span>{!!$accessory2->status == 0 ?
                                '<span class="badge badge-success rounded-pill d-inline">Còn hàng</span>' : 
                                '<span class="badge badge-success rounded-pill d-inline">Hết hàng</span>'
                                !!}</span>

                                    </div>
                                </div>
                                <div class="pr_switch_wrap">
                                    <!-- <span class="switch_lable">Size</span> -->
                                    <div class="product_size_switch">
                                       
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
                                    <button class="btn btn-fill-out btn-addtocart" type="button"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
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
                                    <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Chế độ bảo hành</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                    <p>{!!$accessory2->depscription!!}</p>

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
                                    <div>
                                        <p>
                                        - Hình thức bảo hành: SỬA CHỮA, KHẮC PHỤC NHỮNG HƯ HỎNG ĐỂ GIỮ FORM GIÀY CHUẨN VÀ TIẾP <br>
                                         TỤC SỬ DỤNG TỐT. BẢO HÀNH KHÔNG PHẢI LÀ ĐỔI MỚI SẢN PHẨM.
                                        </p>
                                    </div>
                                </div>
                           
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
                            @foreach($accessory1 as $accessory)
                            <div class="item">
                                <div class="accessory1">
                                <span class="pr_flash bg-danger"></span>
                                    <div class="accessory1_img">
                                        <a href="shop-accessory1-detail.html">
                                            <img src="{{asset($accessory->img)}}" alt="accessory1_img1">
                                        </a>
                                        <div class="accessory1_action_box">
                                            <!-- <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"></a><i class="fa-regular fa-heart"></i></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    <div class="accessory1_info">
                                        <h6 class="accessory1_title"><a href="shop-accessory1-detail.html">{{$accessory->name}}</a></h6>
                                        <div class="accessory1_price">
                                            <span class="price">{{$accessory->price}}</span>
                                            <del></del>
                                            <div class="on_sale">
                                                <!-- <span>35% Off</span> -->
                                            </div>
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
    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->

    @include('layouts.js')
</body>

</html>