<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use \DB;
use App\Http\Requests\BlogUploadRequest;
use \Str;

use App\Http\Requests\BlogStoreRequest;
class BlogController extends Controller
{
    public function index()
    {
        if($blogs = Blog::orderBy('id', 'DESC')->paginate(3));
        // $abc = [];
        //compact('blog', 'abc')
        return view('blogs.index', compact('blogs'));
    }
    public function create()
    {
         #hien thi cho người dùng
         return view ('blogs.create');
    }
    
    public function store(BlogStoreRequest $request)
    {
       
         $blog =$request->only('name', 'content','comment','depscription');
         //dd($blog);
        $slug = Str::slug($request->name);
        $blog['slug'] = $slug;
        $blog['created_at'] = now();
        $blog['updated_at'] = now();

        $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
        //lưu trữ vào storage
        
        $request->file('img')->storeAs('public/blog', $filename);
        // tạo đường dẫn lưu vào db
        $imgPath = 'storage/blog/'.$filename;
        $blog['img'] = $imgPath;
       

        
        // Category::create($category);
        // return redirect()->route('category.index');
        if(Blog::create($blog)){
            return redirect()->route('blog.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('blog.index')->with('error', 'Thêm thất bại');
    }
   
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }
    public function update(BlogUploadRequest $request, Blog $blog){
        $Data =$request->only('name','content','comment', 'depscription');
        $Data['slug'] = Str::slug($blog['name']);
        if($request->img){

            $filename = $request->name . rand(1,1000) . time() . '.'. $request->file('img')->extension();
           
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/blog', $filename);
       
        // tạo đường dẫn lưu vào db
        
        $imgPath = 'storage/blog/'.$filename;
        //unlink("storage/blog/".$filename);
        $Data['img'] = $imgPath;
        
        }
        $Data['updated_at'] = now();
        if($blog->update($Data)){
            return redirect()->route('blog.index')->with('success', 'Sửa thành công');
        }
           return redirect()->back()->with('error', 'Sửa thất bại');;
    }
    public function destroy(Blog $blog)
    {
        if($blog->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
    }
    
}
