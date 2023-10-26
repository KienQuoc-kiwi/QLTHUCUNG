<p>chi tiết sản phẩm</p>
<?php
    $sql_chitiet = "SELECT * FROM  sanpham, danhmucsp where sanpham.id_danhmuc =
    danhmucsp.id_danhmuc and sanpham.id_sanpham = '$_GET[id]'  limit 1";
   $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
   while($row_chitiet = mysqli_fetch_array($query_chitiet)){
   ?>
   <div class="wrapper_chitiet">
    <div class="hinhanh_sanpham" >
        <img width="100%" src="../admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="hình lỗi">
    </div>
    <form method="POST" action="main/themgiohang.php?id_sanpham=<?php echo $row_chitiet['id_sanpham']?>">
        <div class="chitiet_sanpham">
            <h3 style="margin: 0">Tên sản phẩm: <?php echo $row_chitiet['tensanpham']?></h3>
            <p>Mã sản phẩm: <?php echo $row_chitiet['masp']?></p>
            <p>Giá sản phẩm: <?php echo  number_format($row_chitiet['giasp'],0,',','.').'vnđ'?></p>
            <p>Số lượng sản phẩm: <?php echo $row_chitiet['soluong']?></p>
            <p>Tên danh mục: <?php echo $row_chitiet['ten_danhmuc']?></p>
            <p><input  class="themgiohang" name = "themgiohang" type="submit" value="Thêm giỏ hàng"></p>
        </div>
    </form>
    
   </div>
<?php
   }
   $sql_lietke_content = "SELECT tenkhachhang, binhluan.id_khachhang, sanpham.id_sanpham, binhluan.noidung, ngaybinhluan FROM binhluan,dangkykhach,sanpham WHERE 
    binhluan.id_khachhang = dangkykhach.id_dkkhach AND sanpham.id_sanpham = binhluan.id_sanpham AND sanpham.id_sanpham = '$_GET[id]'";
    $query_lietke_content = mysqli_query($mysqli,$sql_lietke_content);
   ?>
   <form  method="POST" action="main/comment/xulycontent.php">
            <tr>
                <input type="hidden" name="id_sanpham_test" value="<?=$_GET['id']?>">
            </tr>
            <!-- <input type="hidden" name="noidung" value="<?=$row['noidung']?>">
            <input type="hidden" name="ngaybl" value="<?=$row['ngaybinhluan'] ?>"> -->
            <tr>
                <textarea class="content" name="content" placeholder="Mời bạn chia sẻ cảm nhận"></textarea>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="thembinhluan" value="Gửi bình luận"></td>
            </tr>
            <h3>Liệt kê bình luận</h3>
    </form>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_content)){
            $i++;
    ?>
    <div class="product_rating_main">
        <a class="product_rating_name" href=""><?php echo $row['tenkhachhang']?><?php echo $row['id_khachhang']?></a>
        <div class="product_rating_time" style="margin-top: 0.75rem;"><td><?php echo $row['ngaybinhluan']?></td> </div>
        <div class="product_rating_content" style="margin-top: 0.75rem;"><td><?php echo $row['noidung'] ?></td></div>
    </div>
    <?php
        }
    ?>

