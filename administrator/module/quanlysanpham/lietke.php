<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id=tbl_danhmuc.id ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liệt Kê Sản Phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
<tr>
<th>ID</th>
<th>Tên Sản Phẩm</th>
<th>Hình Ảnh</th>
<th>Giá</th>
<th>Số Lượng</th>
<th>Danh Mục</th>
<th>Mã Sản Phẩm</th>
<th>Tóm Tắt</th>
<th>Tình Trạng</th>
<th>Quản Lí</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['tensanpham']?> </td>
<td><img src="module/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" width="150px"> </td>
<td><?php echo $row['giasp']?> </td>
<td><?php echo $row['soluong']?> </td>
<td><?php echo $row['tendanhmuc']?> </td>
<td><?php echo $row['masp']?> </td>
<td><?php echo $row['tomtat']?> </td>
<td><?php if($row['tinhtrang']==1){
echo'Kích Hoạt';
}else{
    echo'Ẩn';
}?> </td>

<td>
    <a href="module/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
</td>

</tr>
<?php
}
?>




</table>