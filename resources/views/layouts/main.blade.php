<div class="section bg_light_blue2 pb-0 pt-md-0">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-6 offset-md-1">
                        <div class="medium_divider d-none d-md-block clearfix"></div>
                        <div class="trand_banner_text text-center text-md-left">
                            <div class="heading_s1 mb-3">
                                <span class="sub_heading">Xu hướng mùa mới!</span>
                                <h2>Mẫu Giày Bán Chạy Nhất Mùa Hè</h2>
                            </div>
                            <h5 class="mb-4">Giảm giá tới 50% </h5>
                            <a href="shop-left-sidebar.html" class="btn btn-fill-out rounded-0">Mua Ngay</a>
                        </div>
                        <div class="medium_divider clearfix"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="text-center trading_img">
                            <img src="{{asset('assets//images/slideshow_1.jpg')}}" alt="tranding_img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SINGLE BANNER -->

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Thương Hiệu</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-29">
                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        @foreach($brands as $brand)
                        <div class="item">
                                <div class="product">
                               
                                    <div class="product_img">
                                        <a href="{{asset('brand/'.$brand->id.'/'.$brand->slug.'.html')}}">
                                            <img src="{{asset($brand->img)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="{{asset('brand/'.$brand->id.'/'.$brand->slug.'.html')}}">{{$brand->name}}</a></h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Phụ kiện</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-29">
                        <div id="carouselExampleControls" class=" product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        @foreach($accessories as $accessory) 
                        <div class="item">
                                <div class="product carousel-inner">
                                    <div class="product_img">
                                        <a href="{{asset('accessory/'.$accessory->id.'/'.$accessory->slug.'.html')}}">
                                            <img style="width:150px" src="{{asset($accessory->img)}}" alt="product_img1">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="{{asset('accessory/'.$accessory->id.'/'.$accessory->slug.'.html')}}">{{$accessory->name}}</a></h6>
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

        <!-- START SECTION TESTIMONIAL -->
        <div class="section bg_redon">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Tin Tức </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2" data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true" data-items='1'>
                            @foreach($blog1 as $blog)
                        <div class="testimonial_box">
                                <div class="testimonial_desc">
                                    <p>{{$blog->content}}</p>
                                </div>
                                <div class="author_wrap">
                                    <div class="author_img">
                                        <img src="{{asset($blog->img)}}" alt="user_img1" />
                                    </div>
                                    <div class="author_name">
                                        
                                        <a href="{{asset('blog/'.$blog->id.'/'.$blog->slug.'.html')}}">
                                        <span> {{$blog->name}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION TESTIMONIAL -->

        <!-- START SECTION SHOP INFO -->
        <div class="section pb_70">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                            <i class="fas fa-truck-moving"></i>
                            </div>
                            <div class="icon_box_content">
                            
                                <h5>Giao Hàng Miễn Phí</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                            <i class="fas fa-money-check"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Đổi Trả Trong 7 Ngày</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                            <i class="fas fa-headset"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Hỗ Trợ 24/7</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP INFO -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->
    <section>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <nav class="nav flex-column p-4">
            <a class="nav-link active text-dark" href="#">
              <h5>HỖ TRỢ</h5>
            </a>
            <a class="nav-link text-secondary" href="#">Gọi tư vấn - đặt hàng online <br>
              0123.456.789         
             </a>
            <a class="nav-link text-secondary" href="#">Góp ý & khiếu nại <br> 
              (8:30 - 20:30)</a>
            <a class="nav-link text-dark" href="#" >
              Theo dõi chúng tôi trên nền tảng <br>
              <img src="{{asset('assets/images/fb.webp')}}" alt="">
              <img src="{{asset('assets/images/yb.webp')}}" style="width:30px" alt="">
              <img src="{{asset('assets/images/zalo.webp')}}" style="width:30px" alt="">
              <img src="{{asset('assets/images/tiktok.webp')}}"  style="width:30px"alt="">
              <img src="{{asset('assets/images/ig.webp')}}"  style="width:30px"alt="">
            </a>
          </nav>
        </div>
        <div class="col-4 p-2">
          <nav class="nav flex-column ">
            <a class="nav-link active text-dark"  href="#">
              <h5>HỆ THỐNG CỬA HÀNG</h5>
            </a>
          </nav>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/images/index_store_2.webp')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/index_store_3.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/index_store_4.webp')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-4">
          <nav class="nav flex-column p-2">
            <a class="nav-link active text-dark" href="#">
              <b>KHÁCH HÀNG NỔI TIẾNG</b>
            </a>
          </nav>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active img-kh">
                  <img src="{{asset('assets/images/kh.jpg')}}" style="width:250px; height:220px" alt="...">
              </div>
            </div>
          </div>      
        </div>
      </div>
    </div>
   </section>

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