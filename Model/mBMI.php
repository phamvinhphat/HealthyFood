<?php
      include_once("ketnoi.php");
      class suckhoe 
      {
  
      function tkcalo($calo){
              $con;
              $p = new clsketnoi();
              if($p->ketnoiDB($con))
              {
               
                 if($calo < 18.5){
                        $strquery = "select * from monan where Calo > 250" ;
                        echo  "<script>alert('BMI của bạn là $calo Bạn nên xem lại chế độ ăn uống , bn nên siêng ăn lên một chút nhá ')</script>";
                        $tbmonantc = mysql_query($strquery);
                        $p->dongketnoi($con);
                        return $tbmonantc;
        
        
                  } else if(18.5 < $calo && $calo < 30) {
        
                        $strquery = "select * from monan where Calo > 150 and Calo < 250" ;
                        echo  "<script>alert('BMI của bạn là $calo chỉ số cân bằng cơ thể rất tốt bạn nên tiếp tục duy trì nhá ')</script>";
                        $tbmonanbt = mysql_query($strquery);
                        $p->dongketnoi($con);
                        return $tbmonanbt;
        
                 } else if($calo > 30 ) {
        
                        $strquery = "select * from monan where Calo < 150" ;
                        echo  "<script>alert('BMI của bạn là $calo bạn khá béo bạn cần nên xem lại chế độ ăn uống cảu bản thân ( nhưng béo thì dễ thương :)) )')</script>";
                        $tbmonangc = mysql_query($strquery);
                        $p->dongketnoi($con);
                        return $tbmonangc;
                        
                    }
                }
    }
}
              

?>