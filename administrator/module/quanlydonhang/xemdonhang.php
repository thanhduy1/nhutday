<h3>Xem Đơn Hàng</h3>
<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham and tbl_cart_details.code_cart='$_GET[code]' ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table class="table table-bordered table-striped" style="width:50%" border="1" style="border-collapse: collapse;">
<tr>
<th>STT</th>
<th>Mã Yêu Cầu</th>
<th>Tên Dịch Vụ</th>




</tr>
<?php
$i = 0;
$tongtien=0;
while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $thanhtien=$row['giasp']*$row['soluongmua'];
    $tongtien+=$thanhtien;
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['code_cart']?></td>
<td><?php echo $row['tensanpham']?></td>






</tr>
<?php
}
?>

    
</td>



</table>