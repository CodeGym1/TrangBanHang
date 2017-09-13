<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList(){
        $types = ProductType::all();
        //liên kết 2 bảng bằng phương thức product_type trong model Product
        $products = Product::with('product_type')->get();
        return view('admin.product.list',["products" => $products, "types" => $types]);
    }

    public function showAddForm(){
        $types = ProductType::all();
        return view('admin.product.add',["types" => $types]);
    }

    public function add(Request $request){
        $product = new Product();
        $product->name = $request->input('name');;
        $product->id_type = $request->input('type');
        $product->price = $request->input('price');
        $product->new = $request->input('new');
        $product->description = $request->input('description');
        $product->unit = $request->input('unit');
        $image=$request->file("image");
        if ($request->hasFile('image')){
            $image->move('../storage/app/public/images/',$image->getClientOriginalName());
            $product->image=$image->getClientOriginalName();
        }else{
            return view('error.error_image');
        }
        $product->save();
        return redirect(route('show.list.product'));
    }
    public function edit(Request $request,$id){
        $product = Product::find($id);
        if($product){
            $product->name = $request->input('nameproduct');
            $product->id_type = $request->input('type');
            $product->price = $request->input('price');
            if($request->hasFile('image')){
                $image = $request->file("image");
                $image->move('../storage/app/public/images/',$image->getClientOriginalName());
                $product->image=$image->getClientOriginalName();
            }
            $product->new = $request->input('new');
            $product->description = $request->input('description');
            $product->unit = $request->input('unit');
            $product->save();
            return redirect(route('show.list.product'));
        }else {
            return view('error.404', ["message" => "Product not found"]);
        }
    }

    public function showEditForm(Request $request,$id){
        $product = Product::find($id);
        $types = ProductType::all();
        if($product){
            return view('admin.product.edit',["product" => $product,"types" => $types]);
        }else{
            return view('error.404', ["message" => "Product not found"]);
        }

    }

    public function showDeleteForm(Request $request,$id){
        $product = Product::find($id);
        return view("admin.product.delete",["product" => $product]);
    }

    public function delete(Request $request,$id){
        $product = Product::find($id);
        $product->delete();
        return redirect(route("show.list.product"));
    }

    public function showListProductByType(Request $request,$id){
            $types = ProductType::all();
            $type_by_id = ProductType::find($id);
            $product = new Product();
            $products = Product::where('id_type', $type_by_id->id)->get();
        return view('admin.product.listbytype',["products" => $products,"types" => $types,"type_by_id" => $type_by_id]);
    }

}
