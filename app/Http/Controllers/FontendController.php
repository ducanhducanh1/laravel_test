<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
// use App\Http\Requests\CommentStoreRequest;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Item;
use \Cart;
use App\Models\Category;

use App\Models\Accessory;
use App\Models\Comment;
class FontendController extends Controller
{
    public function getmaster(){
        $data['blog1'] = Blog::orderBy('id', 'DESC')->take(4)->get();
        $data['banners'] = Banner::orderBy('id', 'DESC')->get();
        $data['total'] = Cart::getTotal();
        $data['items'] = Cart::getContent();
        $data['products'] = Product::where('status', '0')->orderBy('id', 'ASC')->take(8)->get();
        $data['brands'] = Brand::where('status', '0')->orderBy('id', 'DESC')->get();
        $data['accessories'] = Accessory::where('status', '0')->orderBy('id', 'DESC')->get();
        $data['its'] = Item::where('status', '0')->orderBy('id', 'DESC')->get();
        $data['products1'] = Product::where('id' ,'>=', '10')->take(8)->get();
        $data['products2'] = Product::where('id' ,'>=', '18')->take(8)->get();
        $data['products3'] = Product::where('size' , 'SALE')->orderBy('id', 'DESC')->take(8)->get();
        return view('master', $data);

    }

    public function getdetail($id){
        $data['products1'] = Product::where('id' ,'>=', '16')->take(5)->get();
        $data['product'] = Product::find($id);
        $data['comments']= Comment::where('product_id', $id)->orderby('id', 'DESC')->paginate(3);
        return view('detail',$data);
}
public function postdetail(Request $request, $id){
// $comment = $request->only('name', 'email', 'content', 'product_id');
// $comment['created_at'] = now();
// $comment['updated_at'] = now();
// Comment::create($comment);
// return redirect()->route('get.detail');
$comment = new Comment;
$comment->name = $request->name;

$comment->content = $request->content;
$comment->product_id = $id;

$comment->save();
return back();
}
public function index(){
    $comments = Comment::orderBy('id', 'DESC')->paginate(10);
    // $abc = [];
    // $products = Product::all();
    return view('comments.index', compact('comments'));
}
public function destroy(Comment $comment)
{
    if($comment->delete()){
        return redirect()->back()->with('success', 'xóa thành công');
       }
       return redirect()->back()->with('error', 'xóa thất bại');
}  



public function getcategory($id){
    // dd();
    $data['products1'] = Product::where('category_id' , $id);

    if(request('brand')) {
       // $data['products1'] = $data['products1']->whereIn('brand_id', [request('brand')])->get();
       $data['products1'] = $data['products1']->where('brand_id', '=', request('brand'));
    }
    $data['products1'] = $data['products1']->orderBy('id', 'DESC')->paginate(6);


    if(isset(request()->sort)){
        $sort = request()->sort;
        if($sort == 'giamdan'){
            $data['products1'] = Product::with('category')->where('category_id' , $id)->orderBy('price', 'DESC')->paginate(6);
        }elseif($sort == 'tangdan'){
            $data['products1'] = Product::with('category')->where('category_id' , $id)->orderBy('price', 'ASC')->paginate(6);
        }elseif($sort == 'a-z'){
        $data['products1'] = Product::with('category')->where('category_id' , $id)->orderBy('name', 'ASC')->paginate(6);
        }
    }else{
        $data['products1'] = Product::with('category')->where('category_id' , $id)->orderBy('name', 'DESC')->paginate(6);
    }
    $data['categories1'] = Category::find($id);
    $data['brands'] = Brand::where('status', '0')->orderBy('id', 'ASC')->get();
    return view('category',$data);
}
public function getbrand($id){
    $data['products1']= Product::where('brand_id' , $id);
    if(request('category')) {
        // $data['products1'] = $data['products1']->whereIn('brand_id', [request('brand')])->get();
        $data['products1'] =  $data['products1']->where('category_id', '=', request('category'));
     }
     $data['products1']=   $data['products1']->orderBy('id', 'DESC')->paginate(5);
   
    //$data['products1'] = Product::where('brand_id' , $id)->orderBy('id', 'DESC')->paginate(5);
    $data['brand1'] = Brand::find($id);
    if(isset(request()->sort)){
        $sort = request()->sort;
        if($sort == 'giamdan'){
            $data['products1'] = Product::with('brand')->where('brand_id' , $id)->orderBy('price', 'DESC')->paginate(5);
        }elseif($sort == 'tangdan'){
            $data['products1'] = Product::with('brand')->where('brand_id' , $id)->orderBy('price', 'ASC')->paginate(5);
        }elseif($sort == 'a-z'){
        $data['products1'] = Product::with('brand')->where('brand_id' , $id)->orderBy('name', 'ASC')->paginate(5);
        }
    }else{
        $data['products1'] = Product::with('brand')->where('brand_id' , $id)->orderBy('name', 'DESC')->paginate(5);
    }
    return view('brand',$data);
}
public function getsearch(Request $request){
    $result = $request->result;
    $data['keyword'] = $result;
    $result = str_replace('','%',$result);
    $data['items1'] = Product::where('name', 'like','%'.$result.'%')->get();
    $data['accessories'] = Accessory::where('name', 'like','%'.$result.'%')->get();
    return view('search', $data);
}


public function getblog(){
    $data['blogs'] = Blog::where('id' ,'>=', '1')->take(12)->get();

    // $data['product'] = Product::find($id);
    return view('blog', $data);
}
public function getBlogFootball($id){
    $data['blogs'] = Blog::where('id' ,'>=', '3')->take(2)->get();
    $data['blog1'] = Blog::orderBy('id', 'DESC')->take(2)->get();
     $data['blog'] = Blog::find($id);
    return view('blogfootball', $data);
}
public function getitem($id){
    $data['accessories'] = Accessory::where('item_id' , $id);

    if(request('brand')) {
        // $data['products1'] = $data['products1']->whereIn('brand_id', [request('brand')])->get();
        $data['accessories'] =  $data['accessories']->where('brand_id', '=', request('brand'));
     }
     $data['accessories']=   $data['accessories']->orderBy('id', 'DESC')->paginate(4);

    $data['brands'] = Brand::where('status', '0')->orderBy('id', 'DESC')->get();
   // $data['its'] = Item::where('status', '0')->orderBy('id', 'DESC')->get();
    $data['item2'] = Item::find($id);
    if(isset(request()->sort)){
        $sort = request()->sort;
        if($sort == 'giamdan'){
            $data['accessories'] = Accessory::with('item')->where('item_id' , $id)->orderBy('price', 'DESC')->paginate(4);
        }elseif($sort == 'tangdan'){
            $data['accessories'] = Accessory::with('item')->where('item_id' , $id)->orderBy('price', 'ASC')->paginate(4);
        }elseif($sort == 'a-z'){
        $data['accessories'] = Accessory::with('item')->where('item_id' , $id)->orderBy('name', 'ASC')->paginate(4);
        }
    }else{
        $data['accessories'] = Accessory::with('item')->where('item_id' , $id)->orderBy('name', 'DESC')->paginate(4);
    }
    return view('item',$data);
}
public function getaccessory($id){
    $data['accessory1'] = Accessory::where('id' ,'>=', '1')->take(5)->get();
    $data['accessory2'] = Accessory::find($id);
    return view('accessory',$data);
}

public function getcontact(){
    return view ('contact');
}
}