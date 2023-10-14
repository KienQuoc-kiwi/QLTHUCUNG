<!-- Ket noi csdl -->
<?php 
    session_start();
    include('config/config.php');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql ="SELECT * FROM dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            //$row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $email;
            header("Location:indexad.php");
        }
        else{
            echo 'Tài khoản hoặc mật khẩu không đúng, vui lòng đăng nhập lại!';
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
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>

<body>
    <div class="center">
        <!-- <label for="" class"show-btn">View Form</label> -->
        <div class="container">
            <label for="" class="close-btn fas fa-times " ></label>
            <div class="text">Login Admin</div>
            <form autocomplete="off" action="" method="POST">

                    <label>Tên Người Dùng</label>
                    <input class="data" type="text" name="email" placeholder="email...">

                    <label>Password</label>
                    <input class="data" type="password" name="password" placeholder="Mật khẩu...">

                <div class="forgot-pass"><a href="#">Forgot Password?</a></div>
                <div class="btn">
                    <div class="inner"></div>
                    <input type="submit" name="login" value="Login">
                </div>
                <!-- <div class="signup-link">Not a member? <a href="../page/main/dangnhap.php">Signup now</a></div> -->
                <div class="dk">
                    <p><a href="../page/main/dangky.php">Đăng ký</a></p>
                </div>
            </form>
        </div>
    </div>