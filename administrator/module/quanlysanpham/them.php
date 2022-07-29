<p>Thêm Sản Phẩm</p>
<table border=1 width=100%>
<form method="POST" action="module/quanlysanpham/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Tên Sản Phẩm</td>
      
        <td><input type="text" name="tensanpham"></td>
    </tr>
    <tr>
        <td>Mã Sản Phẩm</td>
      
        <td><textarea  row="50" cols="70"  name="masp" style="resize: none"></textarea> </td>
    </tr>
    <tr>
        <td>Giá</td>
      
        <td><input type="text" name="giasp"></td>
    </tr>
    <tr>
        <td>Số Lượng</td>
      
        <td><input type="text" name="soluong"></td>
    </tr>
    <tr>
        <td>Hình Ảnh</td>
      
        <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
        <td>Tóm Tắt Nội Dung</td>
      
        <td><textarea row="50" cols="70" name="tomtat" style="resize: none"></textarea> </td>
    </tr>
    <tr>
        <td>Nội Dung</td>
      
        <td><textarea  row="50" cols="70"  name="noidung" style="resize: none"></textarea> </td>
    </tr>

    <tr>
        <td>Tình Trạng</td>
    
    <td>
      <select name="tinhtrang"> 
        <option value="1">Kích Hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </tr>
    <tr>
        <td>Danh Mục Sản Phẩm</td>
    
    <td>
      <select name="danhmuc"> 
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value="<?php echo $row_danhmuc['id']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
        <?php
        }
        ?>
      </select>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="themsanpham" value="thêm sản phẩm" ></td>
    </tr>
    </form>
</table>