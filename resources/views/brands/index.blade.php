@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thương hiệu</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-9 ">
        <div class="card border border-info">
            <div class="card-header bg-info">
                <h4 class="card-title text-center">Danh sách thương hiệu</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $key => $brand)
                        <tr>
                            <th scope="row">{{ $brand->id }}</th>
                            <td>{{ $brand->name }}</td>
                            <td>{!! $brand->depscription !!}</td>
                            <td>
                                <img src="{{ asset($brand->img) }}" alt="" style="width:100px">
                            
                            </td>
                            <td>{{$brand->status == 0? 'Hiển thị' : 'Không hiển thị'}}</td>
                           
                            <td>
                                <a href="{{ route('brand.edit', $brand)}}" class="btn btn-warning">
                                <i class="fa-regular fa-highlighter"></i>
                                    Sửa
                                </a>
                                <form action="{{ route('brand.destroy', $brand) }}" method="POST">
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
                {{$brands->links('pagination.custom')}}
            </div>
            
        </div>
    </div>

    <script>
    function remove(){
        confirm("Bạn có chắc muốn xóa không?")
    }
</script>
</body>
</html>


    @endsection