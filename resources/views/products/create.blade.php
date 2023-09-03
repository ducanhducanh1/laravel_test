@extends('home')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- <style>
    form {
      margin: 50px !important;
    }
  </style> -->
</head>

<body>
  <form method="POST" action="{{ route('product.store') }}" class=" col-9 bg-light" enctype="multipart/form-data">
    @csrf
    @if($errors = session()->get('errors'))
    <ul>
      @foreach($errors->messages() as $error)
      <li>{{ $error[0] }}</li>
      @endforeach
    </ul>
    @endif
    <section class="vh-50 bg-secondary">
      <div class="container h-50">
        <div class="row d-flex justify-content-center align-items-center h-10">
          <div class="col-xl-15">

            <h3 class="text-white mb-4 text-center">Thêm sản phẩm</h3>

            <div class="card" style="border-radius: 15px;">
              <div class="card-body">

                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Tên sản phẩm</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" name="name" class="form-control form-control-lg" />

                  </div>
                </div>

                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Giá sản phẩm</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" name="price" class="form-control form-control-lg" id="price" />

                  </div>
                </div>

                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Sản phẩm</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" name="size" class="form-control form-control-lg" id="size" />

                  </div>
                </div>

                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Nội dung</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" name="content" class="form-control form-control-lg" id="size" />

                  </div>
                </div>

                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Giá gốc</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" name="sale" class="form-control form-control-lg" id="size" />

                  </div>
                </div>

                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Bình luận</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" name="comment" class="form-control form-control-lg" id="size" />

                  </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-2">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Mô tả</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <textarea name="depscription" class="form-control ckeditor" id="editor"></textarea>
                    

                  </div>
                </div>


                <hr class="mx-n3">

                <div class="row align-items-center d-inline-flex py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Danh mục sản phẩm</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <select name="category_id" class="">
                      @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Thương hiệu</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <select name="brand_id" class="">
                      @foreach($brands as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                      @endforeach
                    </select>


                  </div>


                </div>
                <hr class="mx-n3">
                <div class="row align-items-center py-2">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">File ảnh đại diện</h6>

                </div>
                <div class="col-md-9 pe-5">

                  <input class="form-control form-control-lg" name="img" id="file" type="file" />


                </div>
              </div>

              <hr class="mx-n3">
              <div class="row align-items-center py-2">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">Đang sale</h6>

                </div>
                <div class="col-md-9 pe-5">

                  <input class="form-control form-control-lg" name="image" id="image" type="text" />


                </div>
              </div>

              <hr class="mx-n3">

              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">Trạng thái</h6>

                </div>
                <div class="col-md-9 pe-5">

                  <select name="status" id="status" class="form-control">
                    <option value="0">Còn hàng</option>
                    <option value="1">Hết hàng</option>
                  </select>

                </div>
              </div>

              <hr class="mx-n3">

              <div class="px-5 py-4 text-center">
                <button type="submit" onclick="more()" class="btn btn-primary btn-lg ">Thêm ngay</button>
              </div>

            </div>
          </div>

        </div>
      </div>
      </div>
    </section>
  </form>
  <script>
function more(){
        confirm("Bạn có chắc muốn thêm sản phẩm này không?")
    }
  </script>
  

</body>

</html>
@endsection