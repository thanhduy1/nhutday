<?php
$sql_sua_khoa = "SELECT * FROM tbl_khoa WHERE id_khoa='$_GET[id_khoa]' LIMIT 1";
$query_sua_khoa = mysqli_query($mysqli,$sql_sua_khoa);
?>
<p>Thêm Khoa</p>
<table class="table table-bordered table-striped" border=1 width=50%>
<form method="POST" action="module/quanlykhoa/xuly.php?id_khoa=<?php echo $_GET['id_khoa']?>">
<?php
while ($dong=mysqli_fetch_array($query_sua_khoa)){


?>  
<tr>
        <td>Mã Khoa</td>
      
        <td><input type="text" value="<?php echo $dong['makhoa'] ?>" name="makhoa"></td>
    </tr>
    <tr>
        <td>Tên Khoa</td>
    
        <td><input type="text" value="<?php echo $dong['tenkhoa'] ?>" name="tenkhoa"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suakhoa" value="Sửa Khoa" ></td>
    </tr>
<?php
}
?>
    </form>
</table>