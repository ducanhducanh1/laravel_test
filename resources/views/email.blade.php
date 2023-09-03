<form face="Arial">
    <div>
        <div></div>
        
        <h3><font color="#FF9600">Thông tin khách hàng</font></h3>
    <p>
        <strong class ="info">Khách hàng:</strong>
        {{$info['name']}}
    </p><p>
        <strong class ="info">Email:</strong>
        {{$info['email']}}
    </p>
    <p>
        <strong class ="info">Điện thoại:</strong>
        {{$info['phone']}}
    </p>
    <p>
        <strong class ="info">Địa chỉ:</strong>
        {{$info['address']}}
    </p>
    </div>
    <div>
        <h3><font color="#FF9600">Hóa đơn mua hàng</font></h3>
        <table border="1" cellspacing="0">
        <tr>
            <td><strong>Tên sản phẩm</strong></td>
            
            <td><strong>Số lượng</strong></td>
            <td><strong>Giá</strong></td>
        </tr>
        @foreach($cart as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}}VNĐ</td>
        </tr>
        @endforeach
        <tr>
            <td>Tổng tiền</td>
            <td colspan="2" align="right">{{$total}}đ</td>
        </tr>
        </table>
    </div>
</form>