@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục phụ kiện</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-9 ">
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
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $key => $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                           
                            <td>
                                <img src="{{ asset($item->img) }}" alt="" style="width:100px">
                            
                            </td>
                            <td>{{$item->status == 0? 'Hiển thị' : 'Không hiển thị'}}</td>
                           
                            <td>
                                <a href="{{ route('item.edit', $item)}}" class="btn btn-warning">
                                <i class="fa-regular fa-highlighter"></i>
                                    Sửa
                                </a>
                                <form action="{{ route('item.destroy', $item) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class= "btn btn-danger" onclick="remove()" type="submit">
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
                {{$items->links('pagination.custom')}}
            </div>
            
        </div>
    </div>


<script>
    function remove(){
        confirm("Bạn có chắc muốn xóa danh mục này không?")
    }
</script>
</body>
</html>


    @endsection