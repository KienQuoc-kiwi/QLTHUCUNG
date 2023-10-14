<?php
    
    $sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
    

?>
<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangkyk']);
    }
    ?>
<div class="menu">
            <ul class = "list_menu">
            <div class="im"><img src="images/logo.jpg" alt="hinhloi"></div>
                <li><a href="index.php">Trang chủ</a></li>
                <!-- <?php
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></a></li>
                <?php
                }
                ?> -->
                <!-- <li><a href="index.php?quanly=tintuc">Tin tức</a></li>
                <li><a href="index.php?quanly=lienhe">Liên hệ</a></li> -->
                
                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <?php
                if(isset($_SESSION['dangkyk'])){
                ?>
                    <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                    <li><a href="main/doimatkhau.php?quanly=thaydoi">Thay đổi mật khẩu</a></li>
                <?php
                }else{
                ?>
                <li><a href="main/dangkykhach.php?quanly=dangkyk">Đăng ký</a></li>
                <li><a href="main/dangnhap.php?quanly=dangnhap">Đăng Nhập</a></li>
                <?php
                }
                ?>
            </ul>
            <p>
                <form class="timkiem" action="index.php?quanly=timkiem" method="POST" >
                    <input type="text" placeholder="tìm kiếm sản phẩm..." name="tukhoa">
                    <input type="submit" name="timkiem" value="tìm kiếm">
                </form>
                
            </p>
        </div>