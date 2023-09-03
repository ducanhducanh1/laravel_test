@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách hàng</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-12 ">
        <div class="card border border-info">
            <div class="card-header bg-info">
                <h4 class="card-title text-center">Danh sách khách hàng</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mật khẩu</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                           
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->phone }}</td>
                            <td>
                            {{ $user->email}}
                            </td>
                            <td>
                            {{ $user->password}}
                            </td>
                            <td>
                            {{ $user->created_at}}
                            </td>
                            
                           <td>
                                
                                <form action="{{ route('user.destroy', $user) }}" method="POST">
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
                {{$users->links('pagination.custom')}}
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