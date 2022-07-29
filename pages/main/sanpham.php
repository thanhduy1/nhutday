
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id=tbl_danhmuc.id AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img src="administrator/module/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh']?>">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
    <div class="chitiet_sanpham">
        <h3><?php echo $row_chitiet['tensanpham'] ?></h3>
        <p><input class="themgiohang" name="themgiohang" type="submit" value="Đăng Ký Tư Vấn Dịch Vụ"></p>
        <p style="font-weight: bold;">1.    Quy trình phục vụ</p>
        <p>Bước 1: Phụ huynh cung cấp lịch học, địa điểm học của con cho Đón con An toàn</p>
        <p>Bước 2: Đón con An toàn sẽ đi khảo sát quãng đường và báo giá dịch vụ</p>
        <p>Bước 3: Phụ huynh ký hợp đồng đưa đón con theo lịch học với Đón con An toàn theo tháng, quý hoặc tuần. Ghi chú: Sau 3 buổi đưa đón, nếu phụ huynh không hài lòng điều gi với nhân viên của Đón con An toàn, phụ huynh có quyền yêu cầu đổi nhân viên hoặc chấm dút hợp đồng mà không phải trả bất kỳ chi phí nào.</p>
        <p style="font-weight: bold;">2.    Đội ngũ nhân viên đưa đón trẻ bằng xe máy</p>
        <p>Các bạn sinh viên nam/nữ của các trường trung cấp, cao đẳng, đại học trên địa bàn thành phố Trà Vinh được tuyển chọn, sàng lọc kỹ càng đặc biệt về kỹ năng lái xe, nhanh nhẹn, phẩm chất đạo đức tốt, trách nhiệm cao với công việc. Các chú cán bộ, công nhân viên chức đã về hưu nhưng còn đảm bảo sức khỏe làm việc Nhân viên sau khi được xét duyệt, phải ký hợp đồng cam kết trước công ty và quý phụ huynh về trách nhiệm công việc được giao.</p>

        


    </div>
</form>
</div>
<?php
}
?> 