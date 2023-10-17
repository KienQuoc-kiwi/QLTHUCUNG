<?php
    $sql_lietke_nv = "SELECT * FROM nhanvien ";
    $query_lietke_nv = mysqli_query($mysqli,$sql_lietke_nv);

?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>Mã nhân viên</th>
        <th>Tên nhân viên</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_nv)){
            $i++;

    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['Hoten'] ?></td>
        <td><?php echo $row['Gioitinh'] ?></td>
        <td><?php echo $row['Diachi'] ?></td>
        <td><?php echo $row['sdt'] ?></td>
        <td>
            <a href="modules/quanlynhanvien/xuly.php?Manv=<?php echo $row['Manv'] ?>">Xóa</a> | <a href="
            ?action=quanlynhanvien&query=sua&Manv=<?php echo $row['Manv'] ?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>