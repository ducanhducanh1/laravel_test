@extends('welcome')
@section('content')
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

  <title>Đơn hàng</title>
  <!-- Favicon Icon -->




</head>

<body>


  <div class="main_content bg-white">

    <!-- START SECTION SHOP -->
    <div class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="text-center order_complete">
              <i class="fas fa-check-circle"></i>
              <div class="heading_s1">
                <h3>Đơn Hàng Của Bạn Đã Hoàn Tất!</h3>
              </div>
              <p>Cảm ơn bạn đã đặt hàng của bạn! Đơn hàng của bạn đang được xử lý và sẽ hoàn thành trong vòng 3-6 giờ. Bạn sẽ nhận được email
                xác nhận khi đơn hàng của bạn hoàn tất.</p>

            </div>
            <div>
           
              <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                  <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền </th>
                    
                    <th>Trạng thái</th>
                    <th>Hoạt động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($items as $product)
                  <tr>

                    <td>
                      <div class="d-flex align-items-center">
                        <img src="{{asset($product->attributes->img)}}" style="width: 45px; height: 45px" class="rounded-circle" />
                        <div class="ms-3">
                          <p class="fw-bold mb-1">{{$product->name}}</p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <p id="form1" min="0" name="quantity" value="" type="number" onchange="updateCart(this.value,'{{$product->id}}')" class="form-control form-control-sm"> {{$product->quantity}}</p>
                    </td>
                    <td>
                      <p class="price">{{$product->price*$product->quantity}}</p>
                    </td>

                    <td>
                      <div class="col-md-18">

                        <select name="status" id="status" class="form-control" style="width:150px">
                          <option value="0">Đang xử lí</option>
                          <option value="1">Đã xử lí</option>
                          <option value="2">Đang giao hàng</option>
                          <option value="3">Giao hàng thất bại</option>
                          <option value="4">Đã giao hàng</option>
                        </select>

                      </div>
                    </td>
                    <td>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="{{'delete/'.$product->id}}" class="text-danger"><i class="fas fa-trash fa-lg"></i>Hủy đơn</a>
                      </div>
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>





    <!-- END FOOTER -->

</body>

</html>
@endsection
<div class="clear-fix bg-light"> </div>