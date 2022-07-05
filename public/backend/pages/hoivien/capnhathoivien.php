<?php
session_start();

include '../../connectsql.php';

$id_hv = $_POST['id_hv'];
$id_admin = $_SESSION["id_admin"];
$ten_hv = $_POST['ten_hv'];
if (!empty($_FILES['hinhanhhv']['name'])) {
    $duoi = explode('.', $_FILES['anh_hv']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $hoivien_img = md5($_FILES['anh_hv']['name']) . '.' . $duoi;
    $duongdan = '../../../upload/hoivien/' . $hoivien_img;
    $duongdan1 = '/hoivien/' . $hoivien_img;

    $sql = "UPDATE hoivien SET ID_ADMIN='$id_admin', TEN_HV='$ten_hv', ANH_HV='$duongdan1' where ID_HV='$id_hv'";
    move_uploaded_file($_FILES['hinhanhhv']['tmp_name'], $duongdan);
    echo $sql;
} else {
    $sql = "UPDATE hoivien SET  TEN_HV='$ten_hv'where ID_HV='$id_hv'";
    echo $sql;
}


$result = $con->query($sql);
header("location: ../hoivien/hoivien.php");
$con->close();
