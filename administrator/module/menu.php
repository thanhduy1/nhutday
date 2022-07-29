<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
  unset($_SESSION['dangnhap']);
  header('Location:login.php');
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
      <a class="navbar-brand" href="#">Administrator</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?dangxuat=1"><span class="glyphicon glyphicon-log-in"></span>Đăng Xuất : <?php if(isset($_SESSION['dangnhap'])){echo $_SESSION['dangnhap'];}?>
        </a></li>
      </ul>
    </div>
  </div>
</nav>