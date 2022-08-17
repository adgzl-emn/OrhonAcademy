<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admins;


class LoginController extends Controller
{
    public function index(){
        return view('back.login.login');
    }

    public function login(Request $request){
  //    return dd($request->post());
     $data = $request->only('name','password');
     if (Auth::attempt($data)){
         toastSuccess('Hoş geldin '.Auth::user()->name,'Giriş Başarılı');
         return redirect()->route('back.home');
     }
     else{
         return redirect()->route('login')->withErrors('Kullanıcı adı veya şifre hatalı !!');
         }

    }

    public function create(){
        return view('back.login.add');
    }

    public function add(Request $request){
        $admin = new Admins();
        $admin->name = $request->name;
        $admin->username= $request->username;
        $admin->password = $request->pass;
        $admin->save();
        return redirect()->route('back.store.user');
    }

    public function users(){
        $users = Admins::all();
        return view('back.login.users',compact('users'));
    }







    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


}
