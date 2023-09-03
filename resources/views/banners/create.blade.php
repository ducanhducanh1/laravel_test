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
  <form method="POST" action="{{ route('banner.store') }}" class=" col-9 bg-light" enctype="multipart/form-data">
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

            <h3 class="text-white mb-4 text-center">Thêm hình ảnh</h3>

            <div class="card" style="border-radius: 15px;">
              <div class="card-body">


                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Banner 1</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input class="form-control form-control-lg" name="img" id="formFileLg" type="file" />


                  </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">banner 2</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input class="form-control form-control-lg" name="img1" id="formFileLg" type="file" />


                  </div>
                </div>

                <hr class="mx-n3">
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">banner 3</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input class="form-control form-control-lg" name="img2" id="formFileLg" type="file" />


                  </div>
                </div>

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
        confirm("Bạn có chắc muốn thêm hình ảnh này không?")
    }
  </script>

</body>

</html>
@endsection