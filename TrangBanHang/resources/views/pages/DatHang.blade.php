@extends('layout.master')
@section('Noidung')

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <ul class="breadcrumb">
                        <li>Trang chủ</li>
                        <li>{{$loaisp->name}}</li>
                        <li class="active">Sản phẩm {{$sanpham->name}}</li>
                    </ul>
                </div>

            </div>
            <div class="container"></div>
        </div>
    </div>
@endsection


