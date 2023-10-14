<?php 
    //session_start();
    include('../../admincp/config/config.php');
    if(isset($_POST['thaydoi'])){
        $email = $_POST['email'];
        $matkhau_cu = md5($_POST['password_cu']);
        $matkhau_moi = md5($_POST['password_moi']);
        $sql ="SELECT * FROM dangkykhach WHERE email='".$email."' AND matkhau='".$matkhau_cu."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $sql_update = mysqli_query($mysqli,"UPDATE dangkykhach SET matkhau='".$matkhau_moi."'");
            echo 'Mật khẩu đã được thay đổi';
        }
        else{
            echo 'Tài khoản hoặc mật khẩu cũ không đúng, vui lòng đăng nhập lại!';
            // header("Location:login.php");
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
    <title>Đổi mật khẩu</title>
</head>

<body>
    <div class="center">
        <!-- <label for="" class"show-btn">View Form</label> -->
        <div class="container">
            <label for="" class="close-btn fas fa-times " ></label>
            <div class="text">Đổi mật khẩu</div>
            <form autocomplete="off" action="" method="POST">

                    <label>Email</label>
                    <input class="data" type="text" name="email" placeholder="Email...">

                    <label>Password cũ</label>
                    <input class="data" type="password" name="password_cu" placeholder="Mật khẩu cũ...">

                    <label>Password mới</label>
                    <input class="data" type="password" name="password_moi" placeholder="Mật khẩu mới...">
                    

                <!-- <div class="forgot-pass"><a href="#">Forgot Password?</a></div> -->
                <div class="btn">
                    <div class="inner"></div>
                    <input type="submit" name="thaydoi" value="THAY ĐỔI PASSWORD">
                </div>
                <!-- <div class="dk">
                    <p><a href="dangkykhach.php?quanly=dangkyk">Đăng ký</a></p>
                </div> -->
                <div class="danhnhap"><a href="dangnhap.php">đăng nhập</a></div>
            </form>
        </div>
    </div>