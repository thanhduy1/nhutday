<?php
if(isset($_GET['trang'])){
  $page=$_GET['trang'];
}else{
  $page='';
}
if($page==''||$page==1){
  $begin = 0;
}else{
  $begin = ($page*10)-10;
}
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id=tbl_danhmuc.id ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,10";
$query_pro = mysqli_query($mysqli,$sql_pro);
?>
<?php
include("pages/slider.php");
?>

 <P class="tk">
 <form action="index.php?quanly=timkiem" method="POST">
 <input type="text" placeholder="Tìm Kiếm..." name="tukhoa" style="width: 1055px;">
 <input type="submit" name="timkiem" value="Tìm Kiếm">
</form>
</p>
<div class="spmn">
<div class="danhmuc" style="text-align:center"><h3 class="34" style="">Thư Ngỏ</h3>
</div>
<div class="thungo">
    <div class="thungo1">
        <img src="images/tn.jpeg">
    </div>
    <form method="" action="">
    <div class="tthungo">
      <p style="text-align:center;line-height: 85px;font-size: 15px;font-weight: bold;font-style: oblique;">
      Kính gửi Quý Nhà trường, Quý khách hàng, đối tác!
      </p>
      <p style="font-weight: bold;">Lời đầu tiên, Công ty  TNHH TM và DV DONCON – Đón con An toàn xin gửi tới Quý
         Nhà Trường, Quý Khách hàng, đối tác lời chào trân trọng cùng lời chúc sức khỏe và
         thành công!
      </p>
      <p style="font-weight: bold;">
      Công ty  TNHH TM và DV DONCON là công ty chuyên cung cấp dịch vụ đưa đón học sinh và vận chuyển hành khách.
       Ngay từ khi ra đời, chúng tôi luôn kiên định với mục tiêu xây dựng thương hiệu “Đón con An toàn” nhằm mang
        đến cho các con những trải nghiệm dịch vụ đưa đón chất lượng cao, giúp các Nhà trường có giải pháp đưa đón
         thuận tiện, linh hoạt, an toàn đồng thời giúp các bậc phụ huynh yên tâm công tác.
      </p>
      <p style="font-weight: bold;">
      Trải qua chặng đường 5 năm hoạt động và không ngừng phát triển,
       Đón con an toàn đã từng bước xây dựng được quy trình làm việc chuyên nghiệp, 
       khép kín. Đội ngũ nhân viên luôn được trau dồi, tu dưỡng và ý thức được sứ mệnh
        phục vụ khách hàng của mình.
      </p>
      <p style="font-weight: bold;">
      Đón con An toàn luôn trân trọng giá trị nền tảng cho sự phát triển, 
      đó là các cơ hội được hợp tác với Quý Nhà trường, Quý khách hàng, đối tác. 
      Và không có bất kỳ khó khăn nào có thể ngăn cản chúng tôi mang lại những giá trị 
      phù hợp với mong muốn và lợi ích của Quý khách hàng, đối tác. Chúng tôi tin tưởng 
      rằng với tập thể  đoàn kết, vững mạnh và sự ủng hộ của Quý khách hàng, đối tác, Đón 
      con an toàn chắc chắn sẽ phát triển mạnh mẽ và lan tỏa nhiều hơn nữa giá trị cho cộng đồng.
      </p>
      <p style="line-height: 30px;font-size: 15px;font-weight: bold;font-style: oblique;">
      Trân trọng cảm ơn!
      </p>
    </div>
</form>
</div>

  <style>
    ul.list_trang li {
    float: left;
    margin: auto;
    padding: 15px;
    background: burlywood;
    display: block;
    font-size: x-large;
    font-weight: bold;
    border-radius: 10px;
    
    
    
}
ul.list_trang li a {
    color: #;
    color: #000;
    text-align: center;
    text-decoration: none;
   
}
  </style>
  <div style="clear:both;"></div>
  <?php
   $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
   $row_count = mysqli_num_rows($sql_trang);
   $trang= ceil($row_count/10);

  ?>
  <ul class="list_trang">
    <?php
    for($i=1;$i<=$trang;$i++){
    ?>
 
    <?php
    }
    ?>
  
    
  </ul>
  <div class="spmn1">
<div class="danhmuc" style="text-align:center"><h3 class="34" style=""></h3>
</div>
  <div>
  <img class="anhtrangchu" src="images/trangchu.png">
  </div>
  <div>
 