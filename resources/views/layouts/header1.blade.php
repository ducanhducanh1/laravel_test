<div id="carouselExampleControls" class="carousel slide carousel-fade " data-ride="carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
             
                <div class="carousel-inner">
                @foreach($banners as $banner)
                    <div class="carousel-item active">
                        <img src="{{asset($banner->img)}}" class="d-block w-100" alt="...">
                    </div>
                  
                    <div class="carousel-item">
                        <img src="{{asset($banner->img1)}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset($banner->img2)}}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
             
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a> -->
    </div>
    
    <!-- END SECTION BANNER -->

    <!-- END MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION BANNER -->
        <div class="section pb_20">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single_banner" style="width:300px">
                            <img src="{{ asset('assets/images/index_banner_2.jpg')}}" alt="shop_banner_img1" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_banner" style="width:300px">
                            <img src="{{ asset('assets/images/index_banner_4.jpg')}}" alt="shop_banner_img2" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single_banner" style="width:300px">
                            <img src="{{ asset('assets/images/index_banner_1.jpg')}}" alt="shop_banner_img2" />
                        </div>
                    </div>
                </div>
            </div>
        </div>