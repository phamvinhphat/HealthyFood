<?php

            include_once("Controll/DangKiDangNhap.php");
            $username1 = $_REQUEST["username"];
            $password1 = $_REQUEST["password"];
            
            $p = new hh();
            if(isset($_REQUEST["dangnhap"]))
            {
                if($p->dangnhap1($username1, $password1) == 1)
                {
                    echo "<script>alert('Đăng nhập thành công')</script>";  
                    echo header("refresh:0; url='trangchu.php?themtaikhoan'");
                } else {
                    echo "<script>alert('da dang ki that bai !!!')</script>";  
                } 
  
             }
            
        ?>