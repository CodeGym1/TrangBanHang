<?php

namespace App\Http\Controllers;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $products = Product::paginate(4);
        $newProducts = Product::where('new',1)->paginate(6);
        return view('pages.TrangChu',compact('slide','products','newProducts'));
    }
}
