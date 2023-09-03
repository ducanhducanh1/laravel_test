<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use \DB;
use App\Http\Requests\ProductUpdateRequest;
use \Str;

use App\Http\Requests\ProductStoreRequest;
class ProductController extends Controller
{
    public function index()
    {
        if($products = Product::orderBy('id', 'DESC')->paginate(4));;
        // $abc = [];
        //compact('category', 'abc')
        return view('products.index', compact('products'));
    }
    public function create()
    {
         #hien thi cho người dùng
         $brands = brand::all();
         $categories = Category::all();
        return view('products.create', compact('categories', 'brands'));
    
    }
    
    public function store(ProductStoreRequest $request)
    {
       
         $product =$request->only('name', 'status', 'depscription','comment','image','size','sale','content', 'category_id', 'brand_id', 'price');
         $slug = Str::slug($request->name);
         $product['slug'] = $slug;
         $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
         //lưu trữ vào storage
         
         $request->file('img')->storeAs('public/product', $filename);
      
         // tạo đường dẫn lưu vào db
         $imgPath = 'storage/product/'.$filename;
         $product['img'] = $imgPath;
        
         if(Product::create($product)){
            return redirect()->route('product.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('product.index')->with('error', 'Thêm thất bại');
    }
   
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function update(ProductUpdateRequest $request, Product $product){
        $Data =$request->only('name', 'status','sale','comment','image','content', 'depscription','size', 'price');
        $Data['slug'] = Str::slug($product['name']);
        if($request->img){;

            $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
           
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/product', $filename);
       
       
       
        // tạo đường dẫn lưu vào db
        
        $imgPath = 'storage/product/'.$filename;
       
        $Data['img'] = $imgPath;
        } ; 
        
        $Data['updated_at'] = now();
        if($product->update($Data)){
            return redirect()->route('product.index')->with('success', 'Sửa thành công');
        }
           return redirect()->back()->with('error', 'Sửa thất bại');;
    }
    public function destroy(Product $product)
    {
        if($product->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
        }
}
