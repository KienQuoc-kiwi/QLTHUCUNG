<?php

    $sql_sua_nv = "SELECT * from nhanvien where Manv = '$_GET[Manv]' limit 1";
    $query_sua_nv = mysqli_query($mysqli,$sql_sua_nv);
    // $dong = mysqli_fetch_array($query_sua_sp);
?>

<p>Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
    while($row = mysqli_fetch_array($query_sua_nv)){

?>
    <form method="POST" action="modules/quanlynhanvien/xuly.php?Manv=<?php echo $row['Manv']?>" enctype="multipart/form-data">
        <tr>
            <th>Tên nhân viên</th>
            <td><input type="text" value="<?php echo $row['Hoten'] ?>" name="Hoten"></td>
        </tr>
        
        <tr>
            <td>Giới tính</td>
            <td><input type="text"  value="<?php echo $row['Gioitinh'] ?>" name="Gioitinh"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text"  value="<?php echo $row['Diachi'] ?>" name="Diachi"></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text"  value="<?php echo $row['sdt'] ?>" name="sdt"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suanhanvien" value="Sửa Nhân viên"></td>
        </tr>
  </form>
  <?php
    }
    ?>
</table>