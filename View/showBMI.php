
            <?php
            include_once("Controll/cTimKiemBMI.php");
            class show{
                function showsk($chieucao,$cannang){

                    $p = new tinhBMI();
                
                    $tchieucao = (($chieucao)/100);
                    $BMI = (($cannang)/($tchieucao*$tchieucao));

                    $tbsuckhoe = $p->BMI($BMI);

                    if($tbsuckhoe)
                    {
                        if(mysql_num_rows($tbsuckhoe)>0)
                        {
                            $dem=0;
                            echo "<table width=100% >";
                            while($row = mysql_fetch_assoc($tbsuckhoe))
                            {
                                if($dem==0)
                                {
                                    echo "<tr>";                    
                                }
                                echo "<td  width=25% height=100px align=center>";
                                echo "<img width=130px height=150px src='images/".$row['hinh']."'> <br>";
                                echo 'Tên món ăn : '.$row['tenma'] . "<br>";
                                echo 'Calo : '.$row['Calo'];
                                echo "</td>";
                                $dem++;
                                if($dem%4==0)
                                {
                                    echo "</tr>";
                                    $dem=0;
                                }
                            }
                            echo "</table>";
                        }
                        else
                            echo "khong co dong du lieu";
                    }
                    else
                        echo "khong co bang";

                }
            
            }
        
?>
