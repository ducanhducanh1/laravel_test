<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-center text-md-left">
                        <ul class="header_list">
                            <li>
                                <h6>ĐỨC ANH SPORT - CAM KẾT CHÍNH HÃNG</h6>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-right">
                        <ul class="header_list">
                            <li><i class="fas fa-phone-volume"></i><span>123-456-7890</span></li>
                            <li>
                                
                                <div class="" >
                                <i class="far fa-user"></i>
                                @if(! \Auth::check())
                                    <a class="" href="dang-ky">Đăng kí</a> /
                                    <a class="" href="dang-nhap">Đăng nhập</a>
                                @else
                                    <a class="" href="dang-nhap">Đăng xuất</a>
                                @endif
                                    
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="{{asset('assets/images/logo.jpg')}}" style="width:80px" alt="logo" />
                    <img class="logo_dark" src="{{asset('assets/images/logo.jpg')}}" style="width:80px" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown ">
                            <a class="nav-link" href="{{asset('/')}}">Trang chủ</a>

                        </li>
                        <li class=" nav-item dropdown">
                            <a class="nav-link" href="{{asset('blog')}}">Tin tức </a>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class=" nav-link" href="#" data-toggle="dropdown"><span style="padding-right:5px">GIÀY ĐÁ BANH</span><i class="fas fa-chevron-left fa-rotate-270 fa-xs"></i></a>
                            <div class="dropdown-menu ">
                                <ul class="mega-menu d-lg-flex">
                                    @foreach($categories as $category)
                                    <li class="mega-menu-col col-lg-4">
                                        <ul>

                                            <li><a class="dropdown-header" href="{{asset('category/'.$category->id.'/'.$category->slug.'.html')}}">{{$category->name}}</a></li>
                                            @foreach($brands1 as $brand)
                                            <li><a class="dropdown-item nav-link nav_item" href="{{asset('brand/'.$brand->id.'/'.$brand->slug.'.html')}}">{{$brand->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="d-lg-flex menu_banners">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{asset('assets/images/banner4.webp')}}" alt="menu_banner1">

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{asset('assets/images/banner6.jpg')}}" alt="menu_banner2">

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{asset('assets/images/banner5.jpg')}}" alt="menu_banner3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class=" nav-link" href="#" data-toggle="dropdown"><span style="padding-right:5px">THƯƠNG HIỆU</span><i class="fas fa-chevron-left fa-rotate-270 fa-xs"></i></a>
                            <div class="dropdown-menu dropdown-reverse">
                                <ul>
                                    @foreach($brands1 as $brand)
                                    <li>
                                        <a class="dropdown-item menu-link " href="{{asset('brand/'.$brand->id.'/'.$brand->slug.'.html')}}">{{$brand->name}}</a>

                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class=" nav-link" href="#" data-toggle="dropdown"><span style="padding-right:5px">PHỤ KIỆN</span><i class="fas fa-chevron-left fa-rotate-270 fa-xs"></i></a>
                            <div class="dropdown-menu dropdown-reverse">

                                <ul>
                                    @foreach($its as $ite)
                                    <li>
                                        <a class="dropdown-item menu-link " href="{{asset('ite/'.$ite->id.'/'.$ite->slug.'.html')}}">{{$ite->name}}</a>

                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </li>
                        <li class="dropdown dropdown">
                            <a class="nav-link " href="contact" >CỬA HÀNG</a>
                        </li>
                        <li><a class="nav-link nav_item" href="contact.html"><span style="padding-right:5px"> TUYỂN DỤNG</span></a>
                            <!-- <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog-list-right-sidebar.html">Nhân viên thu ngân </a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog-list-left-sidebar.html">Nhân viên bán hàng</a></li>

                                </ul>
                            </div> -->
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="fas fa-search"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="fa-solid fa-xmark"></i></span>
                            <form action="{{asset('search/')}}">
                                <input type="text" placeholder="Search" name="result" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>

                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="cart/show"><i class="fas fa-cart-plus"></i><span class="cart_count">{{$items->count()}}</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @foreach($items as $item)
                                <li>
                                    <a href="{{'delete/'.$item->id}}" class="item_remove"><i class="far fa-times-circle"></i></a>
                                    <a href="#"><img style="width:50px" src="{{asset($item->attributes->img)}}" alt="cart_thumb1">{{$item->name}}</a>
                                    <span class="cart_quantity">{{$item->quantity}}x <span class="cart_amount"> </span>{{$item->price*$item->quantity}}</span><span class="price_symbole">VNĐ</span>
                                </li>
                                @endforeach
                            </ul>
                            <hr>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Tổng đơn hàng:</strong> <span class="cart_price"> </span>{{$total}}<span class="price_symbole">VNĐ</span></p>
                                <p class="cart_buttons"><a href="cart/show" class="btn btn-fill-line rounded-0 view-cart">Giỏ hàng</a><a href="cart/show" class="btn btn-fill-out rounded-0 checkout">Thanh toán</a></p>
                            </div>
                        </div>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</header>