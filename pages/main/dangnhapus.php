<?php
if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['tenkhachhang'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_dangky WHERE tenkhachhang='".$taikhoan."'AND matkhau='".$matkhau."' LIMIT 1 ";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
      $row_data = mysqli_fetch_array($row);
        $_SESSION['dangnhap'] = $taikhoan;
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        

        header("Location:index.php");
    }else{
        echo '<script>alert("tài khoản mật khẩu không đúng");</script>';
        header("Location:dangnhapus.php");
    }
}

?>
<form action="" autocomlete="off" method="post">
  

  <div class="container">
    <label for="uname"><b>Tên Khách Hàng</b></label>
    <input type="text" placeholder="Nhập Tên Khách Hàng" name="tenkhachhang" required>

    <label for="psw"><b>Mật Khẩu</b></label>
    <input type="password" placeholder="Nhập Mật Khẩu" name="matkhau" required>

    <button type="submit" name="dangnhap">Đăng Nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Nhớ tài khoản
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a style="font-weight: bold;" href="index.php">Thoát</a> </button>
    <span class="psw">Lấy lại <a href="#">Mật Khẩu</a></span>
  </div>
</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
    form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  height: 300px;
  width:100%;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>