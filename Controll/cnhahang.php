<?php
    include_once("Model/mnhahang.php");
    class NhaHang
    {
        function ViewNhaHang(){
            $p = new modelNhaHang();
            $nhahang = $p->SelectNhaHang();
            return $nhahang;
        }
    }

?>