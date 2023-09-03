@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
</head>
<body>
<div class="bg-light">
<div class="container bg-light"><!-- STRART CONTAINER -->
        <div class="row align-items-center ">
            <ol class="breadcrumb justify-content-md-end">
                <li class=""><a href="#">Trang chủ/</a></li>
                <li class=""><a href="#">Tin tức</a></li>
              
            </ol>
        </div>
    </div>
</div>
<div class="main_content bg-white">

<!-- START SECTION BLOG -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9">
            	<div class="single_post">
                	<h2 class="blog_title">{{$blog->name}}</h2>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-calendar"></i> {{$blog->created_at}}</a></li>
                        <li><a href="#"><i class="far fa-comments"></i> {{$blog->comment}}</a></li>
                    </ul>
                    <!-- <div class="blog_img">
                        <img src="assets/images/blog_img1.jpg" alt="blog_img1">
                    </div> -->
                    <div class="blog_content">
                        <div class="blog_text">
                            <p>{!!$blog->depscription!!}</p>
                            <!-- <blockquote class="blockquote_style3">
                            	<p>Integer is metus site turpis facilisis customers. elementum an mauris in venenatis consectetur east. Praesent condimentum bibendum Morbi sit amet commodo pellentesque at fringilla tincidunt risus.</p>
                            </blockquote> -->
                            
                        	<div class="blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <div class="tags">
                                            <a href="#">General</a>
                                            <a href="#">Design</a>
                                            <a href="#">jQuery</a>
                                            <a href="#">Branding</a>
                                            <a href="#">Modern</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="social_icons text-md-right">
                                            <li><a href="#" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="sc_google"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#" class="sc_youtube"><i class="fab fa-youtube-square"></i></a></li>
                                            <li><a href="#" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="related_post">
                	<div class="content_title">
                    	<h5>Bài viết liên quan</h5>
                    </div>
                    <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-6">
                            <div class="blog_post blog_style2 box_shadow1">
                                <div class="blog_img">
                                    <a href="blog-single.html">
                                        <img src="{{asset($blog->img)}}" alt="blog_small_img2">
                                    </a>
                                </div>
                                <div class="blog_content bg-white">
                                    <div class="blog_text">
                                        <h5 class="blog_title"><a href="{{asset('blog/'.$blog->id.'/'.$blog->slug.'.html')}}">{{$blog->name}}</a></h5>
                                        <ul class="list_none blog_meta">
                                            <li><a href="#"><i class="far fa-calendar"></i> {{$blog->created_at}}</a></li>
                                            <li><a href="#"><i class="far fa-comments"></i> {{$blog->comment}}</a></li>
                                        </ul>
                                        <p>{{$blog->content}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        @endforeach                 
                	</div>
                </div>
                <!-- <div class="comment-area">
                    <div class="content_title">
                        <h5>{{$blog->comment}}</h5>
                    </div>
                    <ul class="list_none comment_list">
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="comment_user">
                                    <img src="assets/images/user2.jpg" alt="user2">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex">
                                        <div class="meta_data">
                                            <h6><a href="#">Alden Smith</a></h6>
                                            <div class="comment-time">MARCH 5, 2018, 6:05 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                            <ul class="children">
                            	<li class="comment_info">
                                    <div class="d-flex">
                                        <div class="comment_user">
                                            <img src="assets/images/user3.jpg" alt="user3">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex align-items-md-center">
                                                <div class="meta_data">
                                                    <h6><a href="#">Daisy Lana</a></h6>
                                                    <div class="comment-time">april 8, 2018, 5:15 PM</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                                </div>
                                            </div>
                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="comment_user">
                                    <img src="assets/images/user4.jpg" alt="user4">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex">
                                        <div class="meta_data">
                                            <h6><a href="#">John Becker</a></h6>
                                            <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                </div> -->
            </div>
        	<div class="col-xl-3 mt-4 pt-2 mt-xl-0 pt-xl-0 ">
            	<div class="sidebar">
                	
                	<div class="widget bg-light">
                    	<h5 class="widget_title">Bài viết gần đây</h5>
                        <ul class="widget_recent_post">
                        @foreach($blogs as $blog)
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="{{asset('blog/'.$blog->id.'/'.$blog->slug.'.html')}}"><img src="{{asset($blog->img)}}" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="{{asset('blog/'.$blog->id.'/'.$blog->slug.'.html')}}">{{$blog->content}}</a></h6>
                                        <p class="small m-0">{{$blog->comment}}</p>
                                    </div>
                                </div>
                            </li>
                           @endforeach
                    	</ul>
                    </div>
                  
                    <div class="widget">
                    	<div class="shop_banner">
                            <div class="banner_img overlay_bg_20">
                                <img src="{{asset('assets/images/index_banner_4.jpg')}}" alt="sidebar_banner_img">
                            </div> 
                            
                        </div>
                    </div>
                	<div class="widget">
                    	<h5 class="widget_title">tags</h5>
                        <div class="tags">
                        	<a href="#">Thiết kế</a>
                            <a href="#">Thương hiệu</a>
                            <a href="#">Giá</a>
                            <a href="#">Mẫu giày mới</a>
                            <a href="#">Phụ kiện</a>
                            <a href="#">Tin tức</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION BLOG -->

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
</body>
</html>
@endsection