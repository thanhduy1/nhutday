<?php
include('../../connect/connect.php');
$malop = $_POST['malop'];
$tenlop = $_POST['tenlop'];
if(isset($_POST['themlop'])){
    $sql_them = "INSERT INTO tbl_lop(malop,tenlop) VALUE('".$malop."','".$tenlop."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlylop&query=them');
}elseif(isset($_POST['sualop'])){
    $sql_sua = "UPDATE  tbl_lop SET malop= '".$malop."',tenlop='".$tenlop."' WHERE id_lop='$_GET[id_lop]'";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlylop&query=them');

}else{
    $id=$_GET['id_lop'];
    $sql_xoa = "DELETE FROM tbl_lop WHERE id_lop='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlylop&query=them');
    
}



?>