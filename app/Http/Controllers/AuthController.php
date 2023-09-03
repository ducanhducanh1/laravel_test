<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Admin;
use \Hash;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use \Auth;

class AuthController extends Controller
{
    public function destroy(User $user)
    {
        if($user->delete()){
            return redirect()->back()->with('success', 'xóa thành công');
           }
           return redirect()->back()->with('error', 'xóa thất bại');
    }
    public function index()
    {
        
        if($users = User::orderBy('id', 'DESC')->paginate(3));
        // $abc = [];
        //compact('category', 'abc')
        return view('dashboard.index', compact('users'));
    }
    public function getRegister(){
        return view ('register');

    }
    public function postRegister(RegisterRequest $request){
          $user = $request->only('name','phone', 'email', 'password');

        $user['password'] = Hash::make($request->password);
         //dd($user);

     //return redirect()->route('get.login');
     if(User::create($user)){
        return redirect()->route('get.login')->with('success', 'Đăng kí thành công');
       }


    return redirect()->back()->with('error', 'Đăng kí thất bại');
    //dd($request->all());
     }
    public function getLogin(){
          return view ('login');
   
     //dd($request->all());
    }
     public function postLogin(Request $request){
           
        $user = $request->only( 'email', 'password');
        //dd(Auth::attempt($user));
           if(Auth::attempt($user)){
            return redirect()->route('admin.master')->with('success', 'Đăng nhập thành công');
           }
//          User::create($user);

        return redirect()->back()->with('error', 'Đăng nhập thất bại');

  
       //dd($request->all());
   }
   public function getLoginadmin(){
    return view ('dashboard.login');

//dd($request->all());
}
public function postLoginadmin(Request $request){
     
  $admin = $request->only( 'email', 'password');
  //dd(Auth::attempt($user));
     if(Auth::attempt($admin)){
      return redirect()->route('admin.home')->with('success', 'Đăng nhập thành công');
     }

  return redirect()->back()->with('error', 'Đăng nhập thất bại');


 //dd($request->all());
}
public function logout(){
    Auth::logout();
    return redirect()->route('get.loginadmin')->with('success', 'Đăng xuất thành công');
   }
//    public function logout(){
//     Auth::logout();
//     return redirect()->route('get.login');
//     // ->with('success', 'Đăng xuất thành công');
//    }
}
