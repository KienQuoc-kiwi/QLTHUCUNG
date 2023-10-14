<div id="main">
    <?php
    // include("../admincp/config/config.php");
    ?>
            <?php
                include("sidebar/sidebar.php");
            ?>

            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else
                    $tam = '';
                if($tam=='danhmucsanpham'){
                    include("main/danhmuc.php");
                }
                elseif($tam=='giohang'){
                    include("main/giohang.php");
                }
                elseif($tam=='tintuc'){
                    include("main/tintuc.php");
                }
                elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                }
                elseif($tam=='sanpham'){
                    include("main/sanpham.php");
                }
                elseif($tam=='dangky'){ 
                    include("main/dangky.php");
                }
                elseif($tam=='dangkyk'){ 
                    include("main/dangkykhach.php");
                }
                elseif($tam=='dangnhap'){ 
                    include("main/dangnhap.php");
                }
                elseif($tam=='dangnhapad'){ 
                    include("../admincp/login.php");
                }
                elseif($tam=='camon'){ 
                    include("main/camon.php");
                }
                elseif($tam=='doimatkhau'){ 
                    include("main/doimatkhau.php");
                }
                elseif($tam=='timkiem'){ 
                    include("main/timkiem.php");
                }
                elseif($tam=='thanhtoan'){ 
                    include("main/thanhtoan.php");
                }else{
                    include("main/main.php");
                }
                ?>
            </div>