<?php
    include_once("Model/mCongThuc.php");
    class CongThuc
    {
        function modelcongthuc(){
            $p = new modelCongThuc();
            $CongThuc = $p->SelectCongThuc();
            return $CongThuc;
        }
    }

?>