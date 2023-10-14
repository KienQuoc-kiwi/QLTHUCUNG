<?php 
session_start();
    include("../../admincp/config/config.php");
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky = mysqli_query($mysqli,("INSERT INTO dangky(tennguoidung,email,diachi,matkhau,dienthoai) VALUE(
            '".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')"));
            if($sql_dangky){
                echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
                $_SESSION['dangky'] = $tenkhachhang;
                // header("Location:../index.php?quanly=giohang");
                header("Location:../../admincp/login.php");
            }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../admincp/css/login.css">
    <title>Đăng ký Admin</title>
</head>

<body>
    <div class="center">
        <!-- <label for="" class"show-btn">View Form</label> -->
        <div class="container">
            <label for="" class="close-btn fas fa-times " ></label>
            <div class="text">Đăng Ký Admin</div>
            <form autocomplete="off" action="" method="POST">

                    <label>Họ và tên</label>
                    <input class="data" type="text" name="hovaten" placeholder="Họ và tên...">

                    <label>Email</label>
                    <input class="data" type="text" name="email" placeholder="Email...">

                    <label>Điện thoại</label>
                    <input class="data" type="text" name="dienthoai" placeholder="Điện thoại...">
                    <label>Địa chỉ</label>
                    <input class="data" type="text" name="diachi" placeholder="Địa chỉ..">
                    <label>Mật khẩu</label>
                    <input class="data" type="password" name="matkhau" placeholder="Mật khẩu...">

                <!-- <div class="forgot-pass"><a href="#">Forgot Password?</a></div> -->
                <div class="btn">
                    <div class="inner"></div>
                    <input type="submit" name="dangky" value="Đăng ký"><br>
                    
                </div>
                <p><a href="../../admincp/login.php?quanly=dangnhapad">đăng nhập nếu có tài khoản</a></p>
                <!-- <p><a href="../../admincp/login.php?quanly=dangnhap">đăng nhập nếu có tài khoản</a></p> -->
                <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
            </form>
        </div>
    </div>