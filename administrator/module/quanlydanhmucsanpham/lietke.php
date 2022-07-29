<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liệt Kê Danh Mục Sản Phẩm</p>
<table style="width:50%" border="1" style="border-collapse: collapse;">
<tr>
<th>ID</th>
<th>Tên Danh Mục</th>
<th>Quản Lý</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['tendanhmuc']?> </td>
<td>
    <a href="module/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['id'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a>
</td>

</tr>
<?php
}
?>




</table>