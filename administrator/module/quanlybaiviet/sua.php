<?php
$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id_baiviet ='$_GET[id_baiviet]' LIMIT 1";
$query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<p>Sửa Sản Phẩm</p>
<table class="table table-bordered table-striped" border=1 width=100%> 
<?php
while($row = mysqli_fetch_array($query_sua_bv)){
?>
<form method="POST"  action="module/quanlybaiviet/xuly.php?id_baiviet=<?php echo $row['id_baiviet']?>" enctype="multipart/form-data">
    <tr>
        <td>Tên Bài Viết</td>
      
        <td><input type="text" value="<?php echo $row['tenbaiviet']?>" name="tenbaiviet"></td>
    </tr>
    <tr>
        <td>Hình Ảnh</td>
      
        <td>
            <input type="file" name="hinhanh">
            <img src="module/quanlybaiviet/uploads/<?php echo $row['hinhanh']?>" width="150px">
        </td>

    </tr>
    <tr>
        <td>Tóm Tắt Nội Dung</td>
      
        <td><textarea row="50" cols="70" name="tomtat" ><?php echo $row['tomtat']?></textarea> </td>
    </tr>
    <tr>
        <td>Nội Dung</td>
      
        <td><textarea  row="50" cols="70"  name="noidung"><?php echo $row['noidung']?></textarea> </td>
    </tr>
    <tr>
        <td>Danh Mục Bài Viết</td>
    
    <td>
      <select name="danhmuc"> 
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_dmbaiviet DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            if($row_danhmuc['id_dmbaiviet']==$row['id_dmbaiviet']){
        ?>
        <option selected value="<?php echo $row_danhmuc['id_dmbaiviet']?>"><?php echo $row_danhmuc['tendanhmucbv']?></option>
        <?php
        }else{
        
            ?>
            <option value="<?php echo $row_danhmuc['id_dmbaiviet']?>"><?php echo $row_danhmuc['tendanhmucbv']?></option>
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
        <td colspan="2"><input type="submit" name="suabaiviet" value="Sửa Bài Viết" ></td>
    </tr>
    </form>
    <?php
       }
        ?>
</table>