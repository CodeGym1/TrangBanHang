<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class Type_productController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function showList(){
        $typies = ProductType::all();
        return view('admin.type_product.list',["typies" => $typies]);
    }

    public function showAddForm(){
        return view('admin.type_product.add');
    }

    public function add(Request $request){
        $type = new ProductType();
        $type->name = $request->input("typeproduct");
        $type->save();
        return redirect(route("show.list.type"));
    }

    public function showEditForm(Request $request,$id){
        $type = ProductType::find($id);
        return view('admin.type_product.edit',["type" => $type]);
    }

    public function edit(Request $request,$id){
        $type = ProductType::find($id);
        $type->name = $request->input('typeproduct');
        $type->save();
        return redirect(route("show.list.type"));
    }

    public function showDeleteForm(Request $request,$id){
        $type = ProductType::find($id);
        return view("admin.type_product.delete",["type" => $type]);
    }

    public function delete(Request $request,$id){
        $type = ProductType::find($id);
        $type->delete();
        return redirect(route("show.list.type"));
    }

}
