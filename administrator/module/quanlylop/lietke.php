<?php
$sql_lietke_lop = "SELECT * FROM tbl_lop ORDER BY id_lop DESC";
$query_lietke_lop = mysqli_query($mysqli,$sql_lietke_lop);
?>
<table class="table table-bordered table-striped" style="width:50%" border="1" style="border-collapse: collapse;">
<tr>
<th>ID</th>
<th>Mã Lớp</th>
<th>Tên Lớp</th>
<th>Quản Lý</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_lop)){
    $i++
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['malop']?> </td>
<td><?php echo $row['tenlop']?> </td>
<td>
    <a href="module/quanlylop/xuly.php?id_lop=<?php echo $row['id_lop'] ?>">Xóa</a> | <a href="?action=quanlylop&query=sua&id_lop=<?php echo $row['id_lop'] ?>">Sửa</a>
</td>

</tr>
<?php
}
?>




</table>