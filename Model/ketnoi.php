<?php

    class clsketnoi{

        
        function ketnoiDB(& $con){
            
            $con = mysql_connect("localhost","abc","123");
            mysql_set_charset("UTF-8",$con);
            if($con){
                 return mysql_select_db("hnaj");
            } else {
                return false;
            }
         }

        function dongketnoi($con){
            mysql_close($con);
         }
    }
?>