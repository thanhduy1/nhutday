<?php
$sql_sua_sv = "SELECT * FROM tbl_sinhvien WHERE id_sinhvien ='$_GET[id_sinhvien]' LIMIT 1";
$query_sua_sv = mysqli_query($mysqli,$sql_sua_sv);
?>
<table class="table table-bordered table-striped" border=1 width=100%>
<?php
while($row = mysqli_fetch_array($query_sua_sv)){
?>
<form method="POST" action="module/quanlysinhvien/xuly.php?id_sinhvien=<?php echo $row['id_sinhvien']?>" enctype="multipart/form-data">
    <tr>
        <td>Mã Sinh Viên</td>
      
        <td><input type="text" value="<?php echo $row['masv']?>" name="masv"></td>
    </tr>
    <tr>
        <td>Tên Sinh Viên</td>
      
        <td><input type="text" value="<?php echo $row['tensv']?>" name="tensv"></td>
    </tr>
    <tr>
        <td>Ảnh Sinh Viên</td>
      
    <td>
        <input type="file" name="anhsv">
        <img src="module/quanlysinhvien/uploads/<?php echo $row['anhsv']?>" width="150px">
    </td>

    </tr>
    <tr>
        <td>Ngày Sinh</td>
      
        <td><input type="text" value="<?php echo $row['ngaysinh']?>" name="ngaysinh"></td>
    </tr>
    <tr>
        <td>Giới Tính</td>
      
        <td><select name="gioitinh"> 
        <?php
        if($row['gioitinh'==1]){
        ?>
        <option value="1" selected>Nam</option>
        <option value="0">Nữ</option>
        <?php
        }else{
        ?>
        <option value="1">Nam</option>
        <option value="0" selected>Nữ</option>
        <?php    
        }
        ?>
      </select></td>
    </tr>
    <tr>
        <td>Trạng Thái</td>
      
        <td><select name="trangthai"> 
        <?php
        if($row['trangthai'==1]){
        ?>
        <option value="1" selected>Đang Học</option>
        <option value="0">Thôi Học</option>
        <?php
        }else{
        ?>
        <option value="1">Đang Học</option>
        <option value="0" selected>Thôi Học</option>
        <?php    
        }
        ?>
      </select></td>
    </tr>
    <tr>
        <td>Hệ Đào Tạo</td>
      
        <td><input type="text" value="<?php echo $row['hedaotao']?>" name="hedaotao"></td>
    </tr>

    <tr>
        <td>Ngành</td>
    
   <td><input type="text" value="<?php echo $row['nganh']?>" name="nganh"></td>
    </tr>
    <tr>
        <td>Niên Khóa</td>
    
   <td><input type="text" value="<?php echo $row['nienkhoa']?>" name="nienkhoa"></td>
    </tr>
    <tr>
        <td>Số Điện Thoại</td>
    
   <td><input type="text" value="<?php echo $row['sdtsv']?>" name="sdtsv"></td>
    </tr>
    <tr>
        <td>Lớp</td>
    
    <td>
    <select name="lop"> 
        <?php
        $sql_lop = "SELECT * FROM tbl_lop ORDER BY id_lop DESC";
        $query_lop = mysqli_query($mysqli,$sql_lop);
        while($row_lop = mysqli_fetch_array($query_lop)){
            if($row_lop['id_lop']==$row['id_lop']){
        ?>
        <option selected value="<?php echo $row_lop['id_lop']?>"><?php echo $row_lop['tenlop']?></option>
        <?php
        }else{
        
            ?>
            <option value="<?php echo $row_lop['id_lop']?>"><?php echo $row_lop['tenlop']?></option>
            <?php
        }
        }
        ?>
      </select>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suasinhvien" value="Sửa TT Sinh Viên" ></td>
    </tr>
    </form>
    <?php
}
    ?>
</table>