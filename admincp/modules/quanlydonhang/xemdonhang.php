<p>Xem đơn hàng</p>
<?php
$code = $_GET['code'];
$sql_lietke_dh = "SELECT id_cart_details, cart_details.ma_cart AS madonhang, sanpham.tensanpham, cart_details.soluong AS soluongmua, sanpham.giasp FROM cart_details, sanpham WHERE cart_details.id_sanpham=sanpham.id_sanpham
AND cart_details.ma_cart='".$code."' ORDER BY cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>số lượng</th>
        <th>đơn giá</th>
        <th>thành tiền</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
            $i++;

    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['madonhang'] ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td><?php echo number_format($row['giasp'],0,',','.').'vnđ'?></td>
        <td><?php echo number_format($row['soluongmua'] * $row['giasp'] ,0,',','.').'vnđ'?></td>
    </tr>
    <?php
        }
    ?>
</table>