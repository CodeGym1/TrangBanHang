<?php

//* phần quản trị
//phần type
Route::get('/admin/index','Type_productController@index')->name('show.index');
Route::get('/admin/type_product/list','Type_productController@showList')->name('show.list.type');
Route::get('/admin/type_product/add','Type_productController@showAddForm')->name('show.add.type');
Route::post('/admin/type_product/add','Type_productController@add')->name('add.type');
Route::get('/admin/type_product/edit/{id}','Type_productController@showEditForm')->name('show.edit.type');
Route::post('/admin/type_product/edit/{id}','Type_productController@edit')->name('edit.type');
Route::get('/admin/type_product/delete/{id}','Type_productController@showDeleteForm')->name('show.delete.type');
Route::post('/admin/type_product/delete/{id}','Type_productController@delete');

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
