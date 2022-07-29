<?php
$sql_lietke_sv = "SELECT * FROM tbl_sinhvien,tbl_lop WHERE tbl_sinhvien.id_lop=tbl_lop.id_lop ORDER BY id_sinhvien DESC";
$query_lietke_sv = mysqli_query($mysqli,$sql_lietke_sv);
?>
<p style="text-align:center;font-size:30px;font-weight:bold">Danh Sách Sinh Viên</p>
<table class="table table-bordered table-striped" style="width:100%" style="border-collapse: collapse;">
<tr>
<th>ID</th>
<th>Tên Sinh Viên</th>
<th>Số Điện Thoại</th>
<th>Lớp</th>
<th>Tình Trạng</th>
<th>Quản Lí</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_sv)){
    $i++
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['tensv']?> </td>
<td><?php echo $row['sdtsv']?> </td>
<td><?php echo $row['tenlop']?> </td>
<td><?php if($row['trangthai']==1){
echo'Đang Học';
}else{
    echo'Thôi Học';
}?> </td>

<td>
    <a href="module/quanlysinhvien/xuly.php?id_sinhvien=<?php echo $row['id_sinhvien'] ?>">Xóa</a> | <a href="?action=quanlysinhvien&query=sua&id_sinhvien=<?php echo $row['id_sinhvien'] ?>">Sửa</a> | <a href="?action=quanlysinhvien&query=chitiet&id_sinhvien=<?php echo $row['id_sinhvien'] ?>">Chi Tiết</a>
</td>

</tr>
<?php
}
?>




</table>