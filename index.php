<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meow+Script&family=Roboto+Slab:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/logo-shop.png" type="image/x-icon">
    <title>Football is life</title>
</head>
<body>
    <div class="app">
        <div id="home"></div>
        <div class="app-header">
            <div class="container">
                <div class="header-ctn">
                    <div class="header-ctn__logo">
                        <a href="" class="header-ctn__logo-link">
                            <img src="./assets/img/logo-shop.png" alt="Sport life" class="header-ctn__logo-img">
                        </a>
                    </div>
                    <div class="header-ctn__navbar">
                        <ul class="navbar-list">
                            <li class="navbar__item"><a href="#home">Trang chủ</a></li>
                            <li class="navbar__item"><a href="#intro">Giới thiệu</a></li>
                            <li class="navbar__item"><a href="#products">Sản phẩm</a></li>
                            <li class="navbar__item"><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="header-ctn__tmp"></div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="container">
                <div class="main-ctn">
                    <header class="main-ctn__heading">
                        <h1>Fil Sport - Khởi đầu đam mê, giữ nhiệt sân cỏ!</h1>
                    </header>
                    <div class="main-ctn__banner">
                        <div class="banner-sliders" style="background-image: url(https://s1cdn.vnecdn.net/vnexpress/restruct/i/v496/v2_2019/pc/graphics/logo-aff-cup.svg); background-color: #fff;"></div>
                        <div class="banner-sliders" style="background-image: url(./assets/img/DTVN_vo_dich-1601115057419.jpg); background-color: #fff;"></div>
                        <div class="banner-sliders" style="background-image: url(./assets/img/aovietnam.jpg); background-position: 90% 50%;">
                            <div class="banner-sliders__caption">
                                <h2><span style="font-weight: 700;">Fil Sport</span><br>Đồng hành cùng<br> đội tuyển bóng đá Việt Nam</h2>
                            </div>
                        </div>
                    </div>
                    <div id="intro" class="main-ctn__intro">
                        <div class="intro__heading">Đôi nét về "Fil Sport"</div>
                        <div class="intro__content"><span class="fil">Fil</span> - viết tắt của cụm từ "Football is life", một WebShop được thành lập năm 2021 bởi một nhóm bạn trẻ yêu bóng đá và mong muốn thử sức với thị trường thương mại. Với mục đích ban đầu là tạo thêm kinh phí để duy trì câu lạc bộ bóng đá cùng tên - "Fil Club" bao gồm những người anh em yêu bóng đá quanh khu vực Tân Lập, Đan Phượng, Hà Nội.</div>
                        <div class="intro__signature">
                            Rất mong có được sự ủng hộ từ các bạn!<br>
                            <span>Nguyễn Ngọc Huy</span>
                        </div>
                    </div>
                    <div id="products" class="main-ctn__products">
                        <h2 class="products-heading">Danh sách sản phẩm</h2>
                        <div class="product-list">
                            <?php 
                                $ket_noi = mysqli_connect('localhost','root','','fil_sport');
                                mysqli_set_charset($ket_noi,'utf8');
                                $sql = "select * from mat_hang";
                                $ket_qua = mysqli_query($ket_noi,$sql);
                            ?>

                            <?php foreach ($ket_qua as $mot_san_pham){ ?>
                              <!--   <tr>
                                    <td><?php echo $mot_san_pham['ma_hang'] ?></td>
                                    <td><?php echo $mot_san_pham['ten_hang'] ?></td>
                                    <td><?php echo $mot_san_pham['don_gia'] ?></td>
                                    <td><?php echo $mot_san_pham['mo_ta'] ?></td>
                                    <td><?php echo $mot_san_pham['link_anh'] ?></td>
                                </tr> -->

                                <div class="product-item">
                                <div class="product-item__img" style="background-image: url(<?php echo $mot_san_pham['link_anh'] ?>);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name"><?php echo $mot_san_pham['ten_hang'] ?></div>
                                    <div class="product-item__price"><?php echo $mot_san_pham['don_gia'] ?> &#8363;</div>
                                    <div class="product-item__desc"><?php echo $mot_san_pham['mo_ta'] ?></div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <?php } ?>
 <!--                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/ao-viet-nam-do.jpg);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Áo bóng đá Việt Nam</div>
                                    <div class="product-item__price">119.000đ</div>
                                    <div class="product-item__desc">Màu đỏ, full size, vải cotton thoáng mát. Phù hợp cho mọi lứa tuổi.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/aothethao.jpg);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Áo thể thao nam Kelme</div>
                                    <div class="product-item__price">150.000đ</div>
                                    <div class="product-item__desc">Màu trắng, full size, vải cotton thoáng mát. Phù hợp cho mọi lứa tuổi.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/aothethaonu.jpg); background-size: cover;"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Áo thể thao nữ Kamito</div>
                                    <div class="product-item__price">119.000đ</div>
                                    <div class="product-item__desc">Màu đen và vàng, one size, vải cotton thoáng mát.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/bong.jpg);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Áo bóng đá Việt Nam</div>
                                    <div class="product-item__price">119.000đ</div>
                                    <div class="product-item__desc">Màu đỏ, full size, vải cotton thoáng mát. Phù hợp cho mọi lứa tuổi.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/quanvietnam.jpg);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Áo bóng đá Việt Nam</div>
                                    <div class="product-item__price">119.000đ</div>
                                    <div class="product-item__desc">Màu đỏ, full size, vải cotton thoáng mát. Phù hợp cho mọi lứa tuổi.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/quan-short-the-thao-trang.jpg);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Quần short gió thể thao nam Kamito</div>
                                    <div class="product-item__price">225.000đ</div>
                                    <div class="product-item__desc">Màu trắng, one size, vải cotton thoáng mát.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/quanthethao.jpg);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Áo bóng đá Việt Nam</div>
                                    <div class="product-item__price">119.000đ</div>
                                    <div class="product-item__desc">Màu đỏ, full size, vải cotton thoáng mát. Phù hợp cho mọi lứa tuổi.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div>
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(./assets/img/maychaybo.jpg);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name">Áo bóng đá Việt Nam</div>
                                    <div class="product-item__price">119.000đ</div>
                                    <div class="product-item__desc">Màu đỏ, full size, vải cotton thoáng mát. Phù hợp cho mọi lứa tuổi.</div>
                                </div>
                                <button class="product-item__btn-order">Đặt hàng</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="app-footer">
            <div class="container">
                <div class="footer-ctn">
                    <div class="footer-ctn__info">
                        <p>Công ty thương mại và dịch vụ Fil</p>
                        <p>Bản quyền tác giả &copy; Nguyễn Ngọc Huy</p>
                        <p>Điện thoại: <a href="tel:+84000258659"> 0904.25.86.59</a> (ĐT tự bịa ra)</p>
                        <p>Fax: 024-3736-6491 (fax này của báo Dân Trí)</p>
                        <p>Email: fil.sport@gmail.com (Mail này gửi đi được nhưng chưa chắc nhận được.)</p>
                        <p>Website: <a href="">filsport.abc</a> (Website này là website này)</p>
                        <p>Địa chỉ: <a href="https://www.google.com/maps/dir//T%C3%A2n+L%E1%BA%ADp,+%C4%90an+Ph%C6%B0%E1%BB%A3ng,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0850661,105.6942719,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x313455bf5790704b:0x338abf092a03d8f0!2m2!1d105.7145801!2d21.0811921?hl=vi-VN">Tân Lập, Đan Phượng, Hà Nội</a></p>
                        <p>Có tham khảo ảnh từ nhiều nguồn, đặc biệt là <a href="https://minhhaisport.vn/" target="_blank">minhhaisport.vn</a></p>
                        <p>Mọi hành động sử dụng mẫu thiết kế tại filsport.abc đều phải có sự đồng ý bằng văn bản của chủ sở hữu của tác giả.</p>
                    </div>
                    <div class="footer-ctn__contact">
                        <p>Liên hệ quảng cáo</p>
                        <div class="contact__ads">
                            <p>Điện thoại: <a href="tel:+840123456855"> 0123.54.58.58</a></p>
                            <p>Email: <a href="mailto:ads.filsport@gmail.com">ads.filsport@gmail.com</a></p>
                        </div>
                        <p>Theo dõi Fil trên</p>
                        <div class="contact__social-list">
                            <div class="social__item">
                                <a class="social-fb" href="">
                                    <i class="fab fa-facebook"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>
                            <div class="social__item">
                                <a class="social-insta" href="">
                                    <i class="fab fa-instagram-square"></i>
                                    <span>Instagram</span>
                                </a>
                            </div>
                            <div class="social__item">
                                <a class="social-reddit" href="">
                                    <i class="fab fa-reddit"></i>
                                    <span>Reddit</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("banner-sliders");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000);
        }
    </script>
</body>
</html>