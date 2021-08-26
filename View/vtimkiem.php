<?php
                   
                        include_once("Controll/cMonAN.php");
                        $tk = $_REQUEST["search"];
                        $loai = $_REQUEST["combobox"];
                        $nl = $_REQUEST["nguyenlieu"];
                        $p = new food();

                        if(isset($_REQUEST["btntk"]))
                        {
                            if($tk != ""&& $loai != null&&$nl !=null)
                            {
                                echo"<script>alert('Không được nhập tên và loại hoạc nguyên liêu cùng 1 lúc')</script>";
                            }
                            else    
                            {
                                 if($tk != "")
                                {
                                    $user = $p->tk($tk);
                                    if($user != false)
                                      {
                                          $p->showtk($user);
                                      } else { echo "<script>alert('Không có món ăn đó')</script>";}
                               }
                                else {
                                $user = $p->tknc($loai,$nl);
                                if($user !=false)
                                  {
                                      $p->showtk($user);
                                  } else  echo "<script>alert('Không dữ liệu')</script>";
                                }
                            }
                           

                            $tk = null;
                            $loai = null;
                            $nl = null;
                 
                        }
                        else {  
                            $user = $p->allshow();
                             if($user !=false)
                             {
                                $p->showtk($user);
                             }
                         }
                   
                        
                              
             ?>