@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách banner</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-9 ">
        <div class="card border border-info">
            <div class="card-header bg-info">
                <h4 class="card-title text-center">Danh sách hình ảnh</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Banner 1</th>
                            <th scope="col">Banner 2</th>
                            <th scope="col">Banner 3</th>
                            <th scope="col">Hành động</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($banners as $key => $banner)
                        <tr>
                            <th scope="row">{{ $banner->id }}</th>
                           
                            <td>
                                <img src="{{ asset($banner->img) }}" alt="" style="width:100px">
                            
                            </td>
                            <td>
                                <img src="{{ asset($banner->img1) }}" alt="" style="width:100px">
                            
                            </td>
                            <td>
                                <img src="{{ asset($banner->img2) }}" alt="" style="width:100px">
                            
                            </td>
                           <td>
                                <a href="{{ route('banner.edit', $banner)}}" class="btn btn-warning">
                                <i class="fa-regular fa-highlighter"></i>
                                    Sửa
                                </a>
                                <form action="{{ route('banner.destroy', $banner) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class= "btn btn-danger" onclick="remove()"  type="submit">
                                    <i class = "fa fa-trash"></i>
                                    Xoá
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer clearfix">
                {{$banners->links('pagination.custom')}}
            </div>
            
        </div>
    </div>
    <script>
    function remove(){
        confirm("Bạn có chắc muốn xóa banner này không?")
    }
</script>
</body>
</html>



    @endsection