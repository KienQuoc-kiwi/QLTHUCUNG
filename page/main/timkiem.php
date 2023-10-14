<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM  sanpham, danhmucsp where sanpham.id_danhmuc=danhmucsp.id_danhmuc AND sanpham.tensanpham like '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    
?>
<h3>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa']?></h3>
    <ul class="product_list">
        <?php
            while($row = mysqli_fetch_array($query_pro)){
        ?>
            <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="../admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="hình lỗi">
                <p class="title_product">Tên thú cưng: <?php echo $row['tensanpham']?></p>
                <p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
                <p style="text-align: center; color: green"><?php echo $row['ten_danhmuc']?></p>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>