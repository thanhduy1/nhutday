<?php
$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id_dmbaiviet]' ORDER BY id_baiviet DESC";
$query_bv = mysqli_query($mysqli,$sql_bv);
$sql_cate = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id='$_GET[id_dmbaiviet]' LIMIT 1";
$query_cate = mysqli_query($mysqli,$sql_cate);
$row_title = mysqli_fetch_array($query_cate);

?>
<h3>Danh Mục Bài Viết: <?php  echo $row_title['tendanhmucbv'] ?></h3>
<ul class="dichvu">
  <?php
  while($row_pro = mysqli_fetch_array($query_pro)){
  ?>
  <li style="list-style-type: none;">  <p class="titleproduct"><?php echo $row_pro['tensanpham']?></p>
    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
       <img src="administrator/module/quanlysanpham/uploads/<?php echo $row_pro['hinhanh']?>">
      </a>
  
  <?php
  }
  ?>
    
  </ul>