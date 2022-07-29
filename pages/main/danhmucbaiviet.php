<?php 
   $sql_bv= "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_dmbaiviet=tbl_danhmucbaiviet.id_dmbaiviet ORDER BY tbl_baiviet.id_baiviet DESC";
   $query_bv = mysqli_query($mysqli,$sql_bv);
?>
<h3>Bài Viết Mới Nhất</h3>
   <ul class="bv">
    <?php
    while($row_bv= mysqli_fetch_array($query_bv)){
    ?>
    <li style="list-style: none;">
        <a href="">
           <p style="font-size: 21px;    color: black;font-weight: bold;"> <?php echo $row_bv['tenbaiviet'] ?></p>
           <img src="administrator/module/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh']?>">
           <p> <?php echo $row_bv['tomtat'] ?></p>
        </a>
    </li>
    <?php
    }
    ?>
   </ul>