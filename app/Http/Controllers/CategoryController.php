<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use \DB;
use App\Http\Requests\CategoryUpdateRequest;
use \Str;

use App\Http\Requests\CategoryStoreRequest;
class CategoryController extends Controller
{
    public function index()
    {
        
        if($categories = Category::orderBy('id', 'DESC')->paginate(3));
        // $abc = [];
        //compact('category', 'abc')
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
         #hien thi cho người dùng
         return view ('categories.create');
    }
    
    public function store(CategoryStoreRequest $request)
    {
       
         $category =$request->only('name', 'depscription');
         //dd($category);
        $slug = Str::slug($request->name);
        $category['slug'] = $slug;
        $category['created_at'] = now();
        $category['updated_at'] = now();

        $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
        //lưu trữ vào storage
        
        $request->file('img')->storeAs('public/category', $filename);
        // tạo đường dẫn lưu vào db
        $imgPath = 'storage/category/'.$filename;
        $category['img'] = $imgPath;
       

        
        // Category::create($category);
        // return redirect()->route('category.index');
        if(Category::create($category)){
            return redirect()->route('category.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('category.index')->with('error', 'Thêm thất bại');
    }
   
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }
    public function update(CategoryUpdateRequest $request, Category $category){
        $Data =$request->only('name', 'img', 'depscription');
        $Data['slug'] = Str::slug($category['name']);
        if($request->img){

            $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
           
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/category', $filename);
       
        // tạo đường dẫn lưu vào db
        
        $imgPath = 'storage/category/'.$filename;
        //unlink("storage/category/".$filename);
        $Data['img'] = $imgPath;
        
        }
        $Data['updated_at'] = now();
        if($category->update($Data)){
            return redirect()->route('category.index')->with('success', 'Sửa thành công');
        }
           return redirect()->back()->with('error', 'Sửa thất bại');;
    }
    public function destroy(Category $category)
    {
        if($category->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
    }
   
}
