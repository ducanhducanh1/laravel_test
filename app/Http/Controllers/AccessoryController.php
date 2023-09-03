<?php

namespace App\Http\Controllers;
use App\Models\Accessory;
use App\Models\Brand;
use App\Models\Item;
use Illuminate\Http\Request;
use \DB;
use App\Http\Requests\AccessoryUpdateRequest;
use \Str;

use App\Http\Requests\AccessoryStoreRequest;
class AccessoryController extends Controller
{
    public function index()
    {
        if($accessories = Accessory::orderBy('id', 'DESC')->paginate(4));;
        // $abc = [];
        //compact('category', 'abc')
        return view('accessories.index', compact('accessories'));
    }
    public function create()
    {
         #hien thi cho người dùng
         $its = Item::all();
         $brands = Brand::all();
        return view('accessories.create', compact('brands', 'its'));
    
    }
    
    public function store(AccessoryStoreRequest $request)
    {
       
         $accessory =$request->only('name', 'status','content','price','brand_id','item_id', 'depscription');
         $slug = Str::slug($request->name);
         $accessory['slug'] = $slug;
         $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
         //lưu trữ vào storage
         
         $request->file('img')->storeAs('public/accessory', $filename);
         // tạo đường dẫn lưu vào db
         $imgPath = 'storage/accessory/'.$filename;
         $accessory['img'] = $imgPath;
         if(Accessory::create($accessory)){
            return redirect()->route('accessory.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('accessory.index')->with('error', 'Thêm thất bại');
    }
   
    public function edit(Accessory $accessory)
    {
        return view('accessories.edit', compact('accessory'));
    }
    public function update(AccessoryUpdateRequest $request, Accessory $accessory){
        $Data =$request->only('name','status', 'depscription','content','price');
        $Data['slug'] = Str::slug($accessory['name']);
        if($request->img){;

            $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
           
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/accessory', $filename);
       
        // tạo đường dẫn lưu vào db
        
        $imgPath = 'storage/accessory/'.$filename;
       
        $Data['img'] = $imgPath;
    }
        $Data['updated_at'] = now();
        if($accessory->update($Data)){
            return redirect()->route('accessory.index')->with('success', 'Sửa thành công');
        }
           return redirect()->back()->with('error', 'Sửa thất bại');;
    }
    public function destroy(Accessory $accessory)
    {
        if($accessory->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
        }
}
