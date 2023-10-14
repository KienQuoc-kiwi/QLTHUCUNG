<!-- Ket noi csdl -->
<?php
    include('connect.php');
    $id = $_GET['id'];
    $sql = "select * from user where id = '".$id."'";
    $query = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>


<body>
<?php
    $row = mysqli_fetch_array($query);
    ?>

    <form method="post" name="frupdate" action="">
        <table border="1">
            <tr>
                <th colspan="2" bgcolor="YELLOW">Update</th>
            </tr>

            <tr>
                <td>
                    UserName
                </td>
                <td>
                    <input type="text" name="username" value = "<?=$row['username']?>">  <br>
                </td>
            </tr>

            <tr>
                <td>
                    PassWord
                </td>
                <td>
                    <input type="password" name="password" placeholder="$password">
                </td>
            </tr>

            <tr>
                <td>
                    RepassWord
                </td>
                <td>
                    <input type="password" name="repassword" placeholder="NhapMatKhau">
                </td>
            </tr>

            <tr>
                <td>
                    FullName
                </td>
                <td>
                    <input type="text" name="fullname" placeholder="NhapHoTen"> <br>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                  <input type="submit" name="ok" value="Sua">
                </td>
            </tr>
        </table>
    </form>

    

</body>

</html>
<?php
    if ($_POST) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $repassword = md5($_POST['repassword']);
        $fullname = $_POST['fullname'];

        if($username && $password && $repassword && $fullname) {
            if($password == $repassword){
                if($password != "d41d8cd98f00b204e98008ecf8427e")
                    $sql_edit = "update user set password = '".$password."',
                    fullname = '".$fullname."'
                     where id = '".$id."'";
                
                else
                    $sql_edit = "update user set fullname = '".$fullname."'
                    where id = '".$id."'";
                    $query = mysqli_query($conn, $sql_edit);
                    if($query)
                        header('location:view.php');
                
                
                    //echo "đã thêm thành công"
            }
        }
        else{
            echo "Mật khẩu không giốn nhau";
        }
        
    }
    else
            echo "Mời nhập thông tin đầy đủ!!!";
    ?>