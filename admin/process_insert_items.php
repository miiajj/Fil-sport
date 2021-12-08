<?php

$ma_hang = $_POST['ma_hang'];
$ten_hang = $_POST['ten_hang'];
$don_gia = $_POST['don_gia'];
$mo_ta = $_POST['mo_ta'];
$link_anh = $_POST['link_anh'];

$ket_noi = mysqli_connect("localhost","root","","fil_sport");

mysqli_set_charset($ket_noi,'utf8');

$sql = "insert into mat_hang(ma_hang,ten_hang,don_gia,mo_ta,link_anh) values('".$ma_hang."','".$ten_hang."',".$don_gia.",'".$mo_ta."','".$link_anh."')";

mysqli_query($ket_noi,$sql);

mysqli_close($ket_noi);

echo "Nhập hàng thành công!";