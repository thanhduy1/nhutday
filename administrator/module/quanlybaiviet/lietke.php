<?php
$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_dmbaiviet=tbl_danhmucbaiviet.id_dmbaiviet ORDER BY id_baiviet DESC";
$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>
<p>Liệt Kê Bài Viết</p>
<table class="table table-bordered table-striped" style="width:100%" border="1" style="border-collapse: collapse;">
<tr>
<th>ID</th>
<th>Tên Sản Phẩm</th>
<th>Hình Ảnh</th>
<th>Danh Mục</th>
<th>Tóm Tắt</th>
<th>Tình Trạng</th>
<th>Quản Lí</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_bv)){
    $i++
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['tenbaiviet']?> </td>
<td><img src="module/quanlybaiviet/uploads/<?php echo $row['hinhanh']?>" width="150px"> </td>
<td><?php echo $row['tendanhmucbv']?> </td>
<td><?php echo $row['tomtat']?> </td>
<td><?php if($row['tinhtrang']==1){
echo'Kích Hoạt';
}else{
    echo'Ẩn';
}?> </td>

<td>
    <a href="module/quanlybaiviet/xuly.php?id_baiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a> | <a href="?action=quanlybaiviet&query=sua&id_baiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a>
</td>

</tr>
<?php
}
?>




</table>