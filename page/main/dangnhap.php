<!-- Ket noi csdl -->
<?php 
    session_start();
    include('../../admincp/config/config.php');
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM dangkykhach WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangkyk'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_cart'];
            header("Location:../index.php");
        }else{
            // header("Location:dangnhap.php");
            echo 'Tài khoản hoặc mật khẩu không đúng, vui lòng đăng nhập lại!';
            
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
    <title>login khách hàng</title>
</head>

<body>
    <div class="center">
        <!-- <label for="" class"show-btn">View Form</label> -->
        <div class="container">
            <label for="" class="close-btn fas fa-times " ></label>
            <div class="text">Login Khách Hàng</div>
            <form autocomplete="off" action="" method="POST">

                    <label>Email</label>
                    <input class="data" type="text" name="email" placeholder="Email...">

                    <label>Password</label>
                    <input class="data" type="password" name="password" placeholder="Mật khẩu...">
                    

                <div class="forgot-pass"><a href="doimatkhau.php">Đổi Password?</a></div>
                <div class="btn">
                    <div class="inner"></div>
                    <input type="submit" name="dangnhap" value="Login">
                </div>
                <div class="dk">
                    <p><a href="dangkykhach.php?quanly=dangkyk">Đăng ký</a></p>
                </div>
                <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
            </form>
        </div>
    </div>