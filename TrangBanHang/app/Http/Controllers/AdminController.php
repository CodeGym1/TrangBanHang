<?php

namespace App\Http\Controllers;

use App\Admin;
use App\user;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class AdminController extends Controller
{
    public function showLoginForm(){
//        if (!Auth::check()){
            return view('admin.login');
//        }else{
//            return redirect()->route('show.index');
//        }

    }
//    public function login(AdminRequest $request)
//    {
//        $user = $request->user;
//        $password = $request->password;
//
//        $login = Admin::where('name', $user)
//            ->where('password', $password)
//            ->get();
//
//        if ($login->count() > 0) {
//            Session::put('user',$user);
//            var_dump(Session::get('user'));exit();
//            return redirect()->route('show.index');
//
//        } else return redirect()->back();
//
//    }
    public function login(AdminRequest $request){
        if (Auth::attempt(['name' => $request->user, 'password' => $request->password,])){
            return redirect()->route('show.index');
        }else return redirect()->route('show.login.form');
    }

//    public function logout(){
//        Auth::logout();
//        return redirect()->route('show.login.form');
//    }
}
