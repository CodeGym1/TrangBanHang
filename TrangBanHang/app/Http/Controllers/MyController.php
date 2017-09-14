<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;
use Session;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Hash;
use Auth;

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

    public function getCheckout(){
        return view('pages.DatHang');
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->price = $value['price'];
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
        return view ('TrangChu');

    }

    public function getLogin(){
        return view('pages.DangNhap');
    }

    public function getSignin(){
        return view('pages.DangKy');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $kiemtra = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($kiemtra)){
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }


    }


    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }


}
