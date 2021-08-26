<?php
    include_once("Model/modelThucAn.php");
    class food
    {
        function tk($monan){
            $p = new modelMonAN();
            $list = $p->TimKiemMonAn($monan);
            if($list!=null)
            {
                return $list;
            }
            else 
            return false;
        }

        function tknc ($monan,$nl){
            $p = new modelMonAN();
            if($monan ==null||$nl ==null) {
                if($nl == null)
                {   
                    $list = $p->TimKiemLoaiMon($monan);
                    
                    if($list!=null)
                    {
                        
                        return $list;
                    }
                    else return false;
                }
                if($monan ==null)
                {
                    $list = $p->TimKiemNguyenLieu($nl);
                    if($list!=null)
                    {
                        return $list;
                    }
                    else return false;
                }
            } else {
                    $list = $p->TimKiemMonAnNangCao($monan,$nl);
                    if($list!=null)
                    {
                        return $list;
                    }
                    else return false;
                }
                
            }
    
            function showtk($list){
                
                 if(($list)!=null)
                    {
                        $dem=0;
                        echo "<table width=100% >";
                        while($row = mysql_fetch_assoc($list))
                        {
                            if($dem==0)
                            {
                                echo "<tr>";                    
                            }
                            echo "<td  width=25% height=100px align=center>";
                            echo "<img width=130px height=150px src='images/".$row['hinh']."'> <br>";
                            echo 'Tên món ăn : '.$row['tenma'] . "<br>";
                            echo "</td>";
                            $dem++;
                            if($dem%4==0)
                            {
                                echo "</tr>";
                                $dem=0;
                            }
                        }
                        echo "</table>";
                    }  else
                        echo "khong co dong du lieu";
             
                }

                
                function allshow(){
                    $p = new modelMonAN();
                    $list = $p->SelectAllMonAn();
                    if($list!=null)
                    {
                        return $list;
                    }
                    else 
                    return false;
                }
                
                    
                    
             
        
    }
?>