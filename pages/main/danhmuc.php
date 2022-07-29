<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli,$sql_pro);
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli,$sql_cate);
$row_title = mysqli_fetch_array($query_cate);


?>
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