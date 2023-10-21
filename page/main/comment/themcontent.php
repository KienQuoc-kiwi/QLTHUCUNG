<?php
    include("../../../admincp/config/config.php");

    $id_khachhang = $_POST['id_khachhang'];
    $id_sp = $_POST['id_sanpham'];
    $binhluan = $_POST['noidung'];
    $ngay = $_POST['ngaybinhluan'];

    if(isset($_POST['thembinhluan'])){
        //them
        $sql_them = "INSERT INTO binhluan(id_khachhang, id_sanpham, noidung, ngaybinhluan) VALUE('".$id_khachhang."','".$id_sp."',
        '".$binhluan."','".$ngay."')";
        mysqli_query($mysqli,$sql_them);
    }
?>