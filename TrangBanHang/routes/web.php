<?php

//* phần quản trị
//phần type
Route::get('/admin/index','CategoryController@index')->name('show.index');
Route::get('/admin/category/list','CategoryController@showList')->name('show.list.type');
Route::get('/admin/category/add','CategoryController@showAddForm')->name('show.add.type');
Route::post('/admin/category/add','CategoryController@add')->name('add.type');
Route::get('/admin/category/edit/{id}','CategoryController@showEditForm')->name('show.edit.type');
Route::post('/admin/category/edit/{id}','CategoryController@edit')->name('edit.type');
Route::get('/admin/category/delete/{id}','CategoryController@showDeleteForm')->name('show.delete.type');
Route::post('/admin/category/delete/{id}','CategoryController@delete');



// phần product
Route::get('/admin/product/list','ProductController@showList')->name('show.list.product');
Route::get('/admin/product/add','ProductController@showAddForm')->name('show.add.product');
Route::post('/admin/product/add','ProductController@add');
Route::get('/admin/product/edit/{id}','ProductController@showEditForm')->name('show.edit.product');
Route::post('/admin/product/edit/{id}','ProductController@edit');
Route::get('/admin/product/delete/{id}','ProductController@showDeleteForm')->name('show.delete.product');
Route::post('/admin/product/delete/{id}','ProductController@delete');
Route::get('/admin/product/list/{id}','ProductController@showListProductByType')->name('show.list.product.by.type');

// phần người dùng
Route::get('/admin/user/list','UserController@showList')->name('show.list.user');
Route::get('/admin/user/delete/{id}','UserController@showFormDelete')->name('show.delete');
Route::post('/admin/user/delete/{id}','UserController@delete');
//* phần quản trị

// phần product
Route::get('/admin/product/list','ProductController@showList')->name('show.list.product');
Route::get('/admin/product/add','ProductController@showAddForm')->name('show.add.product');
Route::post('/admin/product/add','ProductController@add');
Route::get('/admin/product/edit/{id}','ProductController@showEditForm')->name('show.edit.product');
Route::post('/admin/product/edit/{id}','ProductController@edit');
Route::get('/admin/product/delete/{id}','ProductController@showDeleteForm')->name('show.delete.product');
Route::post('/admin/product/delete/{id}','ProductController@delete');
Route::get('/admin/product/list/{id}','ProductController@showListProductByType')->name('show.list.product.by.type');

// phần người dùng
Route::get('/admin/user/list','UserController@showList')->name('show.list.user');
Route::get('/admin/user/delete/{id}','UserController@showFormDelete')->name('show.delete');
Route::post('/admin/user/delete/{id}','UserController@delete');
//* phần quản trị


Route::get('trangchus',function (){
    return view('pages.ChiTietSanPham');
});
Route::get('login',function (){
    return view('auth.login');
})->name('login');

Route::get('register',function (){
    return view('auth.register');
})->name('register');


Route::get('/',[
    'as'=>'trang-chu',
    'uses'=>'HomeController@getIndex'
]);

Route::get('chitiet_loaisp/{type}',[
    'as'=>'chitiet_loaisp',
    'uses'=>'CategoryController@showCategory'
]);

Route::get('chi-tiet-san-pham/{id}',[
   'as'=>'chitietsanpham',
   'uses'=>'ProductController@getChiTiet'
]);

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'HomeController@addtoCart'
]);

Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'HomeController@delItemCart'
]);

Route::get('product', 'ProductControler@getList');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// dathang

Route::get('dat-hang',[
    'as'=>'dathang',
    'uses'=>'HomeController@getCheckout'
]);

Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'HomeController@postCheckout'
]);

//login

Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'HomeController@getLogin'
]);
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'HomeController@postLogin'
]);

Route::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'HomeController@getSignin'
]);


Route::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'HomeController@postSignin'
]);
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'HomeController@postLogout'
]);

Route::get('search',[
   'as'=>'search',
    'uses'=>'HomeController@getSearch'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
