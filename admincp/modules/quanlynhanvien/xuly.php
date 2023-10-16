<?php
    include('../../config/config.php');

    $tennhanvien = $_POST['Hoten'];
    $gioitinh = $_POST['Gioitinh'];
    $diachi = $_POST['Diachi'];
    $sodt = $_POST['sdt'];
    if(isset($_POST['themnhanvien'])){
        //them
        $sql_them = "INSERT INTO nhanvien(Hoten,Gioitinh,Diachi,sdt) VALUES ('".$tennhanvien."','".$gioitinh."','".$diachi"','"$sodt"')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../indexad.php?action=quanlynhanvien&query=lietke');
    }elseif(isset($_POST['suadanhmuc'])){
        //sua
        $sql_update = "UPDATE danhmucsp SET ten_danhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[id_danhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header('Location: ../../indexad.php?action=quanlynhanvien&query=lietke');
    }else{
        $id=$_GET['id_danhmuc'];
        $sql_xoa="DELETE FROM danhmucsp WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location: ../../indexad.php?action=quanlynhanvien&query=lietke');
    }
?>