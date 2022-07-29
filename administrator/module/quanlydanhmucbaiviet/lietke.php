<?php
$sql_lietke_dmbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_dmbaiviet DESC";
$query_lietke_dmbv = mysqli_query($mysqli,$sql_lietke_dmbv);
?>
<table class="table table-bordered table-striped" style="width:50%" border="1" style="border-collapse: collapse;">
<tr>
<th>ID</th>
<th>Tên Danh Mục Bài Viết</th>
<th>Quản Lý</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_dmbv)){
    $i++
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['tendanhmucbv']?> </td>
<td>
    <a href="module/quanlydanhmucbaiviet/xuly.php?id_dmbaiviet=<?php echo $row['id_dmbaiviet'] ?>">Xóa</a> | <a href="?action=quanlydanhmucbaiviet&query=sua&id_dmbaiviet=<?php echo $row['id_dmbaiviet'] ?>">Sửa</a>
</td>

</tr>
<?php
}
?>




</table>