<?php
    include('../../config/config.php');

    $tenloaisp = $_POST['ten_danhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        //them
        $sql_them = "INSERT INTO danhmucsp(ten_danhmuc,thutu) VALUE ('".$tenloaisp."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../indexad.php?action=quanlydanhmucsanpham&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        //sua
        $sql_update = "UPDATE danhmucsp SET ten_danhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[id_danhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header('Location: ../../indexad.php?action=quanlydanhmucsanpham&query=them');
    }else{
        $id=$_GET['id_danhmuc'];
        $sql_xoa="DELETE FROM danhmucsp WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location: ../../indexad.php?action=quanlydanhmucsanpham&query=them');
    }
?>