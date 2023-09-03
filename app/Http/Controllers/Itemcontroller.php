<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use \DB;
use App\Http\Requests\ItemUploadRequest;
use \Str;

use App\Http\Requests\ItemStoreRequest;
class ItemController extends Controller
{
    public function index()
    {
        if($items = Item::orderBy('id', 'DESC')->paginate(3));
        // $abc = [];
        //compact('Item', 'abc')
        return view('items.index', compact('items'));
    }
    public function create()
    {
         #hien thi cho người dùng
         return view ('items.create');
    }
    
    public function store(ItemStoreRequest $request)
    {
       
         $item =$request->only('name','status');
         //dd($item);
        $slug = Str::slug($request->name);
        $item['slug'] = $slug;
        $item['created_at'] = now();
        $item['updated_at'] = now();

        $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
        //lưu trữ vào storage
        
        $request->file('img')->storeAs('public/item', $filename);
        // tạo đường dẫn lưu vào db
        $imgPath = 'storage/item/'.$filename;
        $item['img'] = $imgPath;
       

        
        // Item::create($Item);
        // return redirect()->route('Item.index');
        if(Item::create($item)){
            return redirect()->route('item.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('item.index')->with('error', 'Thêm thất bại');
    }
   
    public function edit(Item $item)
    {
        return view('items.edit', compact('Item'));
    }
    public function update(ItemUploadRequest $request, Item $item){
        $Data =$request->only('name','status');
        $Data['slug'] = Str::slug($item['name']);
        if($request->img){

            $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
           
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/item', $filename);
       
        // tạo đường dẫn lưu vào db
        
        $imgPath = 'storage/item/'.$filename;
        //unlink("storage/Item/".$filename);
        $Data['img'] = $imgPath;
        
        }
        $Data['updated_at'] = now();
        if($item->update($Data)){
            return redirect()->route('item.index')->with('success', 'Sửa thành công');
        }
           return redirect()->back()->with('error', 'Sửa thất bại');;
    }
    public function destroy(Item $item)
    {
        if($item->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
    }
    public function  abc(){

    }
}
