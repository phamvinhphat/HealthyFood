 <?php 

       
        $chieucao = $_REQUEST["chieucao"];
        $cannang = $_REQUEST["cannang"];
        $gioitinh = $_REQUEST["gioitinh"];
        $ten = $_REQUEST["ten"];
        if(isset($_REQUEST["btntinh"])){
            if($chieucao != '' && $cannang != '' && $gioitinh != '' && $ten != ''){
                if($chieucao > 100 && $chieucao < 500 || $cannang > 10 && $cannang < 1000 )
                 {
                    include_once("showBMI.php");
                    $p = new show();
                    $p->showsk($chieucao, $cannang);
                 } else {
                    echo "<script>alert('Người dùng sai cú pháp phải nhập số ngay chiều cao va cân nặng và chiều cao cần từ 1 met đến 5 met hoặc cần nặng từ 10kg đến 100kg')</script>";   
                    echo  " <figure><img src="."images/img.jpg". " alt="."img"." /></figure> ";   
                 }
            } else {
                echo "<script>alert('Bạn cần điền đày đủ')</script>";
                echo  " <figure><img src="."images/img.jpg". " alt="."img"." /></figure> ";
            }
            
        } else {
            echo  " <figure><img src="."images/img.jpg". " alt="."img"." /></figure> ";
        }

    
        
?>
