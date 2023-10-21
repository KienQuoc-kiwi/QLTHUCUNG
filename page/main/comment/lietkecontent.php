<?php
    $sql_lietke_content = "SELECT * from sanpham,danhmucsp WHERE sanpham.id_danhmuc=danhmucsp.id_danhmuc";
    $query_lietke_content = mysqli_query($mysqli,$sql_lietke_content);
?>