<?php
include('../../connect/connect.php');
$makhoa = $_POST['makhoa'];
$tenkhoa = $_POST['tenkhoa'];
if(isset($_POST['themkhoa'])){
    $sql_them = "INSERT INTO tbl_khoa(makhoa,tenkhoa) VALUE('".$makhoa."','".$tenkhoa."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlykhoa&query=them');
}elseif(isset($_POST['suakhoa'])){
    $sql_sua = "UPDATE  tbl_khoa SET makhoa= '".$makhoa."',tenkhoa='".$tenkhoa."' WHERE id_khoa='$_GET[id_khoa]'";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlykhoa&query=them');

}else{
    $id=$_GET['id_khoa'];
    $sql_xoa = "DELETE FROM tbl_khoa WHERE id_khoa='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlykhoa&query=them');
    
}



?>