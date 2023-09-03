
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template"/>
    <meta
      name="description"
      content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"/>
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin  </title>
    @include('layouts_admin.css')
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @include('layouts_admin.silebar')
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      @include('layouts_admin.header')
      <div class="page-wrapper">
      <div class="container-fluid">
      <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
       <h5>
    @yield('content')
    </h5>
</div></div>
      </div>
      </div>
      
          
        @include('layouts_admin.footer')
        <a href="#" class="scrollup" style="display: none;"><i class="fas fa-chevron-up"></i></a>
   
    @include('layouts_admin.js')
  </body>
</html>
