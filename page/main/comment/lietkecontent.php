<?php
    $sql_lietke_content = "SELECT dangkykhach.id_khachhang, sanpham.id_sanpham, noidung FROM binhluan,dangkykhach,sanpham WHERE sanpham.id_sanpham";
    $query_lietke_content = mysqli_query($mysqli,$sql_lietke_content);
?>
<p>Liệt kê bình luận</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
            <th>Id</th>
        <th>id khách hàng</th>
        <th>id sản phẩm</th>
        <th>nội dung</th>
        <th>ngày bình luận</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_content)){
            $i++;

    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['id_khachhang'] ?></td>
        <td><?php echo $row['id_sanpham'] ?></td>
        <td><?php echo $row['noidung'] ?></td>
        <td><?php echo $row['ngaybinhluan'] ?></td>
    </tr>
    <?php
        }
    ?>
</table>