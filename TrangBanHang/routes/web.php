<?php


Route::get('trangchus',function (){
    return view('pages.ChiTietSanPham');
});
Route::get('login',function (){
    return view('auth.login');
})->name('login');

Route::get('register',function (){
    return view('auth.register');
})->name('register');


Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'MyController@getIndex'
]);

Route::get('chitiet_loaisp/{type}',[
    'as'=>'chitiet_loaisp',
    'uses'=>'MyController@listLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
   'as'=>'chitietsanpham',
   'uses'=>'MyController@getChiTiet'
]);

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'MyController@addtoCart'
]);

Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'MyController@delItemCart'
]);

Route::get('product', 'ProductControler@getList');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
