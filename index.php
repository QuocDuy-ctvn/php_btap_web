<?php
include("include/common.php");

// Load data từ database
$data = db_select("select * from  thongtin");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="icon/css/all.min.css">
    <style>
        body{
            background-color: rgb(255, 255, 255);
            color:black;
            margin: 0;
            display:inline-table;
        }
/* =================================title============================================= */
        .title_large{
            text-align:center;
            background-color: #E0EEE0;
            height: 90px;
        }
        .title_p{
            margin-top: 0px;
            color: black;
        }
        .title_h2{
            margin: 0px;
            padding-top: 20px;
            color: #2E8B57;
        }
/* ==================================tab bar=====================================  */
        .header{
            width:100%;
            background-color:rgb(200, 200, 200);
            height: 50px;
            margin-top: 0px;
            /* tôi dinh  */
            position: sticky;
            /* position: fixed; */
            top: 0px;
        }
        .title{
            /* cho nội dung nằm trên cùng 1 dòng  */
            display:block;
            float: left;
            width: 16.65%;
            text-align: center;
            /* margin-top:12px; */
            padding-top: 12px;
            height: 50px;
            /* border: 0.01px solid rgba(0,0,0); */
        }
        .title:hover{
            background-color:rgb(230, 230, 230);
        }
        a{
            text-decoration:none;
            color:black;
        }

        @media screen and (max-width: 700px) {
            /* khi d9o65 dài 700 trở xuống thì ẩn nội dung 3 và các nội dung còn lại có chiều dài là 20%  */
            .title2  {
                /* ẩn nội dung đi  */
                display: none;
            }
            .title6 {
                /* ẩn nội dung đi  */
                display: none;
            }
            .title{
                float: left;
                width: 24.99999%;
            }
        }
        .Dk_Dn{
            float: left;
            width: 50%;
        }
        .Dk_Dn:hover{
            background-color: #888888;
            border-radius: 10px;
        }
/* ==========================body================================================================= */
/* .section{
    width: 100%;
    background-color: green;
} */
        .box{
            padding: 10px;
        }
        .reponsive{
            padding: 0 6px;
            /* float: left; */
            display: inline-block;
            width: 24.55%;
            margin: 6px 0;
            /* không cần đặt chiều cao cho thẻ- vì nó sẽ tự tính cho phù hợp khi nội dung thay đổi */
            /* nhưng cũng có thể đặt nhưng đặt cố định- thì khi màn hình thay đổi thì sẽ khó nhìn  */
        }
        .gallery:hover{
            background-color: rgb(240, 240, 240);
        }
        div.gallery{
            /* float: left; */
            border: 1px solid #EEEEEE;
        }
        div .gallery img{
            /* chiều cao " AUTO" tự động căn chỉnh  */
            height: auto;
            /* chiều rộng 100%- tức chiếm 100% thẻ chứa nó  */
            width: 100%;
            border: 0px;
        }
        div.content-img{
            text-align: left;
            padding: 0 10px 5px 10px;
        }
        .mua{
            background-color:#B7B7B7;
            width: 30%;
            /* height: 25px; */
            float: left;
            text-align:center;
        }
        .mua:hover{
            background-color:#ECECEC;
        }
        .giohang{
            background-color:#B7B7B7;
            width: 60%;
            float: right;
            text-align:center;
        }
        .giohang:hover{
            background-color: #ECECEC;
        }
    @media only screen and (max-width: 700px) {
        .reponsive {
            width: 49%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .reponsive {
            width: 100%;
        }
    }
    * {
        box-sizing: border-box;
    }
    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
/* =============================footer=============================================== */
.footer{
        padding: 10px;
        background-color:rgb(180, 180, 180);
}
    </style>
</head>
<body>
    <div class="title_large">
        <h2 class="title_h2"><b>QUỐC DUY CUMPUTER</b></h2>
        <P class="title_p">Uy Tín Làm Nên Thương Hiệu</P>
    </div>
    <div class="header">
        <div class="title title1">
            <!-- <i class="fa-solid fa-house"></i> -->
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Trang Chủ</a>
        </div>
        <div class="title title2">
            <!-- <i class="fa-solid fa-wallet"></i> -->
            <a href="#">Hãng</a>
        </div>
        <div class="title title3">
            <!-- <i class="fa-sharp fa-solid fa-desktop"></i> -->
            <a href="#">Màn Hình</a>
        </div>
        <div class="title title4">
            <!-- <i class="fa-solid fa-book"></i> -->
            <a href="#">CPU</a>
        </div>
        <div class="title title5">
            <a href="">
                <!-- <i class="fa-regular fa-hard-drive"></i> -->
                Ổ cứng
            </a>
        </div>
        <div class="title title6">
            <div class="Dk_Dn"><a href="SigUp.php">SigUp</a></div>
            <div class="Dk_Dn"><a href="LogIn.php">LogIn</a></div>
        </div>

    </div>
<div class="section">
            <!-- tim kiem  -->
    <div class="box">
      <div class="container-1">
          <span class="icon"><i class="fa fa-search"></i></span>
          <input type="search" id="search" placeholder="Search..." />
      </div>
    </div>
        <?php 
    	foreach ($data as $_POST) {
            $name = $_POST['ten'];
            $gia = $_POST['gia'];
            $mota = $_POST['thongtin'];
            $img = upload($_POST['img'], true);

            echo <<<EOL
        <div class="reponsive">
            <div class="gallery">
                <a href="$img" target="_blank">
                    <img src=" $img " alt="imge" height="300px" width="300px">
                </a>
                <div class="content-img"> $name</div>
                <div class="content-img"> $gia <sup>đ</sup></div>
                <div class="content-img"> $mota</div>
                <div class="mua ">
                <i class="fa-solid fa-cart-shopping"></i>
                Mua</div>
                <div class="giohang ">
                <i class="fa-solid fa-bag-shopping"></i>
                Thêm Vào Giỏ</div>
            </div>
        </div>
    EOL;
    }
    ?>
    
</div>
    <div class="footer">
        <address style="text-align: center;">
            Contact: QuocDuy-ctvn <br>
            Number Phone: 0901007221 <br>
            Email address: quocduyctcn@gmail.com <br>
        </address>
    </div>
</body>
</html>