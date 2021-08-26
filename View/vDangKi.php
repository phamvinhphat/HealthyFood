<?php
    include_once("Controll/DangKiDangNhap.php");
                        
                        // include_once("php/cnguoidung.php");
                        if(isset($_REQUEST["btndangki"]))
                        {
                             $ten  =$_REQUEST["tennd"];
                             $sdt = $_REQUEST["sdt"];
                             $tuoi = $_REQUEST["tuoi"];
                             $chieucao = $_REQUEST["chieucao"];
                             $cannang = $_REQUEST["cannang"];
                             $taikhoan = $_REQUEST["taikhoan"];
                             $matkhau1 = $_REQUEST["matkhau"];
                             $matkhau2 = $_REQUEST["laimatkhau"];
                             if($ten != '' && $taikhoan !='' && $matkhau1 !='' && $matkhau2 !='')
                             {
                             // check dieu kien thu1 la mat khau nhap lai khong khop
                                     if($matkhau1.value == $matkhau2.value)
                                     { 
                                         if($chieucao > 100 && $chieucao < 500 || $cannang > 10 && $cannang < 1000 )
                                         {
                                            $p = new hh();
                                            $taikhoanmoi = $p->addnguoidung($ten ,$sdt , $tuoi,$chieucao,$cannang,$taikhoan,$matkhau1);
                                            if($taikhoanmoi == 1)
                                            {
                                        
                                                echo "<script>alert('Bạn đã thêm dữ liệu thành công')</script>";
                                                
                                                echo header("refresh:0; url='index.php?themsp'");
                                            }
                                        } else {
                                            echo "<script>alert('Người dùng sai cú pháp chiều cao cần từ 1 met đến 5 met hoặc cần nặng từ 10kg đến 100kg')</script>";      
                                        }
                                   } else {
                                       echo "<script>alert('Mật khẩu không khớp')</script>";
                                   }
                                 } else {
                                    echo "<script>alert('Nhập thông tin đầy đủ')</script>";
                                }
                             }
        ?>   