<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;
use Session;
use App\Cart;

class MyController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $products = Product::where('new',1)->paginate(4);
        $newProducts = Product::where('new',1)->paginate(6);
        $loaisps = ProductType::with("products")->get();
        $loaisp = ProductType::all();
       return view('pages.TrangChu',compact('products','slide','newProducts','loaisps','loaisp'));
    }
    public function listLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        $loaisp = ProductType::where('id',$type)->get();
        $loaisps = ProductType::with("products")->get();
        $loai_sp = ProductType::all();
        return view('pages.ChiTietLoaiSanPham',compact('sp_theoloai','loaisp','loaisps','loai_sp'));
    }
    public function getChiTiet(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        $loaisp = ProductType::where('id',$req->id)->first();
        return view('pages.ChiTietSanPham',compact('sanpham','sp_tuongtu','loaisp'));
    }

    public function addtoCart(Request $req,$id){
        $product = Product::find($id);
        if($product){
//            $cart = $req->session()->get('cart', new Cart());
//            $cart->add($product);
//            $req->session()->put('cart',$cart);
//            $req->session()->save();
            $oldCart = Session('cart')?Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart->add($product, $id);
            $req->session()->put('cart',$cart);
        } else{
            return view("error.404");
        };
        return redirect()->back();
    }
    public function delItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }


}
