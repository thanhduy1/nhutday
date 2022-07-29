<div class="clear">
  
</div>
<div style="overflow: auto;" id="main">
<div class="sider">
<ul class="nav navbar-nav">
        

        <li><a class="glyphicon glyphicon-home" style="font-size: medium;font-weight: bold;color: #9d9d9d;" href="#">Trang Chủ</a></li>
        <li>
          <a class="glyphicon glyphicon-equalizer" style="font-size: medium;font-weight: bold;color: #9d9d9d;" href="index.php?action=quanlykhoa&query=them">Khoa</a>
        </li>
        <li><a class="glyphicon glyphicon-th" style="font-size: medium;font-weight: bold;color: #9d9d9d;" href="index.php?action=quanlylop&query=them">Lớp</a></li>
        <li><a class="glyphicon glyphicon-education" style="font-size: medium;font-weight: bold;color: #9d9d9d;" href="index.php?action=quanlysinhvien&query=them">Sinh viên</a></li>
        <li><a class="glyphicon glyphicon-user" style="font-size: medium;font-weight: bold;color: #9d9d9d;" href="index.php?action=quanlydonhang&query=lietke">Khách Hàng</a></li>
        <li><a class="glyphicon glyphicon-th-list" style="font-size: medium;font-weight: bold;color: #9d9d9d;" href="index.php?action=quanlydanhmucbaiviet&query=them">Danh Mục Bài Viết</a></li>
        <li><a class="glyphicon glyphicon-book" style="font-size: medium;font-weight: bold;color: #9d9d9d;" href="index.php?action=quanlybaiviet&query=them">Quản Lý Bài Viết</a></li>
      
       
        
      </ul>

</div>  
<div class="mainad">
    <?php
if(isset($_GET['action']) && $_GET['query']){
    $tam = $_GET['action'];
    $query = $_GET['query'];
 }else{
    $tam = '' ;
    $query ='';
 }
 if($tam=='quanlykhoa'&& $query =='them'){
    include("module/quanlykhoa/them.php");
    include("module/quanlykhoa/lietke.php");
 }elseif($tam=='quanlykhoa'&& $query =='sua'){
   include("module/quanlykhoa/sua.php");

 }elseif($tam=='quanlylop'&& $query =='them'){
  include("module/quanlylop/them.php");
  include("module/quanlylop/lietke.php");
}elseif($tam=='quanlylop'&& $query =='sua'){
 include("module/quanlylop/sua.php");

}elseif($tam=='quanlysinhvien'&& $query =='them'){
  include("module/quanlysinhvien/them.php");
 
}elseif($tam=='quanlysinhvien'&& $query =='lietke'){
  include("module/quanlysinhvien/lietke.php");
 }elseif($tam=='quanlysinhvien'&& $query =='chitiet'){
  include("module/quanlysinhvien/chitiet.php");
 }elseif($tam=='quanlysinhvien'&& $query =='sua'){
 include("module/quanlysinhvien/sua.php");

}elseif($tam=='quanlydanhmucsanpham'&& $query =='them'){
  include("module/quanlydanhmucsanpham/them.php");
  include("module/quanlydanhmucsanpham/lietke.php");


}elseif($tam=='quanlydanhmucsanpham'&& $query =='sua'){
  include("module/quanlydanhmucsanpham/sua.php");

}
 elseif($tam=='quanlysanpham'&& $query =='them'){
   include("module/quanlysanpham/them.php");
   include("module/quanlysanpham/lietke.php");


 }elseif($tam=='quanlysanpham'&& $query =='sua'){
   include("module/quanlysanpham/sua.php");

 }
 elseif($tam=='quanlydonhang'&& $query =='lietke'){
   include("module/quanlydonhang/lietke.php");

 } 
 elseif($tam=='donhang'&& $query =='xemdonhang'){
   include("module/quanlydonhang/xemdonhang.php");

 }elseif($tam=='quanlydanhmucbaiviet'&& $query =='them'){
  include("module/quanlydanhmucbaiviet/them.php");
  include("module/quanlydanhmucbaiviet/lietke.php");

}elseif($tam=='quanlydanhmucbaiviet'&& $query =='sua'){
  include("module/quanlydanhmucbaiviet/sua.php");

}elseif($tam=='quanlybaiviet'&& $query =='them'){
  include("module/quanlybaiviet/them.php");
  include("module/quanlybaiviet/lietke.php");

}elseif($tam=='quanlybaiviet'&& $query =='sua'){
  include("module/quanlybaiviet/sua.php");

} 
 else{
    include("module/dashboard.php");

 }

?>
  </div>


</div>