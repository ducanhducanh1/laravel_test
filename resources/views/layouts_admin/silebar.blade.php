<div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="{{asset('assets/images/admin.jpg')}}" alt="homepage"
                style = "width:100px" />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a
              class="
                nav-toggler
                waves-effect waves-light
                text-dark
                d-block d-md-none
              "
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="in">
                <!-- <form role="search" class="app-search d-none d-md-block me-3">
                  <input
                    type="text"
                    placeholder="Search..."
                    class="form-control mt-0"
                  />
                  <a href="" class="active">
                    <i class="fa fa-search"></i>
                  </a>
                </form> -->
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li>
                <a class="profile-pic" href="/admin/dang-nhap">
                  <img
                    src="{{asset('assets/images/ducanh.jpg')}}" alt="user-img"
                    width="36" class="img-circle"/>
                    <span class="text-white font-medium">Logout</span></a>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
    
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false">
                  <i class="fas fa-th-list"></i>
                  <span class="hide-menu">Danh mục sản phẩm</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/category/create" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Thêm danh mục sản phẩm</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="/category/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Liệt kê danh mục sản phẩm </span></a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fas fa-sliders-h"></i>
                  <span class="hide-menu">Sản Phẩm</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/product/create" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Thêm sản phẩm</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="/product/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Liệt kê sản phẩm </span></a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fas fa-synagogue"></i>
                  <span class="hide-menu">Thương hiệu</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/brand/create" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Thêm thương hiệu</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="/brand/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Liệt kê thương hiệu </span></a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fas fa-keyboard"></i>
                  <span class="hide-menu">Danh mục phụ kiện</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/item/create" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Thêm danh mục phụ kiện</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="/item/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Liệt kê danh mục phụ kiện </span></a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fas fa-hat-wizard"></i>
                  <span class="hide-menu">Phụ kiện</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/accessory/create" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Thêm phụ kiện</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="/accessory/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Liệt kê phụ kiện </span></a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fa fa-table" aria-hidden="true"></i>
                  <span class="hide-menu">Tin tức</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/blog/create" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Thêm tin tức</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="/blog/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Liệt kê tin tức</span></a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fa fa-table" aria-hidden="true"></i>
                  <span class="hide-menu">Banner</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/banner/create" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Thêm banner</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="/banner/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Liệt kê banner</span></a>
                  </li>
                </ul>
              </li>
              
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fas fa-users"></i>
                  <span class="hide-menu">Khách hàng</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  
                  <li class="sidebar-item">
                    <a href="/user/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> danh sách khách hàng</span></a>
                  </li>
                </ul>
              </li>
              
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fas fa-users"></i>
                  <span class="hide-menu">Bình luận</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  
                  <li class="sidebar-item">
                    <a href="/comment/index" class="sidebar-link"><i class="fas fa-comments"></i><span class="hide-menu"> Danh sách bình luận</span></a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#" aria-expanded="false">
                  <i class="fas fa-chart-bar"></i>
                  <span class="hide-menu">Quản lí đơn hàng</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  
                  <li class="sidebar-item">
                    <a href="/order/index" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> danh sách đơn hàng</span></a>
                  </li>
                </ul>
              </li>
              
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>