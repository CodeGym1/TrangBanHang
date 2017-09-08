<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/bootstrap-theme.min.css')}}">

</head>

<body>

<div class="container-fluid banner">
    <div class="container ">
        <div class="row ">
        <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="row khung">
                    <img class="img-responsive" src="images/{{$image->image}}  " style="height: 100px; width: auto" >
            </div>
        </div>
        <div class="col-md-6 col-sm-6 khung hidden-xs ">
            <div class="search-box " >
                    <form class="search-form" action="#">
                        <div class="col-md-10 col-sm-9">
                            <input class="form-control" placeholder="tìm kiếm" type="text">
                        </div>
                        <div class="col-md-2 col-sm-3">
                        <button class="btn btn-link search-btn" > <i class="glyphicon glyphicon-search"></i>
                        </button>
                        </div>
                    </form>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 khung">
            <span>Hotline:<a href="#" style="color: red" class="red_hover" >01687479508</a></span><br>
            <span>email:<a><i> phanchaudhv@gmail.com</i></a></span>
        </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-inverse menu">
    <div class="container">
        <div class="navbar-header">
            <div class="col-xs-10 visible-xs">
            <form class=" navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            </div>
            <div class=" col-xs-2 ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav menu ">
                <li class=""><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li class="dropdown ">
                    <a class="dropdown-toggle " data-toggle="dropdown" href="#">Danh mục sản phẩm <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Iphone</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Oppo</a></li>
                        <li><a href="#">Asus</a></li>
                        <li><a href="#">Sony</a></li>
                        <li><a href="#">Acer</a></li>
                        <li><a href="#">Khác</a></li>
                    </ul>
                </li>
                <li><a href="#">Liên hệ</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Tài khoản</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Đăng Nhập</a></li>
                        <li><a href="#">Đăng ký</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="#"><img src="images/home-slider-1.jpg" alt="Image" width="100%"></a>
        </div>

        <div class="item">
            <a href="#"><img src="images/home-slider-2.jpg" alt="Image" width="100%"></a>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    </div>
