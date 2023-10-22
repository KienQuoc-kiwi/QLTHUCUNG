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
    <form method = "POST" action="main/comtent/lietkecontent.php?id_sanpham=<?php echo $row_chitiet['id_sanpham']?>">
        <div class="comment">
            <tr>
                <textarea class="content" name="content" placeholder="Mời bạn chia sẻ cảm nhận"></textarea>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="thembinhluan" value="Gửi bình luận"></td>
            </tr>
        </div>
    </form>
   </div>
<?php
   }
   ?>
