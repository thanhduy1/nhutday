<?php
if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
}else{
    $tukhoa = '';
}
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id=tbl_danhmuc.id AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
$query_pro = mysqli_query($mysqli,$sql_pro);
?>
<div class="spmn">
<div class="danhmuc"><h3 class="34" style="text-align:center">Từ Khóa Tìm Kiếm :<?php echo $_POST['tukhoa'] ?></h3></div>
<ul class="productlist">
  <?php
  while($row = mysqli_fetch_array($query_pro)){
  ?>
  <li>
    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
       <img src="administrator/module/quanlysanpham/uploads/<?php echo $row['hinhanh']?>">
      <p class="titleproduct">Tên Sản Phẩm : <?php echo $row['tensanpham']?></p>
      <p class="priceproduct">Giá : <?php echo number_format($row['giasp'],0,',','.').'VNĐ'?></p>
      <p><?php echo $row['tendanhmuc']?></p>
    </a>
  <?php
  }
  ?>
  </div> 