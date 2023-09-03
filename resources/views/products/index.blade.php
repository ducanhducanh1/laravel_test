@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<body>
<div class="col-12">
    <div class="col-md-12 ">
        <div class="card border border-info">
            <div class="card-header bg-info">
                <h4 class="card-title text-center">Danh sách sản phẩm</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Giá gốc</th>
                            <th scope="col">Bình luận</th>
                            <th scope="col">Hình ảnh đại diện</th>
                            <th scope="col">Sale còn</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Thương hiệu</th>
                            <th scope="col">Hành động</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->content }}</td>
                            <td>{{ $product->sale }}</td>
                            <td>{{ $product->comment }}</td>
                            <td>
                                <img class="editor" src="{{ asset($product->img) }}" alt="" style="width:100px">
                            
                            </td>
                            <td>       
                            {{ $product->image }}
                            </td>
                            <td class="ckeditor">{!! $product->depscription !!}</td>
                            <!-- <td>{!!
                                  $product->status == 1 ?
                                 '<span class="badge badge-primary">Còn hàng</span>' :
                                 '<span class="badge badge-danger">Hết hàng</span>'
                                !!} 
                            </td> -->
                          
                            <td>{{$product->status == 0 ?
                                'Còn hàng' : 
                                'Hết hàng'
                            }}</td>
                           
                            <td>{{ $product->category?->name }}</td> 
                            <td>{{ $product->brand->name }}</td> 
                            <td>
                                <a href="{{ route('product.edit', $product)}}" class="btn btn-warning">
                                <i class="fa-regular fa-highlighter"></i>
                                    Sửa
                                </a>
                                <form action="{{ route('product.destroy', $product) }}" method="POST">
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
                {{$products->links('pagination.custom')}}
            </div>
            
        </div>
    </div>
<script>
    function remove(){
        confirm("Bạn có chắc muốn xóa sản phẩm này không?")
    }
</script>
</body>
</html>



    @endsection