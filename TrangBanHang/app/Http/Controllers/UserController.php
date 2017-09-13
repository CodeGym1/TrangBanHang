<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showList(){
        $users = Users::all();
        return view('admin.user.list',['users' => $users]);
    }
    public function showFormDelete(Request $request,$id){
        $user = Users::find($id);
        return view('admin.user.delete',['user' => $user]);
    }
    public function delete(Request $request,$id){
        $user = Users::find($id);
        $user->delete();
        return redirect(route('show.list.user'));
    }
}
