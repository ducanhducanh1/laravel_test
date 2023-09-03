@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-12 ">
        <div class="card border border-info">
            <div class="card-header bg-info">
                <h4 class="card-title text-center">Danh sách tin tức</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Bình luận</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Hành động</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $key => $blog)
                        <tr>
                            <th scope="row">{{ $blog->id }}</th>
                            <td>{{ $blog->name }}</td>
                            <td>{{ $blog->comment }}</td>
                            <td >{{$blog->content }}</td>
                            <td >{!!$blog->depscription!!}</td>
                            <td>
                                <img  src="{{ asset($blog->img) }}" alt="" style="width:100px">
                            
                            </td>
                            <td>{{ $blog->created_at }}</td>
                            <td>
                                <a href="{{ route('blog.edit', $blog)}}" class="btn btn-warning">
                                <i class="fa-regular fa-highlighter"></i>
                                    Sửa
                                </a>
                                <form action="{{ route('blog.destroy', $blog) }}" method="POST">
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
                {{$blogs->links('pagination.custom')}}
            </div>
            
        </div>
    </div>

    <script>
    function remove(){
        confirm("Bạn có chắc muốn xóa tin tức này không?")
    }
</script>

</body>
</html>

    @endsection