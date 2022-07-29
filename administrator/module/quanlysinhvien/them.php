<h1 style="text-align:center">Thêm Sinh Viên</h1>
<table class="table table-bordered table-striped" width=100%>
<form method="POST" action="module/quanlysinhvien/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Mã Sinh Viên</td>
      
        <td><input type="text" name="masv"></td>
    </tr>
    <tr>
        <td>Tên Sinh Viên</td>
      
        <td><input type="text" name="tensv"></td>
    </tr>
    <tr>
        <td>Ảnh Sinh Viên</td>
      
        <td><input type="file" name="anhsv"></td>
    </tr>
    <tr>
        <td>Ngày Sinh</td>
      
        <td><input type="text" name="ngaysinh"></td>
    </tr>
    <tr>
        <td>Giới Tính</td>
      
        <td><select name="gioitinh"> 
        <option value="1">Nam</option>
        <option value="0">Nữ</option>
      </select></td>
    </tr>
    <tr>
        <td>Trạng Thái</td>
      
        <td><select name="trangthai"> 
        <option value="1">Đang Học</option>
        <option value="0">Thôi Học</option>
      </select></td>
    </tr>
    <tr>
        <td>Hệ Đào Tạo</td>
      
        <td><input type="text" name="hedaotao"></td>
    </tr>

    <tr>
        <td>Ngành</td>
    
   <td><input type="text" name="nganh"></td>
    </tr>
    <tr>
        <td>Niên Khóa</td>
    
   <td><input type="text" name="nienkhoa"></td>
    </tr>
    <tr>
        <td>Số Điện Thoại</td>
    
   <td><input type="text" name="sdtsv"></td>
    </tr>
    <tr>
        <td>Lớp</td>
    
    <td>
      <select name="lop"> 
        <?php
        $sql_lop = "SELECT * FROM tbl_lop ORDER BY id_lop DESC";
        $query_lop = mysqli_query($mysqli,$sql_lop);
        while($row_lop = mysqli_fetch_array($query_lop)){
        ?>
        <option value="<?php echo $row_lop['id_lop']?>"><?php echo $row_lop['tenlop']?></option>
        <?php
        }
        ?>
      </select>
    </tr>
    <tr>
        <td style="text-align:center" colspan="2"><input type="submit" name="themsinhvien" value="Thêm Thông Tin Sinh Viên" ></td>
    </tr>
    </form>
    <a class="glyphicon glyphicon-cog" href="index.php?action=quanlysinhvien&query=lietke">Xem Danh Sách Sinh Viên</a>
</table>