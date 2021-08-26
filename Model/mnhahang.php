<?php
      include_once("ketnoi.php");
    class modelNhaHang
    {
        function SelectNhaHang(){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {
                $string = "select * from nhahang";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;
            } else {
                return false;
            }
        }
    }

?>