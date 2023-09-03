<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use Illuminate\Http\Request;
use \DB;
use App\Http\Requests\BannerUploadRequest;
use \Str;

use App\Http\Requests\BannerStoreRequest;

class BannerController extends Controller
{
    public function index()
    {
        if($banners = Banner::orderBy('id', 'DESC')->paginate(4));;
        // $abc = [];
        //compact('category', 'abc')
        return view('banners.index', compact('banners'));
    }
    public function create()
    {
         #hien thi cho người dùng
       
        return view('banners.create');
    
    }
    
    public function store(BannerStoreRequest $request)
    {
       
         $banner =$request->all();
        
         $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
         $filename1 = $request->name . rand(1,1000) . time() . '.'. $request->file( 'img1')->extension();
         $filename2 = $request->name . rand(1,1000) . time() . '.'. $request->file( 'img2')->extension();
         //lưu trữ vào storage
         
         $request->file('img')->storeAs('public/banner', $filename);
         $request->file( 'img1')->storeAs('public/banner', $filename1);
         $request->file( 'img2')->storeAs('public/banner', $filename2);
         // tạo đường dẫn lưu vào db
         $imgPath = 'storage/banner/'.$filename;
         $imgPath1 = 'storage/banner/'.$filename1;
         $imgPath2 = 'storage/banner/'.$filename2;
         $banner['img'] = $imgPath;
         $banner['img1'] = $imgPath1;
         $banner['img2'] = $imgPath2;
         if(Banner::create($banner)){
            return redirect()->route('banner.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('banner.index')->with('error', 'Thêm thất bại');
    }
   
    public function edit(Banner $banner)
    {
        return view('banners.edit', compact('banner'));
    }
    public function update(BannerUploadRequest $request, Banner $banner){
        $Data =$request->all();
      
        if($request->only('img','img1','img2')){;

            $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
            $filename1 = $request->name . rand(1,1000) . time() . '.'. $request->file( 'img1')->extension();
            $filename2 = $request->name . rand(1,1000) . time() . '.'. $request->file( 'img2')->extension();
            //lưu trữ vào storage
            
            $request->file('img')->storeAs('public/banner', $filename);
            $request->file( 'img1')->storeAs('public/banner', $filename1);
            $request->file( 'img2')->storeAs('public/banner', $filename2);
            // tạo đường dẫn lưu vào db
            $imgPath = 'storage/banner/'.$filename;
            $imgPath1 = 'storage/banner/'.$filename1;
            $imgPath2 = 'storage/banner/'.$filename2;
            $Data['img'] = $imgPath;
            $Data['img1'] = $imgPath1;
            $Data['img2'] = $imgPath2;
    }
        $Data['updated_at'] = now();
        if($banner->update($Data)){
            return redirect()->route('banner.index')->with('success', 'Sửa thành công');
        }
           return redirect()->back()->with('error', 'Sửa thất bại');;
    }
    public function destroy(Banner $banner)
    {
        if($banner->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
        }
}
