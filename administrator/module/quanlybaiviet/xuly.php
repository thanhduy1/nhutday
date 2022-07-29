<?php
include('../../connect/connect.php');
$tenbaiviet = $_POST['tenbaiviet'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'] ;
$danhmuc = $_POST['danhmuc'] ;
//hinhanh



if(isset($_POST['thembaiviet'])){
    $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,hinhanh,tomtat,noidung,tinhtrang,id_dmbaiviet) VALUE('".$tenbaiviet."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlybaiviet&query=them');
}elseif(isset($_POST['suabaiviet'])){
    
    if(!empty($_FILES['hinhanh']['name'])){
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    
    $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet= '".$tenbaiviet."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_dmbaiviet='".$danhmuc."' WHERE id_baiviet='$_GET[id_baiviet]'";
    //xoahinhanhcu
    $sql ="SELECT * FROM tbl_baiviet WHERE id_baiviet = '$_GET[id_baiviet]' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    } 
    } 
else{  $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet= '".$tenbaiviet."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_dmbaiviet='".$danhmuc."' WHERE id_baiviet='$_GET[id_baiviet]'";

}
     mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlybaiviet&query=them');

}else{   
    $id=$_GET['id_baiviet'];
    $sql ="SELECT * FROM tbl_baiviet WHERE id_baiviet= '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    } 
    $sql_xoa = "DELETE FROM tbl_baiviet WHERE id_baiviet='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlybaiviet&query=them');
    
}



?>