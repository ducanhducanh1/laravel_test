@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng</title>
</head>
<body>
<div class="bg-light">
        <div class="container bg-light"><!-- STRART CONTAINER -->
            <div class="row align-items-center ">
                <ol class="breadcrumb justify-content-md-end">
                    <li class=""><a href="#">Trang chủ/</a></li>
                    <li class=""><a href="#">Cửa hàng</a></li>
                   
                </ol>
            </div>
        </div>
    </div>
    <div class="main_content bg-white">

<!-- START SECTION CONTACT -->
<div class="section pb_70">
	<div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
            	<div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                    <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact_text">
                        <span>Địa chỉ</span>
                        <p>123 Trần Phú, Hà Đông, Hà Nội</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
            	<div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                    <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="contact_text">
                        <span>Địa chỉ email</span>
                        <a href="mailto:info@sitename.com">info@yourmail.com </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
            	<div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                    <i class="fas fa-phone-square-alt"></i>
                    </div>
                    <div class="contact_text">
                        <span>Phone</span>
                        <p>+ 123 456 789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CONTACT -->

<!-- START SECTION CONTACT -->
<div class="section pt-0 bg-white">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-6">
            	<div class="heading_s1">
                	<h2>Duc Anh Sport</h2>
                </div>
                <p class="leads">Trải nghiệm mua sắm tại cửa hàng mang đến sự thoải mái. Thử giày trước và thanh toán sau</p>
                
            </div>
            <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
            	<div id="map" class="contact_map2" data-zoom="12" data-latitude="40.680" data-longitude="-73.945">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.23605854202!2d105.78947617397039!3d20.983172589345315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accf3b3fb6cd%3A0x332c40170bd20cdc!2zMTIzIFRy4bqnbiBQaMO6LCBQLiBWxINuIFF1w6FuLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1693407173553!5m2!1svi!2s" width="600" height="450" 
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection