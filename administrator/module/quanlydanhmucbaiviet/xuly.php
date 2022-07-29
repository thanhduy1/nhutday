<?php
include('../../connect/connect.php');
$tendanhmucbaiviet = $_POST['tendmbaiviet'];
$thutu = $_POST['thutubv'];
if(isset($_POST['themdanhmucbaiviet'])){
    $sql_them = "INSERT INTO tbl_danhmucbaiviet(tendanhmucbv,thutubv) VALUE('".$tendanhmucbaiviet."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlydanhmucbaiviet&query=them');
}elseif(isset($_POST['suadmbv'])){
    $sql_sua = "UPDATE  tbl_danhmucbaiviet SET tendanhmucbv= '".$tendanhmucbaiviet."',thutubv='".$thutu."' WHERE id_dmbaiviet='$_GET[id_dmbaiviet]'";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlydanhmucbaiviet&query=them');

}else{
    $id=$_GET['id_dmbaiviet'];
    $sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_dmbaiviet='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucbaiviet&query=them');
    
}



?>