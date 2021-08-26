<?php
    include_once("Model/mBMI.php");
    class tinhBMI {

        function BMI($BMI){

            
            $p = new suckhoe();
            $tbsuckhoe = $p->tkcalo($BMI);
            return $tbsuckhoe;
            
        }
    }

?>