<?php
    // include('../../config/config.php');
    $sql_lietke_sp = "SELECT * from sanpham,danhmucsp WHERE sanpham.id_danhmuc=danhmucsp.id_danhmuc order by id_sanpham asc";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liệt kê sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
            <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sp</th>
        <th>số lượng</th>
        <th>danh mục</th>
        <th>Mã sp</th>
        <th>Tóm tắt</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
            $i++;

    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['ten_danhmuc'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php if($row['tinhtrang']==1){
            echo 'Kích hoạt';
        }else{
            echo 'ẨN';
        }
        
        ?></td>
        <td>
            <a href="modules/quanlysp/xuly.php?id_sanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="
            ?action=quanlysanpham&query=sua&id_sanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
        </td>
    </tr>
    <tr></tr>
    <?php
        }
    ?>
</table>