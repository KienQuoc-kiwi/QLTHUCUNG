<?php
    $sql_lietke_dh = "SELECT cart.id_khachhang as idkhach, cart.ma_cart, dangkykhach.tenkhachhang, dangkykhach.email, dangkykhach.diachi, dangkykhach.dienthoai FROM cart, dangkykhach WHERE cart.id_khachhang=dangkykhach.id_dkkhach
    ORDER BY cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Quản lý</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
            $i++;

    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['ma_cart'] ?></td>
        <td><?php echo $row['tenkhachhang'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['dienthoai'] ?></td>
        <td>
            <a href="indexad.php?action=donhang&query=xemdonhang&code=<?php echo $row['ma_cart']?>">Xem đơn hàng</a></td>
    </tr>
    <?php
        }
    ?>
</table>