<?php
include('../../connect/connect.php');
$masv = $_POST['masv'];
$tensv = $_POST['tensv'];
$anhsv = $_FILES['anhsv']['name'];
$anhsv_tmp = $_FILES['anhsv']['tmp_name'];
$anhsv = time().'_'.$anhsv;
$ngaysinh = $_POST['ngaysinh'];
$gioitinh = $_POST['gioitinh'];
$trangthai = $_POST['trangthai'];
$hedaotao = $_POST['hedaotao'];
$nganh = $_POST['nganh'] ;
$nienkhoa = $_POST['nienkhoa'] ;
$sdtsv = $_POST['sdtsv'] ;
$lop = $_POST['lop'] ;
//hinhanh




if(isset($_POST['themsinhvien'])){
    $sql_them = "INSERT INTO tbl_sinhvien(masv,tensv,anhsv,ngaysinh,gioitinh,trangthai,hedaotao,nganh,nienkhoa,sdtsv,id_lop) VALUE('".$masv."','".$tensv."','".$anhsv."','".$ngaysinh."','".$gioitinh."','".$trangthai."','".$hedaotao."','".$nganh."','".$nienkhoa."','".$sdtsv."','".$lop."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($anhsv_tmp,'uploads/'.$anhsv);
    header('Location:../../index.php?action=quanlysinhvien&query=them');
}elseif(isset($_POST['suasinhvien'])){
    
    if(!empty($anhsv = $_FILES['anhsv']['name'])){
    move_uploaded_file($anhsv_tmp,'uploads/'.$anhsv);
    
    $sql_sua = "UPDATE tbl_sinhvien SET masv= '".$masv."',tensv='".$tensv."',anhsv='".$anhsv."',ngaysinh='".$ngaysinh."',gioitinh='".$gioitinh."',trangthai='".$trangthai."',hedaotao='".$hedaotao."',nganh='".$nganh."',nienkhoa='".$nienkhoa."',sdtsv='".$sdtsv."',id_lop='".$lop."' WHERE id_sinhvien='$_GET[id_sinhvien]'";
    //xoahinhanhcu
    $sql ="SELECT * FROM tbl_sinhvien WHERE id_sinhvien = '$_GET[id_sinhvien]' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['anhsv']);
    } 
    } 
else{  $sql_sua = "UPDATE tbl_sinhvien SET masv= '".$masv."',tensv='".$tensv."',ngaysinh='".$ngaysinh."',gioitinh='".$gioitinh."',trangthai='".$trangthai."',hedaotao='".$hedaotao."',nganh='".$nganh."',nienkhoa='".$nienkhoa."',sdtsv='".$sdtsv."',id_lop='".$lop."' WHERE id_sinhvien='$_GET[id_sinhvien]'";

}
     mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlysinhvien&query=them');

}else{   
    $id=$_GET['id_sinhvien'];
    $sql ="SELECT * FROM tbl_sinhvien WHERE id_sinhvien= '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['anhsv']);
    } 
    $sql_xoa = "DELETE FROM tbl_sinhvien WHERE id_sinhvien='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysinhvien&query=them');
    
}



?>