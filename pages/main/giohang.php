<?php

?>


<?php
if(isset($_SESSION['cart'])){

}

?>
<table class="table table-bordered table-striped" style="width:100%;text-align:center;">
<tr>
    <th>ID</th>
    <th>Mã Dịch Vụ</th>
    <th>Tên Dịch Vụ</th>
    <th>Hình Ảnh Minh Họa</th>

</tr>
<?php
if(isset($_SESSION['cart'])){
    $i = 0;
    $tongtien=0;
   
    foreach($_SESSION['cart'] as $cart_item){
    
     $tong = $cart_item['soluong']*$cart_item['giasp'];
     $tongtien+=$tong;
     $i++;
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp'];?></td>
    <td><?php echo $cart_item['tensanpham'];?></td>
    <td><img src="administrator/module/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'];?>" width=150px></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Hủy</a></td>
</tr>
<?php
    }
    ?>
    <tr>
    <td colspan="8">
<p><a href="pages/main/themgiohang.php?xoatatca=1">Xóa Tất Cả</a></p>
    <div style="clear:both;"></div>
    <?php
    if(isset($_SESSION['dangnhap'])){ 
    ?>
    <p><a href="index.php?quanly=thanhtoan">Xác Nhận Đăng Ký Tư Vấn Dịch Vụ</a></p>
    <?php
    }else{
    ?>
    <p><a href="index.php?quanly=dangky">Đăng Ký Tài Khoản Để Xác Nhận</a></p>
    <?php
    }
    ?>
</td>
   
</tr>
    <?php
}else{
?>
<tr>
    <td colspan="8"><p style="text-align:center">Hiện Tại Giỏ Hàng Chưa Có Sản Phẩm Nào</p></td>
</tr>
<?php
}
?>

</table>