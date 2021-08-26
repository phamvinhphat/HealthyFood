<?php
    include_once("Model/modelNguoiDung.php");
   
    class hh
        {
            function addnguoidung($tend, $sdt, $Tuoi, $Chieucao,$cannang,$taikhoan,$matkhau)
            {
                $p = new modelNguoiDung();
                $user = $p->kiemtra($taikhoan);
                if ($user == 1){ 
                   
                   $user = $p->dangki($tend, $sdt, $Tuoi, $Chieucao,$cannang,$taikhoan,$matkhau);
                   return $user;
                } else   
                    echo "<script>alert('Tài khoản này đã có người sử dụng')</script>";
            }
        
        
          function dangnhap1($taikhoan, $matkhau)
          {    
           
             $p = new modelNguoiDung();
             $user = $p->dangnhap($taikhoan,$matkhau);
              if(mysql_num_rows($user)>0)
              {
              
                 return 1;
              } else {
                return 0;
              }
                
              
            }
     
        }
      
       

?>