<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p>sửa Sản Phẩm</p>
<table border=1 width=100%> 
<?php
while($row = mysqli_fetch_array($query_sua_sp)){
?>
<form method="POST"  action="module/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
    <tr>
        <td>Tên Sản Phẩm</td>
      
        <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
    </tr>
    <tr>
        <td>Mã Sản Phẩm</td>
      
        <td><textarea  row="50" cols="70"  name="masp" style="resize: none"></textarea> </td>
    </tr>
    <tr>
        <td>Giá</td>
      
        <td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"></td>
    </tr>
    <tr>
        <td>Số Lượng</td>
      
        <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
    </tr>
    <tr>
        <td>Hình Ảnh</td>
      
        <td>
            <input type="file" name="hinhanh">
            <img src="module/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" width="150px">
        </td>

    </tr>
    <tr>
        <td>Tóm Tắt Nội Dung</td>
      
        <td><textarea row="50" cols="70" name="tomtat" style="resize: none"><?php echo $row['tomtat']?></textarea> </td>
    </tr>
    <tr>
        <td>Nội Dung</td>
      
        <td><textarea  row="50" cols="70"  name="noidung" style="resize: none"><?php echo $row['noidung']?></textarea> </td>
    </tr>
    <tr>
        <td>Danh Mục Sản Phẩm</td>
    
    <td>
      <select name="danhmuc"> 
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            if($row_danhmuc['id']==$row['id']){
        ?>
        <option selected value="<?php echo $row_danhmuc['id']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
        <?php
        }else{
        
            ?>
            <option value="<?php echo $row_danhmuc['id']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            <?php
        }
        }
        ?>
      </select>
    </tr>
    <tr>
        <td>Tình Trạng</td>
    
    <td>
      <select name="tinhtrang"> 
        <?php
        if($row['tinhtrang'==1]){
        ?>
        <option value="1" selected>Kích Hoạt</option>
        <option value="0">Ẩn</option>
        <?php
        }else{
        ?>
        <option value="1">Kích Hoạt</option>
        <option value="0" selected>Ẩn</option>
        <?php    
        }
        ?>
      </select>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suasanpham" value="sửa sản phẩm" ></td>
    </tr>
    </form>
    <?php
       }
        ?>
</table>