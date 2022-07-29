<?php
  $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id DESC";
  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

?>
<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
  unset($_SESSION['dangnhap']);
}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ĐónCon</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Trang Chủ</a></li>
        <?php
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id']?>"><?php echo $row_danhmuc['tendanhmuc']?> </a></li>
        <?php
        }
        ?>
        <li><a href="index.php?quanly=danhmucbaiviet">Tin Tức</a></li>
        
      
        
      </ul>
      
      
       <ul class="nav navbar-nav navbar-right">
      <?php
       if(isset($_SESSION['dangnhap'])){
        ?>
        <li><a href="index.php?quanly=giohang"><span></span><?php echo 'Xin Chào : '.$_SESSION['dangnhap']?></a></li>
        <li><a href="index.php?dangxuat=1"><span></span> Đăng Xuất</a></li>
        <?php
       }else{
        ?>
        <li><a href="index.php?quanly=dangnhap"><span ></span> Đăng Nhập</a></li>
        <li><a href="index.php?quanly=dangky"><span ></span> Đăng Ký</a></li>
        <?php
       }
       ?>
      
      </ul>
     
    </div>
  </div>
</nav>