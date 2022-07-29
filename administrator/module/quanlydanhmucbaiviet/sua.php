<?php
$sql_sua_dmbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_dmbaiviet='$_GET[id_dmbaiviet]' LIMIT 1";
$query_sua_dmbv = mysqli_query($mysqli,$sql_sua_dmbv);
?>

<table class="table table-bordered table-striped" border=1 width=50%>
<form method="POST" action="module/quanlydanhmucbaiviet/xuly.php?id_dmbaiviet=<?php echo $_GET['id_dmbaiviet']?>">
<?php
while ($dong=mysqli_fetch_array($query_sua_dmbv)){


?>  
<tr>
        <td>Tên Danh Mục Bài Viết</td>
      
        <td><input type="text" value="<?php echo $dong['tendanhmucbv'] ?>" name="tendmbaiviet"></td>
    </tr>
    <tr>
        <td>Thứ Tự</td>
    
        <td><input type="text" value="<?php echo $dong['thutubv'] ?>" name="thutubv"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suadmbv" value="Sửa Danh Mục" ></td>
    </tr>
<?php
}
?>
    </form>
</table>