</div>
<div class="container" >
    <div class="row khung"  >
        <div class="col-md-3 col-sm-4">
            <div class="row">

                <ul class="list-group " >
                    <li class="list-group-item tieude ">
                        <span class="glyphicon glyphicon-list">&nbsp;</span>
                        <span class="text-center">Danh mục sản phẩm</span>
                    </li>
                    <li class="list-group-item ds ">
                        <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                        <a href="#" class="red_hover" >Iphone </a>
                    </li>
                    <li class="list-group-item ds ">
                        <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                        <a href="#" class="red_hover" >Samsung </a>
                    </li>
                    <li class="list-group-item ds ">
                        <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                        <a href="#" class="red_hover" >Oppo</a>
                    </li>
                    <li class="list-group-item ds ">
                        <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                        <a href="#" class="red_hover" >Asus</a>
                    </li>
                    <li class="list-group-item ds ">
                        <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                        <a href="#" class="red_hover" >Sony</a>
                    </li>
                    <li class="list-group-item ds ">
                        <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                        <a href="#" class="red_hover" >Acer</a>
                    </li>
                    <li class="list-group-item ds ">
                        <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                        <a href="#" class="red_hover" >Khác</a>
                    </li>

                </ul>
                </div>
        </div>

        <div class="col-md-6 col-sm-8">
                <div class="row">
                    <div class="col-md-6">
                    <h3>Sản phẩm bán chạy</h3><hr class="gach_full">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-s  m-6">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img class="img-responsive" src="images/{{$image->image}}" width="100%">
                            </div>
                            <div class="col-md-6 text-center col-xs-6 col-sm-6">
                                <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                                <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                                <a href="#" class="select"> Mua hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row ">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img class="img-responsive" src="images/2.png" width="100%">
                            </div>
                            <div class="col-md-6 text-center col-xs-6 col-sm-6">
                            <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                            <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                            <a href="#" class="select"> Mua hàng</a>

                        </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img class="img-responsive" src="images/54115944s1.png" width="100%">
                            </div>
                            <div class="col-md-6 text-center col-xs-6 col-sm-6">
                                <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                                <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                                <a href="#" class="select"> Mua hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row ">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img class="img-responsive" src="images/appleiphone4s2.png" width="100%">
                            </div>
                            <div class="col-md-6 text-center col-xs-6 col-sm-6">
                                <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                                <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                                <a href="#" class="select"> Mua hàng</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <div class="col-md-3 visible-lg visible-md">
            <div class="row">
                <img src="images/home-banner-right.jpg" class="img-responsive" width="100%">
            </div>
        </div>
    </div>
    <hr>
    <div class="row khung">
        <div class="row">
            <div class="col-md-3">
                <h3>Sản phẩm mới nhất</h3><hr class="gach_full">
            </div>
        </div>
            <div class="row khungnho">
                <div class="col-md-2 col-xs-6 col-sm-3">
                    <img class="img-responsive" src="images/13090htconem9goldonsilver.jpg" width="100%">
                    <div class="caption text-center">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-3" >
                    <img src="images/big52005lggpad.png" class="img-responsive" width="100%">
                    <div class="caption text-center">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-3">
                    <img class="img-responsive" src="images/blackberrypassportblack15.png" width="100%">
                    <div class="caption text-center">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-3" >
                    <img src="images/sony-xperia-x-1-400x460.png" class="img-responsive" width="100%">
                    <div class="caption text-center">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 hidden-sm">
                    <img class="img-responsive" src="images/13090htconem9goldonsilver.jpg" width="100%">
                    <div class="caption text-center">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 hidden-sm" >
                    <img src="images/appleiphone4s2.png" class="img-responsive" width="100%">
                    <div class="caption text-center">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    </div>
                </div>
            </div>
        <hr>
        <div class="row khungnho">
            <div class="col-md-2 col-xs-6 col-sm-3">
                <img class="img-responsive" src="images/13090htconem9goldonsilver.jpg" width="100%">
                <div class="caption text-center">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                </div>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-3" >
                <img src="images/54115944s1.png" class="img-responsive" width="100%">
                <div class="caption text-center">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                </div>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-3">
                <img class="img-responsive" src="images/5341643lggprolitedual011.png" width="100%">
                <div class="caption text-center">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                </div>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-3" >
                <img src="images/sony-xperia-x-1-400x460%20(1).png" class="img-responsive" width="100%">
                <div class="caption text-center">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                </div>
            </div>
            <div class="col-md-2 col-xs-6 hidden-sm">
                <img class="img-responsive" src="images/big97572lenovos850lcz3745.png" width="100%">
                <div class="caption text-center">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                </div>
            </div>
            <div class="col-md-2 col-xs-6 hidden-sm" >
                <img src="images/13090htconem9goldonsilver.jpg" class="img-responsive" width="100%">
                <div class="caption text-center">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                </div>
            </div>
        </div>
            <div class="col-md-12 text-center khung" style="background-color: #F7F8F9">
                <a href="#" class="red_hover">Xem thêm</a>
            </div>
        </div>
    <div class="row khung">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h3 class="text-center">Iphone</h3><hr class="gach_duoi">
                <div class="row">
                <div class="col-md-4 col-xs-6 text-center">
                    <img src="images/13090htconem9goldonsilver.jpg" class="img-responsive " width="100%">
                </div>
                    <div class="col-md-6 text-center col-xs-6">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                        <a href="#" class="select"> Mua hàng</a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-4 col-xs-6 text-center">
                        <img src="images/1.png" class="img-responsive " width="100%">
                    </div>
                    <div class="col-md-6 text-center col-xs-6">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                        <a href="#" class="select"> Mua hàng</a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-4 col-xs-6 text-center">
                        <img src="images/1.png" class="img-responsive " width="100%">
                    </div>
                    <div class="col-md-6 text-center col-xs-6">
                        <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                        <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                        <a href="#" class="select"> Mua hàng</a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3 class="text-center">Asus</h3><hr class="gach_duoi">
            <div class="row">
                <div class="col-md-4 col-xs-6 text-center">
                    <img src="images/1.png" class="img-responsive " width="100%">
                </div>
                <div class="col-md-6 text-center col-xs-6">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    <a href="#" class="select"> Mua hàng</a>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 col-xs-6 text-center">
                    <img src="images/1.png" class="img-responsive " width="100%">
                </div>
                <div class="col-md-6 text-center col-xs-6">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    <a href="#" class="select"> Mua hàng</a>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 col-xs-6 text-center">
                    <img src="images/1.png" class="img-responsive " width="100%">
                </div>
                <div class="col-md-6 text-center col-xs-6">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    <a href="#" class="select"> Mua hàng</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3 class="text-center">Samsung</h3><hr class="gach_duoi">
            <div class="row">
                <div class="col-md-4 col-xs-6 text-center">
                    <img src="images/1.png" class="img-responsive " width="100%">
                </div>
                <div class="col-md-6 text-center col-xs-6">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    <a href="#" class="select"> Mua hàng</a>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 col-xs-6 text-center">
                    <img src="images/1.png" class="img-responsive " width="100%">
                </div>
                <div class="col-md-6 text-center col-xs-6">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    <a href="#" class="select"> Mua hàng</a>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 col-xs-6 text-center">
                    <img src="images/1.png" class="img-responsive " width="100%">
                </div>
                <div class="col-md-6 text-center col-xs-6">
                    <span ><strong><a class="red_hover" href="#">Tên Điện Thoại</a></strong></span>
                    <p><span> Giá: &nbsp; </span><span class="gia">9999999 đ</span></p>
                    <a href="#" class="select"> Mua hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer-over hidden-xs hidden-sm ">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3">
                        <br>
                       <img src="images/free-ship.png" class="img-responsive" width="100%">
                    </div>
                    <div class="col-md-9">
                        <h4><strong>Miễn phí vận chuyển</strong></h4>
                        <small>Miễn phí vận chuyển các tỉnh nội thành hà nội</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <h3 class="glyphicon glyphicon-refresh"></h3>
                    </div>
                    <div class="col-md-9">
                        <h4><strong>Đổi trả trong vòng 24h</strong></h4>
                        <small>Đổi trả sản phẩm trong vòng 24h.</small>
                    </div>
                 </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="glyphicon glyphicon-briefcase"></h3>
                    </div>
                    <div class="col-md-9">
                        <h4><strong>Uy tín hàng đầu</strong></h4>
                        <small>Sản phẩm được ủy quyền bởi các hảng sản xuất</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3">
                            <h3 class="glyphicon glyphicon-headphones"></h3>
                    </div>
                    <div class="col-md-9">
                        <h4><strong>Tư vấn miễn phí 24/7</strong></h4>
                        <strong>Hotline: 0963031692</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class="container hidden-sm hidden-xs">
        <div class="row ">
            <div class="col-md-3">
                <h4 class="text-center"><strong>Thông tin công ty</strong></h4>
                <ul >
                    <li><p><a href="#" class="red_hover">Thông tin công ty</a></p></li>
                    <li><p><a href="#" class="red_hover">Giới thiệu công ty</a></p></li>
                    <li><p><a href="#" class="red_hover">Hệ thống các siêu thị</a></p></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="text-center"><strong>Hổ trợ khách hàng</strong></h4>
                <ul>
                    <li><p><a href="#" class="red_hover">Liên hệ và góp ý</a></p></li>
                    <li><p><a href="#" class="red_hover">Hướng dẫn mua hàng online</a></p></li>
                    <li><p><a href="#" class="red_hover">Hướng dẫn mua trả góp</a></p></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="text-center"><strong>Chính sách mua hàng</strong></h4>
                <ul>
                    <li><p><a href="#" class="red_hover">Quy định , chính sách</a></p></li>
                    <li><p><a href="#" class="red_hover">Chính sách bảo hành, đổi trả</a></p></li>
                    <li><p><a href="#" class="red_hover">Giao hàng</a></p></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="text-center"><strong>Liên hệ với chùng tôi</strong></h4>
                <ul>
                    <li><p>Địa chỉ: số 19, ngõ 1, hồ tùng mậu, cầu giấy, Hà Nội</p></li>
                    <li><strong>hotline: 0963031692</strong></li>

                </ul>
            </div>
        </div>
    </div>

</footer>
<div class="container-fluid footer-below">
    <div class="row">
        <p>Bản quyền thuộc về nhóm 3 chàng trai xứ nghệ</p>
    </div>
</div>
</body>
</html>