@extends('home')

@section('content')
<div class="col-12">
    <div class="col-md-12 ">
        <div class="card border border-info">
            <div class="card-header bg-info">
                <h4 class="card-title text-center">Danh sách đơn hàng</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên KH</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Ngày đặt</th>
                            <th scope="col">PT Thanh toán</th>
                            <th scope="col">Trạng thái</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                        
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->payment == 0 ?
                                'Thanh toán khi nhận hàng' : 
                                'Thanh toán bằng VNpay'
                            }}</td>
                            <td>
                                <div class="col-md-9 pe-5">

                                    <select name="status" id="status" class="form-control">
                                        <option value="0">Đang xử lí</option>
                                        <option value="1">Đã xử lí</option>
                                        <option value="2">Đang giao hàng</option>
                                        <option value="3">Giao hàng thất bại</option>
                                        <option value="4">Đã giao hàng</option>
                                    </select>

                                </div>
                            </td>

                           
                        </tr>
                       @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer clearfix">
              
            </div>

        </div>
    </div>



    @endsection