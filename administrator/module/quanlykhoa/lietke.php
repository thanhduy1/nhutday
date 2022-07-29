<?php
$sql_lietke_khoa = "SELECT * FROM tbl_khoa ORDER BY id_khoa DESC";
$query_lietke_khoa = mysqli_query($mysqli,$sql_lietke_khoa);
?>
<table class="table table-bordered table-striped" style="width:50%" border="1" style="border-collapse: collapse;">
<tr>
<th>ID</th>
<th>Mã Khoa</th>
<th>Tên Khoa</th>
<th>Quản Lý</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_khoa)){
    $i++
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['makhoa']?> </td>
<td><?php echo $row['tenkhoa']?> </td>
<td>
    <a href="module/quanlykhoa/xuly.php?id_khoa=<?php echo $row['id_khoa'] ?>">Xóa</a> | <a href="?action=quanlykhoa&query=sua&id_khoa=<?php echo $row['id_khoa'] ?>">Sửa</a>
</td>

</tr>
<?php
}
?>




</table>