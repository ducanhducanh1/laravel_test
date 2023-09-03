@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-9 ">
        <div class="card border border-danger">
            <div class="card-header bg-danger">
                <h4 class="card-title text-center">Danh sách bình luận</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Trạng thái</th>
                            <!-- <th scope="col">Hành động</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $key => $comment)
                        <tr>
                            <th scope="row">{{ $comment->id }}</th>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->content }}</td>
                            <td>{{ $comment->product_id }}</td>
                            <!-- <td>{{ $comment->status }}</td> -->
                            <td>
                                
                                <form action="{{ route('comment.destroy', $comment) }}" method="POST">
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
                {{$comments->links('pagination.custom')}}
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