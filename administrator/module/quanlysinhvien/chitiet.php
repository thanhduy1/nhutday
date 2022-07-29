<?php
$sql_chitiet_sv = "SELECT * FROM tbl_sinhvien WHERE id_sinhvien ='$_GET[id_sinhvien]' LIMIT 1";
$query_chitiet_sv = mysqli_query($mysqli,$sql_chitiet_sv);
$sql_lop = "SELECT * FROM tbl_lop ORDER BY id_lop DESC";
        $query_lop = mysqli_query($mysqli,$sql_lop);
        $row_lop = mysqli_fetch_array($query_lop);
       
?>
<table></table>
<form class="form-group" action="">
<?php
while($row = mysqli_fetch_array($query_chitiet_sv)){
?>
<img src="module/quanlysinhvien/uploads/<?php echo $row['anhsv']?>" width="150px"><br><br><br>
<label class="container" for="">Mã Sinh Viên :  <?php echo $row['masv']?> </label><br><br>
<label class="container" for="">Lớp :  <?php echo $row_lop['tenlop']?> </label><br><br>
<label class="container" for="">Tên Sinh Viên :  <?php echo $row['tensv']?></label><br><br>
<label class="container" for="">Ngày Sinh :  <?php echo $row['ngaysinh']?></label><br><br>
<label class="container" for="">Giới Tính :  <?php
        if($row['gioitinh'==1]){
        ?>
        Nam
        <?php
        }else{
        ?>
        Nữ
        <?php
        }
        ?>
        </label><br><br>
        <label class="container" for="">Trạng Thái :  <?php
        if($row['trangthai'==1]){
        ?>
        Đang Học
        <?php
        }else{
        ?>
        Thôi Học
        <?php
        }
        ?>
        </label><br><br>
        
<label class="container" for="">Hệ Đào Tạo :  <?php echo $row['hedaotao']?></label><br><br>
<label class="container" for="">Ngành :  <?php echo $row['nganh']?></label><br><br>
<label class="container" for="">Niên Khóa :  <?php echo $row['nienkhoa']?></label><br><br>
<label class="container" for="">Số Điện Thoại :  <?php echo $row['sdtsv']?></label><br><br>

      



<?php
}
    ?>
</form>
</table>