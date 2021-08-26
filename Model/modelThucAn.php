<?php
    include_once("ketnoi.php");
    class modelMonAN
    {
               
        function SelectAllMonAn(){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {
                $string = "select * from monan";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;
            }
            else
                return false;
        }

               
        function TimKiemMonAn($monan){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {
                $string = "SELECT DISTINCT monan.tenma ,monan.hinh 
                FROM loaimonan, ctnlmonan, nguyenlieu, monan
                WHERE monan.mama = ctnlmonan.mama
                AND nguyenlieu.manl = ctnlmonan.manl
                And loaimonan.mal = monan.mal 
                AND monan.tenma like '%$monan%'
                ";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;
            }
            else
                return false;
        }

        function TimKiemMonAnNangCao($monan,$nl){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {  
                $string = "SELECT DISTINCT monan.tenma, monan.hinh
                FROM loaimonan, ctnlmonan, nguyenlieu, monan
                WHERE monan.mama = ctnlmonan.mama
                AND nguyenlieu.manl = ctnlmonan.manl
                AND loaimonan.mal = monan.mal
                AND loaimonan.tenloai LIKE '%$monan%'
                AND nguyenlieu.tennl LIKE '%$nl%'";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;
            }
            else
                return false;
          }

         function TimKiemLoaiMon($monan){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {  
                $string = " SELECT DISTINCT monan.tenma, monan.hinh
                FROM loaimonan, monan
                WHERE monan.mal = loaimonan.mal
                AND loaimonan.tenloai LIKE '%$monan%'
                ";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;
            }
            else
                return false;
        }

        function TimKiemNguyenLieu($monan){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {  
                $string = " SELECT DISTINCT monan.tenma, monan.hinh
                FROM ctnlmonan, nguyenlieu, monan
                WHERE monan.mama = ctnlmonan.mama
                AND nguyenlieu.manl = ctnlmonan.manl
                AND nguyenlieu.tennl LIKE '%$monan%'";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;
            }
            else
                return false;
        }
        // function TimKiemMonMan_1($monan){
        //     $con;
        //     $p = new clsketnoi();
        //     if($p->ketnoiDB($con))
        //     {  
        //         $string = "SELECT * form loaimonan where tenloai like '%$monan%' ";
        //         $table = mysql_query($string);
        //         $p->dongketnoi($con);
        //         return $table;
        //     }
        //     else
        //         return false;
        // }
        

    }

?>
