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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                            <li class="navbar__item"><a href="#footer">Liên hệ</a></li>
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
                        <a id="to_cart" href="#cart">Giỏ hàng<br>&#8595;</a>
                        <h2 class="products-heading">Danh sách sản phẩm</h2>
                        <div class="product-list">
                            <?php 
                                $ket_noi = mysqli_connect('localhost','root','','fil_sport');
                                mysqli_set_charset($ket_noi,'utf8');
                                $sql = "select * from mat_hang";
                                $ket_qua = mysqli_query($ket_noi,$sql);
                            ?>

                            <?php foreach ($ket_qua as $mot_san_pham){ ?>
                                <div class="product-item">
                                <div class="product-item__img" style="background-image: url(<?php echo $mot_san_pham['link_anh'] ?>);"></div>
                                <div class="product-item__info">
                                    <div class="product-item__name"><?php echo $mot_san_pham['ten_hang'] ?></div>
                                    <div class="product-item__price"><?php echo $mot_san_pham['don_gia'] ?> &#8363;</div>
                                    <div class="product-item__desc"><?php echo $mot_san_pham['mo_ta'] ?></div>
                                </div>
                                <button class="product-item__btn-order">Thêm vào giỏ</button>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="product-cart">
                            <a id="to_product" href="#products">&#8593;<br>Sản phẩm</a>
                            <h2 class="product-cart__heading" id="cart">Giỏ hàng</h2>
                            <div class="product-cart__ctn">
                                <div class="product-cart__ctn-heading">
                                    <span>Sản phẩm</span>
                                    <span>Đơn giá</span>
                                    <span>Mô tả</span>
                                    <span>Số lượng</span>
                                </div>

                                <div class="product-cart__list"></div>

                                <div class="product-cart__total">
                                    <div class="cart-total__heading">Tổng cộng</div>
                                    <div class="cart-total__price">0 &#8363;</div>
                                    <a class="cart-total__payment" href="">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer" class="app-footer">
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
        // Banner animation
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

        // Delete card_item
        remove_cart_item();

        function remove_cart_item() {
            var remove_cart_item = document.getElementsByClassName("cart-item__del-btn");
            for (var i = 0; i < remove_cart_item.length; i++) {
                var btn = remove_cart_item[i];
                btn.addEventListener("click", function () {
                    var btn_remove = event.target;
                    btn_remove.parentElement.parentElement.remove();
                    update_cart();
                })
            }
        }

        // Total
        update_cart();

        function update_cart() {
            var cart_list = document.getElementsByClassName("product-cart__ctn")[0];
            var cart_items = cart_list.getElementsByClassName("product-cart__item");
            var total = 0;
            for (var i = 0; i < cart_items.length; i++) {
                var price_item = parseFloat(cart_items[i].getElementsByClassName("cart-item__price")[0].innerHTML.replace(/[^0-9]/g,''));
                var quantity_item = parseFloat(cart_items[i].getElementsByClassName("cart-quantity-input")[0].value);
                total += price_item * quantity_item;
            }
            document.getElementsByClassName("cart-total__price")[0].innerHTML = total + ' &#8363;';

            var total_payment_btn = cart_list.getElementsByClassName("cart-total__payment")[0];
            if(total == 0) {
                total_payment_btn.style.visibility = 'hidden';
            } else {
                total_payment_btn.style.visibility = 'visible';
            }
        }

        // Change quantity
        change_quantity();

        function change_quantity() {
            var quantity_inputs = document.getElementsByClassName("cart-quantity-input");
            for (var i = 0; i < quantity_inputs.length; i++) {
                var input = quantity_inputs[i];
                input.addEventListener("change", function (event) {
                    var input = event.target;
                    if (isNaN(input.value) || input.value <= 0) {
                        input.value = 1;
                    }
                update_cart();
                })
            }
        }

        // Thêm vào giỏ
        add_to_cart();

        function add_to_cart() {
            var add_cart = document.getElementsByClassName("product-item__btn-order");
            for (var i = 0; i < add_cart.length; i++) {
                var add = add_cart[i];
                add.addEventListener("click", function (event) {
                    var btn = event.target;
                    var product = btn.parentElement;
                    var img_div = product.getElementsByClassName("product-item__img")[0];
                    var url = $(img_div).css('background-image').replace('url(','').replace(')','').replace(/\"/gi, "");
                    var title = product.getElementsByClassName("product-item__name")[0].innerHTML;
                    var price = product.getElementsByClassName("product-item__price")[0].innerHTML;
                    var desc = product.getElementsByClassName("product-item__desc")[0].innerHTML;
                    addItemToCart(url, title, price, desc);
                    update_cart();
                })
            }
        }

        function addItemToCart(url, title, price, desc) {
            var cart_item = document.createElement('div');
            cart_item.classList.add('product-cart__item');

            var cart_list = document.getElementsByClassName('product-cart__list')[0];
            var cart_title = cart_list.getElementsByClassName('cart-item-title');

            //Nếu title của sản phẩm bằng với title mà bạn thêm vao giỏ hàng thì sẽ thông cho user.
            for (var i = 0; i < cart_title.length; i++) {
                if (cart_title[i].innerHTML == title) {
                    alert('Sản Phẩm Đã Có Trong Giỏ Hàng');
                    return;
                }
            }

            var cart_item_content = `
                        <div class="cart-item__info">
                            <img class="cart-item-thumbnail" src="${url}">
                            <span class="cart-item-title">${title}</span>
                        </div>
                        <div class="cart-item__price">${price}</div>
                        <div class="cart-item__desc">${desc}</div>
                        <div class="cart-item__quantity">
                            <input class="cart-quantity-input" type="number" value="1" min="1" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            <button class="cart-item__del-btn" type="button">Xóa</button>
                        </div>`

            cart_item.innerHTML = cart_item_content;
            cart_list.append(cart_item);
            update_cart();

            cart_item.getElementsByClassName('cart-item__del-btn')[0].addEventListener('click', function () {
                var btn_remove = event.target;
                btn_remove.parentElement.parentElement.remove();
                update_cart();
            })
            cart_item.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', function (event) {
                var input = event.target;
                if (isNaN(input.value) || input.value <= 0) {
                    input.value = 1;
                }
                update_cart();
            })
        }
    </script>
</body>
</html>