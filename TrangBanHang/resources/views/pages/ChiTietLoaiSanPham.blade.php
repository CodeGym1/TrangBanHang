@extends('layout.master')
@section('Noidung')
        <div class="container content1">
            <div class="row col-md-12">
                <div class="col-md-3 col-sm-4">
                    <div class="row">

                        <ul class="list-group " >
                            <li class="list-group-item tieude ">
                                <span class="glyphicon glyphicon-list">&nbsp;</span>
                                <span class="text-center">Danh mục sản phẩm</span>
                            </li>
                            @foreach($loai_sp as $loai)
                                <li class="list-group-item ds ">
                                    <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                    <a href="{{route('chitiet_loaisp',$loai->id )}}" class="red_hover" >{{$loai->name}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-1 content1-right">
                    <div class="row">
                        <div class="col-md-4">
                            @foreach($loaisp as $loai)
                               <h3>{{$loai->name}}</h3><hr class="gach_full">
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        @foreach($sp_theoloai as $sp)
                            <div class="col-md-6 col-xs-6  col-sm-6">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 col-sm-6">
                                        <a href="{{route('chitietsanpham',$sp->id)}}">
                                        <img class="img-responsive img-thumbnail" src="/images/{{$sp->image}}" width="100%">
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-center col-xs-6 col-sm-6">
                                        <div class="height">
                                            <span ><strong><a class="red_hover" href="{{route('chitietsanpham',$sp->id)}}">{{$sp->name}}</a></strong></span>
                                        </div>
                                        <div >
                                            <p><span> Giá: &nbsp; </span><span class="gia">{{$sp->price}}</span></p>
                                        </div>
                                        <a href="{{route('themgiohang',$sp->id)}}"><span class="glyphicon glyphicon-shopping-cart" style="color:red; padding-right: 10px"></span></a>
                                        <a href="{{route('themgiohang',$sp->id)}}" class="select"> Mua hàng</a>


                                    </div>
                                </div>
                            </div>

                        @endforeach



                    </div>

                </div>
            </div>
        </div>
    @endsection
