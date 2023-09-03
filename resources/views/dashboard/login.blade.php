<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập admin</title>
    
    @include('layouts.css')
    <style>
  body{
    background: url('https://e0.pxfuel.com/wallpapers/386/919/desktop-wallpaper-website-background-website-login-page-background.jpg');
    background-repeat: no-repeat;
  background-size: 100% 135%;
  }
 </style>
</head>
<body class="bg-light" >

<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Form đăng nhập admin</h3>
                        </div>
                        <form action="{{ route('post.loginadmin') }}" method="POST" >
                          @csrf
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
                                        </div>
                                <input type="text" required="" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                        </div>
                                <input class="form-control" id="pass" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login_footer form-group mb-3">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input  type="checkbox"  id="check">
                                        <label  ><span>Hiển thị</span></label>
                                    </div>
                                </div>
                                <!-- <a href="#">Forgot password?</a> -->
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Đăng nhập</button>
                            </div>
                        </form>
                        <!-- <div class="different_login">
                            <span> or</span>
                        </div>
                        <ul class="btn-login list_none text-center">
                            <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                        </ul> -->
                        <!-- <div class="form-note text-center">Chưa có tài khoản? <a href="{{ route('get.register') }}">Đăng kí ngay</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">

</script>

<script>
  @if(session()->has('success'))
      toastr.success('{{session()->get("success")}}')
  @elseif(session()->has('error'))
      toastr.error('{{session()->get("error")}}')
  @endif

</script>
<script>
check.onclick = togglePassword;
function togglePassword(){
  if (check.checked) pass.type = "text";
  else pass.type = "password";
}
</script>
@include('layouts.js')

</body>
</html>

