<?php
    include_once("ketnoi.php");
    class modelCongThuc
    {
        function SelectCongThuc(){
            $con;
            $p = new clsketnoi();
            if($p->ketnoiDB($con))
            {
                $string = "select * from congthuc";
                $table = mysql_query($string);
                $p->dongketnoi($con);
                return $table;
            } else {
                return false;
            }
        }

    }

?>