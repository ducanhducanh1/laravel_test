<?php

namespace App\Http\Controllers;
use App\Models\Brand;

use Illuminate\Http\Request;
use \DB;
use App\Http\Requests\BrandUpdateRequest;
use \Str;

use App\Http\Requests\BrandStoreRequest;
class BrandController extends Controller
{
    public function index()
    {
        if($brands = Brand::orderBy('id', 'DESC')->paginate(4));;
        // $abc = [];
        //compact('category', 'abc')
        return view('brands.index', compact('brands'));
    }
    public function create()
    {
         #hien thi cho người dùng
         //$brands = Brand::all();
        return view('brands.create');
    
    }
    
    public function store(BrandStoreRequest $request)
    {
       
         $brand =$request->only('name', 'status', 'depscription');
         $slug = Str::slug($request->name);
         $brand['slug'] = $slug;
         $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
         //lưu trữ vào storage
         
         $request->file('img')->storeAs('public/brand', $filename);
         // tạo đường dẫn lưu vào db
         $imgPath = 'storage/brand/'.$filename;
         $brand['img'] = $imgPath;
         if(Brand::create($brand)){
            return redirect()->route('brand.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('brand.index')->with('error', 'Thêm thất bại');
    }
   
    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }
    public function update(BrandUpdateRequest $request, Brand $brand){
        $Data =$request->only('name','status', 'depscription');
        $Data['slug'] = Str::slug($brand['name']);
        if($request->img){;

            $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
           
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/brand', $filename);
       
        // tạo đường dẫn lưu vào db
        
        $imgPath = 'storage/brand/'.$filename;
       
        $Data['img'] = $imgPath;
    }
        $Data['updated_at'] = now();
        if($brand->update($Data)){
            return redirect()->route('brand.index')->with('success', 'Sửa thành công');
        }
           return redirect()->back()->with('error', 'Sửa thất bại');;
    }
    public function destroy(Brand $brand)
    {
        if($brand->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
        }
}
