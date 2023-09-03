<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="Anil z" name="author">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
  <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

  <!-- SITE TITLE -->

  <!-- Favicon Icon -->
  @include('layouts.css')

  

</head>

<body>

  @include('layouts.header')


  <section class="h-100" style="background-color: #eee;">
   <h5> <h5>
    @yield('content')
    </h5></h5>
  </section>
  
  <!-- END FOOTER -->
  @include('layouts.footer')
  <a href="#" class="scrollup" style="display: none;"><i class="fas fa-chevron-up"></i></a>

  <!-- Latest jQuery -->

  @include('layouts.js')
</body>

</html>