<?php
$sql_sua_lop = "SELECT * FROM tbl_lop WHERE id_lop='$_GET[id_lop]' LIMIT 1";
$query_sua_lop = mysqli_query($mysqli,$sql_sua_lop);
?>

<table class="table table-bordered table-striped" border=1 width=50%>
<form method="POST" action="module/quanlylop/xuly.php?id_lop=<?php echo $_GET['id_lop']?>">
<?php
while ($dong=mysqli_fetch_array($query_sua_lop)){


?>  
<tr>
        <td>Mã Lớp</td>
      
        <td><input type="text" value="<?php echo $dong['malop'] ?>" name="malop"></td>
    </tr>
    <tr>
        <td>Tên Lớp</td>
    
        <td><input type="text" value="<?php echo $dong['tenlop'] ?>" name="tenlop"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="sualop" value="Sửa Lớp" ></td>
    </tr>
<?php
}
?>
    </form>
</table>