<?php
    $sql_pro = "SELECT * FROM  sanpham where sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    
   //get tên danh mục
   $sql_cate = "SELECT * FROM danhmucsp where danhmucsp.id_danhmuc = '$_GET[id]' limit 1";
   $query_cate = mysqli_query($mysqli,$sql_cate);
   $row_title = mysqli_fetch_array($query_cate);
?>
<h3>Doanh mục sản phẩm:<?php echo $row_title['ten_danhmuc']?> </h3>
    <ul class="product_list">
        <?php
            while($row_pro = mysqli_fetch_array($query_pro)){
        ?>
                    
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" alt="hình lỗi">
                <p class="title_product">Tên thú cưng: <?php echo $row_pro['tensanpham']?></p>
                <p class="price_product">Giá: <?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?></p>
            </a>
        </li>
        <?php
         }
        ?>
    </ul>