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

  <title>Giỏ hàng</title>
  <!-- Favicon Icon -->
  @include('layouts.css')

  <script>
    // function updateCart(id, quantity) {
    //   $.get(
    //     "{{asset('cart/update')}}", 
    //     {
    //       id:id ,
    //       quantity:quantity,

    //     },
    //     function() {
    //       location.reload();
    //     }
    //   );
    // }
    // $.ajaxSetup({
    //   headers: {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //   }
    // });

    // $('.qty-inc, .qty-desc').on('click', function() {
    //   var id = $(this).attr('data-id');
    //   var qty = $(this).attr('data-qty');
    //   $.ajax({
    //     type: 'PATCH',
    //     url: 'cart/update/' + id,
    //     data: {
    //       qty: qty
    //     },
    //     success: function() {
    //       window.location.href='cart/add';
    //     }
    //   });
    // });
  </script>

</head>

<body>

  @include('layouts.header')


  <section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">

          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Giỏ hàng</h3>
            <div>
              <!-- <button type="submit" class="mb-0 btn btn-danger"> <a href="" class="text-light">Cập nhập </a></button> -->

              <button type="submit" class="mb-0 btn btn-danger"> <a href="{{'delete/add'}}" class="text-light">Xóa tất cả </a></button>
            </div>
          </div>
          <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Name</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
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
                  <p class="price">{{number_format($product->price,0,',','.') }}</p>
                </td>
                <td>
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2">
                      <a href="" class="qty-desc" data-id="{{ $product->id }}" data-qty="{{$product->quantity-1}}">-</a>
                    </button>

                    <input min="0" value="{{$product->quantity}}" type="number" class="form-control form-control-sm" style="width: 70px;" />

                    <button class="btn btn-link px-2">
                      <a href="{{asset('cart/add/'.$product->id)}}" class="qty-inc" data-id="{{ $product->id }}" data-qty="{{$product->quantity+1}}">+</a>
                    </button>
                  </div>

                  <!-- <input  min="0"  value="{{$product->quantity}}" type="number" onchange="updateCart(this.value='{{$product->id}}')" class="class-control" /> -->
                </td>
                <td>
                  <p class="price">{{number_format($product->price*$product->quantity,0,',','.')}}</p>
                </td>
                <td>
                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="{{'delete/'.$product->id}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                  </div>
                </td>

              </tr>
              @endforeach

            </tbody>
            <!-- <tbody>
            @foreach($items as $accessory)
              <tr>
               
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset($accessory->attributes->img)}}" style="width: 45px; height: 45px" class="rounded-circle" />
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{$accessory->name}}</p>

                    </div>
                  </div>
                </td>
                <td>
                  <p class="price">{{number_format($accessory->price,0,',','.') }}</p>
                </td>
                <td>
                  <input id="form1" min="0" name="quantity" value="{{$accessory->quantity}}" type="number" onchange="updateCart(this.value,'{{$accessory->id}}')" class="form-control form-control-sm" />
                </td>
                <td>
                  <p class="price">{{number_format($accessory->price*$accessory->quantity,0,',','.')}}</p>
                </td>
                <td>
                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="{{'delete/'.$accessory->id}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                  </div>
                </td>
               
              </tr>
              @endforeach
          </tbody> -->
          </table>




          <div class="card mb-4">
            <div class="card-body p-4 d-flex flex-row">
              <div class="form-outline flex-fill">
                Tổng giá tiền đơn hàng:<span class="total-price" for="form1">{{$total}}đ</span>
              </div>
            </div>
          </div>

          <!-- <div class="card">
            <div class="card-body">
              <form action="/vnpay_payment" method="POST">
                @csrf
                <button name="redirect" type="submit" class="btn btn-warning btn-block btn-lg">Thanh toán Vnpay</button>
              </form>

            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>
  <section class="h-100 bg-light">

    <div class="row">
      <div class="col-12">
        <div class="medium_divider"></div>
        <div class="divider center_icon"><i class="fas fa-cart-arrow-down"></i></div>
        <div class="medium_divider"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="heading_s1 mb-3">
          <h6 class="text-center">Điền thông tin mua hàng</h6>
        </div>
        <form class="" action="{{route('post.complete')}}" method="POST" id="form-infor" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-lg-12 mb-3">
              <div class="">
                <input type="number" placeholder="Number *" class="form-control" name="phone" rows="4"></input>
              </div>
            </div>
            <div class="form-group col-lg-12 mb-3">
              <div class="">
                <input placeholder="Address *" class="form-control" name="address" type="text">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6 mb-3">
              <input placeholder="Name *" class="form-control" name="name" type="text">
            </div>
            <div class="form-group col-lg-6 mb-3">
              <input placeholder="Enter Email *" type="email" class="form-control" name="email" type="email">
            </div>
          </div>
          <div class="form-group  col-md-9 pe-5">

            <select name="payment" id="payment" class="">
              <option value="0">Thanh toán khi nhận hàng</option>
              <option value="1">Thanh toán bằng VNpay</option>
             
            </select>

          </div>
          <div class="form-row">
            <div class="form-group col-lg-12 mb-3 text-center">
              <button class="btn btn-warning btn-fill-out " type="submit">Đăng kí mua hàng</button>
            </div>

          </div>

        </form>
      </div>
      <div class="col-md-6">
        <div class="border p-3 p-md-4">
          <div class="heading_s1 mb-3">
            <h6 class="text-center">Thanh toán</h6>
          </div>
          <div class="table-responsive">
            <table class="table">
              <tbody>

                <tr>
                  <td class="cart_total_label">Giá tiền</td>
                  @foreach($items as $product)
                  <td class="cart_total_amount">{{number_format($product->price,0,',','.') }}VNĐ</td>
                  @endforeach
                </tr>
                <tr>
                  <td class="cart_total_label">Phí vận chuyển</td>
                  <td class="cart_total_amount">Free Ship</td>
                </tr>
                <tr>
                  <td class="cart_total_label">Total</td>
                  <td class="cart_total_amount"><strong>{{$total}}VNĐ</strong></td>
                </tr>
                
              </tbody>
            </table>
          </div>
          <form action="/vnpay_payment" method="POST" class="text-center">
            @csrf
            <button name="redirect" type="submit" class="btn btn-warning btn-fill-out">Thanh toán Vnpay</button>
          </form>
          <!-- <a href="#" class="btn btn-fill-out">Proceed To CheckOut</a> -->
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- END FOOTER -->
  @include('layouts.footer')
  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

  <!-- Latest jQuery -->

  @include('layouts.js')
  <script>
    window.onload = function() {
      // $('body').scrollTo(2000);
      // $("html, body").animate({ scrollTop: $(document).height() }, 1000);
      // document.getElementById("form-infor").scrollIntoView();
      location.href = "#";
      location.href = "#form-infor";
    }

    window.whenloaded = function(fn) {
      if (window.onload) {
        var old = window.onload;
        window.onload = function() {
          old();
          fn();
        }
      } else {
        window.onload = fn;
      }
    }
  </script>
</body>

</html>