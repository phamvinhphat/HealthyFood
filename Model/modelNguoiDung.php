<?php
    include_once("ketnoi.php");
    class modelNguoiDung
    {
        
        function SelectAllNguoiDung(){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {
                $string = "select * form nguoidung";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;

            }
            else
                return false;
        }


        function dangki($tend, $sdt, $Tuoi, $Chieucao,$cannang,$taikhoan,$matkhau)
        {
            $con;
            $p=new clsketnoi();
         
            if($p->ketnoiDB($con))
            {
               $stringquery =   ( " insert into `hnaj`.`nguoidung` (`tend` , `sdt` , `Tuoi` , `Chieucao` , `cannang` , `taikhoan` ,`matkhau`) values ( '" . $tend . "','" . $sdt . "','" . $Tuoi . "','" .$Chieucao."','" . $cannang . "','" . $taikhoan . "','" . $matkhau . "');" );
                $ketqua=mysql_query("$stringquery");
                $p->dongketnoi($con);
                return $ketqua;
            } else
                return false;
        
        }    


        function dangnhap($taikhoan, $matkhau){
            $con;
           
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {
              
                $stringquery = (" select * from nguoidung where taikhoan = '" . $taikhoan. "' and matkhau = '".$matkhau."'" )  ;
                $ketqua = mysql_query($stringquery);
                $p->dongketnoi($con);
                return $ketqua;
            } else{
                
                return false;
            }
        }


            function kiemtra($taikhoan)
            {
                $con;
                $p = new clsketnoi();
                if($p->ketnoiDB($con))
                {
                    $sql = " select * from nguoidung where taikhoan = '" . $taikhoan . "'" ;
                    $user = mysql_query($sql);
             
                    if(mysql_num_rows($user) > 0){
                        return 0;
                    } else {
                        return 1;
                    }
                } else {
                    return 0;
                }
                $p->dongketnoi($con);
                    
            }
                
        }
    
        
    ?>