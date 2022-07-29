<p style="text-align:center;">Thêm Bài Viết</p>
<table class="table table-bordered table-striped" border=1 width=100%>
<form method="POST" action="module/quanlybaiviet/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Tên Bài Viết</td>
      
        <td><input type="text" name="tenbaiviet"></td>
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
        <td>Danh Mục Bài Viết</td>
    
    <td>
      <select name="danhmuc"> 
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_dmbaiviet DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value="<?php echo $row_danhmuc['id_dmbaiviet']?>"><?php echo $row_danhmuc['tendanhmucbv']?></option>
        <?php
        }
        ?>
      </select>
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
        <td colspan="2"><input type="submit" name="thembaiviet" value="Thêm Bài Viết" ></td>
    </tr>
    </form>
    
</table>