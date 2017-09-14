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
            <div class="col-md-5 col-xs-12" id="imageproduct">
                <ul class="bxslider">
                    <li><img src="/jquery/images/iphone_7_gold%20-%20big.jpg" class="img-responsive"></li>
                    <li><img src="/jquery/images/iphone_7_grey%20-%20big.jpeg" class="img-responsive"></li>
                    <li><img src="/jquery/images/iphone_7_white%20-%20big.png" class="img-responsive"></li>
                </ul>
            </div>
            <div class="col-md-7" id="product">
                <p id="productname"><b>Sản phẩm {{$sanpham->name}}B</b></p>
                <hr>
                <pre>Giá bán: <p id="price">18.990.000 VND</p></pre>
                <p>Thương hiệu: Apple</p>
                <p>Tình trạng: Còn hàng</p>
                <p>Xuất xứ: Nhà máy của Apple tại Trung Quốc</p><br>
                <p><b>Mô tả</b>: Cuối cùng, Apple đã chính thức ra mắt bộ đôi iPhone 7 và iPhone 7 Plus chấm dứt
                    những đồn đoán kéo dài nhiều tháng qua. Cả thiết kế lẫn cấu hình của cả hai sản phẩm iPhone mới
                    đều không khác nhiều so với những thông tin...</p>
                <div id="productcolor">
                    <img src="/image/colorproduct_white.png">
                    <img src="/image/colorproduct_grey.png">
                    <img src="/image/colorproduct_pink.png">
                    <img src="/image/colorproduct_yellow.png">
                </div>
                <div id="buy">
                    <hr>
                    <div id="number"><p><b>Số lượng </b></p></div>
                    <div id="numberform"><input type="number" value="1" id="soluong"></div>
                    <div id="buttonbuy"><button type="button" class="btn btn-success" id="bought"><a href="{{route('dathang')}}">Mua ngay</a></button></div>
                    <div id="buttoncredit"><button type="button" class="btn btn-warning" id="credit">Trả góp</button></div>
                </div>
                <div id="bill">
                    <hr>
                    <div id="phuongthucthanhtoan"><p><b>Chấp nhận thanh toán : </b></p></div>
                    <div class="donvithanhtoan">
                        <img src="/image/logo_baokim.jpg" class="img-responsive">
                    </div>
                    <div class="donvithanhtoan">
                        <img src="/image/logo_vietcombank.png" class="img-responsive">
                    </div>
                    <div class="donvithanhtoan">
                        <img src="/image/logo_baokim.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
            <div id="tab">
                <div class="row">
                    <h2 class="text-center">Những đặc điểm nổi bật</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Thông tin</a></li>
                        <li><a href="#info" data-toggle="tab">Thông số kỹ thuật</a></li>
                        <li><a href="#contact" data-toggle="tab">Đánh giá</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <p><b>Apple Iphone 7 32GB</b></p>
                            <p>   Cuối cùng, Apple đã chính thức ra mắt bộ đôi iPhone 7 và iPhone 7 Plus chấm dứt những đồn đoán kéo dài nhiều tháng qua.
                                Cả thiết kế lẫn cấu hình của cả hai sản phẩm iPhone mới đều không khác nhiều so với những thông tin rò rỉ trước đó.

                                iPhone 7 có thiết kế giống với iPhone 6s (và iPhone 6 trước đó) với thân kim loại bo tròn.
                                Nhưng điểm mới trong thiết kế của điện thoại này là khả năng chống nước đạt chuẩn IP67, nghĩa là nó
                                có thể trụ được 30 phút dưới nước ở độ sâu 1 mét. Các chi tiết mới đáng kể nữa trong thiết kế là vị trí dải
                                ăng ten thay đổi, hiện nằm ở sát phía trên và dưới mặt lưng khiến iPhone mới trông thoáng đạt hơn. iPhone 7 có thêm
                                lựa chọn màu đen bóng và đen nhám lạ mắt cùng với các lựa chọn màu cũ là vàng, vàng hồng và bạc.</p>
                            <img src="/images/minhhoaiphone7.jpg" class="img-responsive">
                            <p>   Camera trên phiên bản iPhone 7 thường được nâng cấp mạnh với khả năng chống rung quang học, khẩu mở lớn f/1.8 thu sáng
                                nhiều hơn 50% so với ống kính f/2.2 của iPhone 6s. Apple cho biết cảm biến camera trên iPhone 7 vẫn là 12MP như thế hệ
                                cũ nhưng tốc độ nhanh hơn 60% và tiêu hao điện năng thấp hơn 30%. Cùng với đó là chip xử lý hình ảnh do Apple tự thiết
                                kế và hệ thống 4 đèn flash tạo ra lượng ánh sáng nhiều hơn 50%. Trong khi đó, camera trước cũng được nâng lên 7MP với khả
                                năng chống rung ảnh tự động để cải thiện chất lượng ảnh tự sướng và video.</p>
                            <img src="/images/minhhoaiphone7_2.jpg" class="img-responsive">
                            <p>iPhone 7 được trang bị vi xử lý A10 Fusion được cho là có tốc độ nhanh hơn 40% so với thế hệ chip cũ. Vi xử lý này còn được
                                tích hợp chip đồ hoạ mới nhanh hơn 50% chip đồ hoạ trên Apple A9. Apple cũng cho biết mẫu iPhone mới này có cải thiện về thời
                                lượng pin, với 12 giờ lướt web trên mạng 4G LTE trên iPhone 7 và 10 ngày ở chế độ chờ.</p>
                            <img src="/images/minhhoaiphone7_%23.jpg#.jpg" class="img-responsive"><br>
                            <p><b>Với những đặc điểm trên iphone 7 xưng đáng là một siêu phẩm trong mức giá cao cấp mà bạn nên lựa chọn</b></p>
                        </div>
                        <div class="tab-pane" id="info">
                            <p>Thông số kỹ thuật</p><br>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Chức năng - Bộ phận</th>
                                        <th>Thông số</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="">
                                        <td>Màn hình</td>
                                        <td>LED-backlit IPS LCD</td>
                                    </tr>
                                    <tr class="">
                                        <td>Độ phân giải</td>
                                        <td>4.7' HD (1334 x 750 Pixels)</td>
                                    </tr>
                                    <tr class="">
                                        <td>Camera</td>
                                        <td>Sau: 12MP + Trước: 8MP</td>
                                    </tr>
                                    <tr class="">
                                        <td>Hệ điều hành</td>
                                        <td>IOS 10</td>
                                    </tr>
                                    <tr class="">
                                        <td>Chip</td>
                                        <td>Apple A10 Fusion 4 nhân 64-bit</td>
                                    </tr>
                                    <tr class="">
                                        <td>RAM</td>
                                        <td>2GB</td>
                                    </tr>
                                    <tr class="">
                                        <td>Bộ nhớ</td>
                                        <td>32 GB không thẻ nhớ</td>
                                    </tr>
                                    <tr class="">
                                        <td>Kết nối</td>
                                        <td>3G, 4G, LTE</td>
                                    </tr>
                                    <tr class="">
                                        <td>Sim</td>
                                        <td>1 Nano sim</td>
                                    </tr>
                                    <tr class="">
                                        <td>Pin</td>
                                        <td>Lion 1960mAh</td>
                                    </tr>
                                    <tr class="">
                                        <td>Trọng lượng</td>
                                        <td>138 g - Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact">
                            Đánh Giá:

                            Tạm thời chưa có đánh giá nào!!!!!!!!!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


