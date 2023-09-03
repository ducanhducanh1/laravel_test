<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use \Cart;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Redirect;
use \Mail;
use App\Http\Requests\OrderRequest;
use App\Models\Accessory;

class CartController extends Controller
{
    public function getaddcart($id)
    {

        $product = Product::find($id);


        Cart::add(array(
            'id' => $id,
            'name' => $product->name,
            //'comment' => $product->comment,
            'price' => $product->price,

            'quantity' => 1,
            'attributes' => array(
                'img' => $product->img,
            ),
            'associatedModel' => $product
        ));

        // $accessory = Accessory::find($id);
        // Cart::add(array(
        //     'id' => $id,
        //     'name' => $accessory->name,
        //     //'comment' => $accessory->comment,
        //     'price' => $accessory->price,

        //     'quantity' => 1,
        //     'attributes' => array(
        //         'img' => $accessory->img,
        //     ),
        //     'associatedModel' => $accessory
        // ));
        return redirect(('cart/show'));
        // $items = Cart::getContent();
        // dd($items);
    }
    public function getshowcart()
    {
        $data['total'] = Cart::getTotal();
        $data['items'] = Cart::getContent();

        //    dd($data);
        return view('cart', $data);
    }
    public function getdeletecart($id)
    {
        if ($id == 'add') {
            Cart::clear();
        } else {
            Cart::remove($id);
        }
        return back();
    }
    // public function getupdatecart( Request $request)
    // {
    //     Cart::update($request->id,$request->quantity);
    //     // return view('cart', $data);
    // }
    public function getupdatecart($id)
    {

        Cart::update($id, [
            'quantity' => request('qty')
        ]);

        return response()->json(['success' => true]);
    }


    public function postComplete(Request $request)
    {
        //     $data['info'] =$request->only(  'name',
        //     'email',
        //     'status',
        //    'price',
        //     'phone',
        //     'address',);

        //    $data['created_at'] = now();
        //    $data['updated_at'] = now();

        //    Order::create($data);
        $order = new Order;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->payment = $request->payment;
    

        $order->save();
        $data['total'] = Cart::getTotal();
        $data['info'] = $request->all();

        $email = $request->email;
        $data['cart']= Cart::getContent();
        Mail::send('email', $data, function ($message) use ($email) {
            $message->from('nguyenducanh05012k@gmail.com', 'Ducanhpro');
            $message->to($email, $email);
            $message->cc('ducanhpro0501@gmail.com', 'anhpro');
            $message->subject('Xác nhận hóa đơn mua hàng Ducanhpro');
        });
        return redirect()->route('get.complete', $data);
       
        // return back();
    }
    public function getcomplete()
    {

        $data['items'] = Cart::getContent();
        return view('complete', $data);
    }
    public function index()
    {
        $order['orders']= Order::orderby('id','DESC')->get();
        // $order['items'] = Cart::getContent();
        return view('orders.index', $order);
    }
}
