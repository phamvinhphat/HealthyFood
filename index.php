<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Hôm nay ăn gì?</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout Contact_page">


<!-- dang nhap -->
    
    <?php

            include_once("View/vDangNhap.php");
           
    ?>
     


    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li >
                        <a href="index.php">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="about.php">Review Nhà Hàng</a>
                    </li>
                    <li>
                        <a href="recipe.php">Tìm Kiếm Theo Nhu Cầu</a>
                    </li>
                    <li>
                        <a href="blog.php">Công Thức</a>
                    </li>
                    <li class="active">
                        <a href="contact.php">Chuẩn Đoán Sức Khỏe</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.php"><img src="images/Logo2.png" alt="#" /></a>
                        <a class="slogan" href="index.php"><img src="images/Slogon.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone"> Liên Hệ: <img style = "margin-right : 15px ;margin-left: 10px;" src="images/phone_icon.png" alt="#"><a href="#">0389672882</a></li>
                                <li class="dinone"><img style="margin-right: 10px;" src="images/mail_icon.png" alt="#"><a href="#">lehaidangxh@gmail.com.com</a></li>
                                <li class="dinone"><img style="margin-right: 10px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">Bình Tân</a></li>
                                <li class="button_user"><a class="button active" href="dangki.php">Đăng Kí</a></li>
                                <li class="tim kiem"><a class="button" href=""><img style="margin-right: 15px;" src="images/search_icon.png" alt="#"></a> ></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- footer -->
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Nhập Thông Tin  <strong class="white"> </strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form id = "login" class="main_form">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <label for ="username">Username</label>
                                    <input id ="taikoan" class="form-control"  placeholder="Tài Khoản" type="text" name="username">
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <label for ="password">Password</label>
                                    <input type="password"  id ="matkhau" class="form-control" placeholder="Mật Khẩu" type="text" name="password">
                                </div>
                               
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button name = "dangnhap"class="send">Đăng Nhập</button>
                                    
                                </div>
                                
                            </div>
                        </form>


                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/img.jpg" alt="img" /></figure>
                        </div>
                    </div>
                    
                </div>
                <fooetr>
        <div class="footer">
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href=""><img src="images/Logo2.png" alt="logo" /></a>
                          <a class="slogan" href=""><img src="images/Slogon.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            <li > <a href="index.php">Trang Chủ</a></li>
                            <li> <a href="about.php">Review Nhà Hàng</a></li>
                            <li> <a href="recipe.php">Tìm Kiếm Theo Nhu Cầu</a></li>
                            <li class="active"> <a href="blog.php">Công Thức</a></li>
                            <li> <a href="contact.php">Sức Khỏe</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="new">
                            
                            <form class="newtetter">
                               <h1>Nhóm Hôm Nay Ăn Gì?</h1>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Facebook :<a > Trần Tuấn Thành</a></p>
                    <p>SDT :<a > 0389672882 </a></p>
                    <p>Mail:<a > lehaidangxh@gmail.com </a></p>
                    <p>Địa Chỉ :<a > HCM</a></p>
                </div>
            </div>
        </div>
    </fooetr>
          
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>



   <!-- Javascript files -->
    
   <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
     <script src="js/dangnhap.js"></script>
<!--
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

        window.onload =  ()=>{
            this.sessionStorage.setItem("username","sakaos_userooo");
            this.sessionStorage.setItem("password","sakaos_passwordooo");
        }

        var input = document.getElementsByName('input');
        var login = document.getElementById('log-in');
        var form = document.querySelector("form");

        form.onsubmit = () =>{
            reuturn = false;
        }

        login.onclick = ()=>{
            if((input[0].value != "") && (input[1].value != "")){ 

            } else {
                if(input[0].value != ""){
                    input[0].nextElementSibling.textContent = "Username không được để trống"
                    setTimeout(()=> {
                        input[0].nextElementSibling.textContent ="";
                    },2000);
                }
            }
        }


    </script> -->


<!--     
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
 <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

 <script src="js/jquery-3.0.0.min.js"></script>

<script type="text/javascript">

        var a = "ss";
        var b = "s2";

        var taikhoan = document.getElementById("taikhoan").value;
        var matkhau = document.getElementById("matkhau").value;


        var formLogim = doc -->
    <!-- // $(document).ready(function() {
    //     $("#sidebar").mCustomScrollbar({
    //         theme: "minimal"
    //     });

    //     $('#dismiss, .overlay').on('click', function() {
    //         $('#sidebar').removeClass('active');
    //         $('.overlay').removeClass('active');
    //     });

    //     $('#sidebarCollapse').on('click', function() {
    //         $('#sidebar').addClass('active');
    //         $('.overlay').addClass('active');
    //         $('.collapse.in').toggleClass('in');
    //         $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    //     });

    // });


    // window.onload =  ()=>{
    //     this.sessionStorage.setItem("username","sakaos_userooo");
    //     this.sessionStorage.setItem("password","sakaos_passwordooo");
    // }

    // var input = document.getElementsByName('input');
    // var login = document.getElementById('send');
    // var form = document.querySelector("form");

    // form.onsubmit = () =>{
    //     reuturn = false;
    // }

    // login.onclick = () => {
    //     if((input[0].value != "") && (input[1].value != "")){ 
    //         if((input[0].value == sessionStorage.getItem("username")) && (input[1].value == sessionStorage.getItem("password"))){
    //             from.onsubmit = ()=>{return 1}
    //         } else {
    //             if((input[0].value != sessionStorage.getItem("username"))){
    //                 input[0].nextElementSibling.textContent = "Username không được "
    //                     setTimeout(()=> {
    //                         input[0].nextElementSibling.textContent ="";
    //                      },2000);
    //              } 

    //              if((input[1].value != sessionStorage.getItem("password"))){
    //                 input[1].nextElementSibling.textContent = "password không được "
    //                     setTimeout(()=> {
    //                         input[1].nextElementSibling.textContent ="";
    //                      },2000);
    //              } 
    //         }
    //     } else {
    //         if(input[0].value != ""){
    //             input[0].nextElementSibling.textContent = "Username không được để trống"
    //             setTimeout(()=> {
    //                 input[0].nextElementSibling.textContent ="";
    //             },2000);
    //         }
    //     }
    // }
 -->


 

    
</script>

</body>

</html>



