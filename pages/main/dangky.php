<?php
if(isset($_POST['dangky'])){
    $tenkhachhang=$_POST['hovaten'];
    $email=$_POST['email'];
    $dienthoai=$_POST['dienthoai'];
    $diachi=$_POST['diachi'];
    $matkhau=md5($_POST['matkhau']);
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
    if($sql_dangky)
    {
        echo'<p style="color:green">Bạn Đã Đăng Ký Thành Công</p>';
        $_SESSION['id_khachhang'] = $mysqli_insert_id($mysqli);

        header('Location:index.php?quanly=dangnhap');
    }
}
?>
<form action="" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1 style="text-align:center">Đăng Ký Tài Khoản</h1>
    <p style="text-align:center">Vui Lòng Điền Đầy Đủ Thông Tin Phía Dưới Để Tạo Tài Khoản</p>
    <hr>
    <label for="email"><b>Tên Khách Hàng</b></label>
    <input type="text" placeholder="Nhập Tên Khách Hàng" name="hovaten" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Nhập Email Khách Hàng" name="email" required>
    
    <label for="email"><b>Điện Thoại</b></label>
    <input type="text" placeholder="Nhập Số Điện Thoại Khách Hàng" name="dienthoai" required>

    <label for="psw"><b>Địa Chỉ</b></label>
    <input type="text" placeholder="Nhập Địa Chỉ Khách Hàng" name="diachi" required>

    <label for="psw-repeat"><b>Mật Khẩu</b></label>
    <input type="password" placeholder="Nhập Mật Khẩu Khách Hàng" name="matkhau" required>


    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="index.php?quanly=dangnhap">Nếu Có Tài Khoản Rồi Thì Đăng Nhập</a></button>
      <button type="submit" name="dangky" class="signupbtn">Đăng Ký</button>
    </div>
  </div>
</form>

<style>
    * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>