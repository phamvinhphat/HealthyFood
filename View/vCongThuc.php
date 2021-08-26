<?php
                include_once("Controll/cCongThuc.php");
                $p = new CongThuc();
                $user = $p->modelcongthuc();
                if(mysql_num_rows($user) > 0)
                {
                    while($row = mysql_fetch_assoc($user)){
                        echo "<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom'>";
                        echo "<div class='blog_box'>";
                        echo " <div class='blog_img_box'>";
                        echo "<a href='".$row['duonglink']."' target='_blank'> <figure><img src='images/".$row['Hinh']."'/> </figure></a>  </div>";
                        echo "<H3>".$row['tencongthuc']."</H3>";
                        echo "<p>".$row['noidung']."</p>";
                        echo "  <a href='#'>Read More <i class='fa fa-long-arrow-right' aria-hidden='true'></i></a>";
                        echo"  </div>";
                        echo " </div>";
                    }
                    

                }
 ?>