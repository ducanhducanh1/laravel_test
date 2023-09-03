@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phụ kiện</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-12 ">
        <div class="card border border-info">
            <div class="card-header bg-info">
                <h4 class="card-title text-center">Danh sách phụ kiện</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Nội dung</th>
                           
                            <th scope="col">Hình ảnh </th>
                            
                            <th scope="col">Mô tả</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thương hiệu</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Hành động</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($accessories as $key => $accessory)
                        <tr>
                            <th scope="row">{{ $accessory->id }}</th>
                            <td>{{ $accessory->name }}</td>
                            <td>{{ $accessory->price }}</td>
                           
                            <td>{{ $accessory->content }}</td>
                            <td>
                                <img class="editor" src="{{ asset($accessory->img) }}" alt="" style="width:80px">
                            
                            </td>
                            <td>{!!$accessory->depscription!!}</td>
                           
                            <td>{{$accessory->status == 0 ? 'Còn hàng' : 'Hết hàng'}}</td>
                        
                            <td>{{ $accessory->brand->name }}</td> 
                            <td>{{ $accessory->item?->name }}</td> 
                            <td>
                                <a href="{{ route('accessory.edit', $accessory)}}" class="btn btn-warning">
                                <i class="fa-regular fa-highlighter"></i>
                                    Sửa
                                </a>
                                <form action="{{ route('accessory.destroy', $accessory) }}" method="POST">
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
                {{$accessories->links('pagination.custom')}}
            </div>
            
        </div>
    </div>

    <script>
    function remove(){
        confirm("Bạn có chắc muốn xóa phụ kiện này không?")
    }
</script>
</body>
</html>


    @endsection