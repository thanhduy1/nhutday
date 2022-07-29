<?php
include('../../connect/connect.php');
if(isset($_GET['code'])){

    $code = $_GET['code'];
    $sql_update = "UPDATE tbl_cart SET cart_status=0 WHERE code_cart='".$code."'";
    $query = mysqli_query($mysqli,$sql_update);

    header('Location:../../index.php?action=quanlydonhang&query=lietke');
}
?>