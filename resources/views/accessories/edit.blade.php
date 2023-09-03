@extends('home')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa phụ kiện</title>
   
</head>
<body>

<form  method="POST" action="{{ route('accessory.update', $accessory) }}" class= " col-9 bg-light" 
enctype="multipart/form-data">
@csrf
    @method('PUT') 
    <section class="vh-50 bg-secondary">
      <div class="container h-50">
        <div class="row d-flex justify-content-center align-items-center h-10">
          <div class="col-xl-15">

            <h3 class="text-white mb-4 text-center">Sửa phụ kiện</h3>

            <div class="card" style="border-radius: 15px;">
              <div class="card-body">

                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Tên phụ kiện</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" name="name" class="form-control form-control-lg" value="{{ $accessory->name}}" />

                  </div>
                </div>
                <hr class="mx-n3">
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Giá</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input class="form-control form-control-lg" name="price" id="formFileLg" value="{{ $accessory->price}}" />


                  </div>
                </div>
                <hr class="mx-n3">
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Nội dung</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input class="form-control form-control-lg" name="content" id="formFileLg" type="text" value="{{ $accessory->content}}"/>


                  </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Mô tả</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <textarea name="depscription" class="form-control ckeditor" id="editor">{!!$accessory->depscription!!}</textarea>

                  </div>
                </div>

                
                <hr class="mx-n3">
                
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">File ảnh</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input class="form-control form-control-lg" name="img" id="formFileLg" type="file" />


                  </div>
                </div>

                <hr class="mx-n3">


                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Trạng thái</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                  <select name="status" id="status" class="form-control">
                        <option value="0" {{ $accessory->status == 0 ? 'selected' : ''}}>Hiển thị</option>
                        <option value="1" {{ $accessory->status == 1 ? 'selected' : ''}}>Không hiển thị</option>
                    </select>

                  </div>
                </div>

                <hr class="mx-n3">

                <div class="px-5 py-4 text-center">
                  <button type="submit" class="btn btn-primary btn-lg ">Sửa ngay</button>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </form>
   
</body>
</html>
@endsection