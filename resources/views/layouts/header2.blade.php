<div class="section small_pt pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Bạn Đang Tìm</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style1">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">Bản mới về</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="sellers-tab" data-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Bản bán chạy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Bản đặc biệt</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="special-tab" data-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Bản đang sale
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                                <div class="row shop_container">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                        <span class="pr_flash bg-danger">{{$product->size}}</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset($product->img)}}">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="{{asset('cart/add/'.$product->id)}}"><i class="fas fa-cart-plus"></i>Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}">{{$product->name}}</a></h6>
                                                <div class="product_price">
                                                    <span class="price">{{number_format($product->price,0,',','.')}}</span>
                                                    <del>{{$product->sale}}</del>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        
                                                        <span data-color="#COCOCO"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                                <div class="row shop_container">
                                @foreach($products1 as $product)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                        <span class="pr_flash bg-danger">{{$product->size}}</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset($product->img)}}">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="{{asset('cart/add/'.$product->id)}}"><i class="fas fa-cart-plus"></i>Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}">{{$product->name}}</a></h6>
                                                <div class="product_price">
                                                    <span class="price">{{number_format($product->price,0,',','.')}}</span>
                                                    <del>{{$product->sale}}</del>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(26)</span>
                                                </div>
                                                
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        
                                                        <span data-color="#COCOCO"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="row shop_container">
                                @foreach($products2 as $product)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                        <span class="pr_flash bg-danger">{{$product->size}}</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset($product->img)}}">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="{{asset('cart/add/'.$product->id)}}"><i class="fas fa-cart-plus"></i>Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}">{{$product->name}}</a></h6>
                                                <div class="product_price">
                                                    <span class="price">{{number_format($product->price,0,',','.')}}</span>
                                                    <del>{{$product->sale}}</del>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(26)</span>
                                                </div>
                                                
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        
                                                        <span data-color="#COCOCO"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach 
                                </div>
                            </div>
                            <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                                <div class="row shop_container">
                                @foreach($products3 as $product)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                        <span class="pr_flash bg-success">{{$product->size}}</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset($product->img)}}">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="{{asset('cart/add/'.$product->id)}}"><i class="fas fa-cart-plus"></i>Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="fa-solid fa-magnifying-glass-plus"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="fa-solid fa-arrows-turn-right"></i></a></li>
                                                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}">{{$product->name}}</a></h6>
                                                <div class="product_price">
                                                    <span class="price">{{number_format($product->price,0,',','.')}}</span>
                                                    <del>{{$product->sale}}</del>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(30)</span>
                                                </div>
                                                
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        
                                                        <span data-color="#COCOCO"></span>
                                                        <span data-color="#DA323F"></span>
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
            </div>
        </div>