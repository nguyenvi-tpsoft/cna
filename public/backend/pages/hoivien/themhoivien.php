<?php
$tenhoivien = $_POST['tenhoivien'];
$vpcc_hv = $_POST['vpcc_hv'];
$duoi = explode('.', $_FILES['anh_hv']['name']); // tách chuỗi khi gặp dấu .
$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
$hoivien_img = md5($_FILES['anh_hv']['name']) . '.' . $duoi;
$duongdan = '../../../upload/hoivien/' . $hoivien_img;
$duongdan1 = '/hoivien/' . $hoivien_img;
move_uploaded_file($_FILES['anh_hv']['tmp_name'], $duongdan);

session_start();

//Tao ket nôi
include '../../connectsql.php';
$id_admin = $_SESSION["id_admin"];
//Viet cau truy van Sql
$sql = "INSERT INTO hoivien ( TEN_HV, ANH_HV, VANPHONG_HV) VALUES ('$tenhoivien','$duongdan1','$vpcc_hv')";
echo $sql;
//thưc hien truy van
$result = $con->query($sql);

header("location: ../hoivien/hoivien.php");


//xu ly ket qua

//dong ket noi
$con->close();
