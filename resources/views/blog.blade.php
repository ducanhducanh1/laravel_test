@extends('welcome')
@section('content')
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
<div class="main_content">

<!-- START SECTION BLOG -->
<div class="section bg-white">
	<div class="container">
        <div class="row grid_container masonry">
        	<!-- <div class="col-xl-3 col-lg-4 col-md-6 grid-sizer"></div> -->
            @foreach($blogs as $blog)
            <div class="col-xl-3 col-lg-4 col-md-6 grid_item">
           
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{$blog->img}}" alt="blog_small_img7">
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
        <div class="row">
            <div class="col-12 mt-2 mt-md-4">
                <ul class="pagination pagination_style1 justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="linearicons-arrow-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                </ul>
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

@endsection