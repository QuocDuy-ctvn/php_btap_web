<?php
include("../../include/common.php");

// Load data từ database
$data = db_select("select * from  thongtin");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <link rel="stylesheet" href="icon/css/all.min.css">
    <style>
        body{
            background-color: rgb(255, 255, 255);
            color:black;
            margin: 0;
        }
/* =================================title============================================= */
        .title_large{
            text-align:center;
            background-color: #E0EEE0;
            height: 90px;
        }
        .title_p{
            margin-top: 0px;
            color:  black;
        }
        .title_h2{
            margin: 0px;
            padding-top: 20px;
            color:  #2E8B57;
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

/* ==========================body================================================================= */
.add{
    margin: 10px 0px 10px 7px;
    padding: 2px;
    width: 120px;
    background-color: #888888;
    border: solid #777777;
    border-radius: 10px;
}
        .reponsive{
            padding: 0 6px;
            /* float: left; */
            display: inline-block;
            width: 24.55%;
            margin: 6px 0;

            /* height: 200px; */
            /* không cần đặt chiều cao cho thẻ- vì nó sẽ tự tính cho phù hợp khi nội dung thay đổi */
            /* nhưng cũng có thể đặt nhưng đặt cố định- thì khi màn hình thay đổi thì sẽ khó nhìn  */
        }
        .gallery:hover{
            background-color: rgb(240, 240, 240);
        }
        div.gallery{
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
    .Ud_Dl{
        width: 100%;
    }
    .delete{
        float: left;
        width: 49%;
        text-align: center;
        background-color: rgb(200, 200, 200);
        /* border-radius: 20%; */
        border: 1px solid #888888;
    }
    .update{
        text-align: center;
        background-color: rgb(200, 200, 200);
        border: 1px solid #888888;
    }
    .delete:hover{
        background-color: rgb(150, 150, 150);
    }
    .update:hover{
        background-color: rgb(150, 150, 150);
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
            <!-- <i class="fa-solid fa-toilet-portable"></i> -->
            <a href="#">Hãng</a>
        </div>
        <div class="title title3">
            <!-- <i class="fa-sharp fa-solid fa-desktop"></i> -->
            <a href="#">Màn Hình</a>
        </div>
        <div class="title title4">
            <!-- <i class="fa-sharp fa-solid fa-microchip"></i> -->
            <a href="#">CPU</a>
        </div>
        <div class="title title5">
            <a href="">
                <!-- <i class="fa-regular fa-hard-drive"></i> -->
                Ổ cứng
            </a>
        </div>
        <div class="title title6">
            <a href="">
                <!-- <i class="fa-solid fa-user-lock"></i> -->
                <a href="../../index.php">Đăng Xuất</a>
            </a>
        </div>

    </div>
<div class="section">
    <div class="add">
        <a href="create.php">Thêm Sản Phẫm</a>
    </div>
    <?php 
	foreach ($data as $_POST) {
        $name = $_POST['ten'];
        $gia = $_POST['gia'];
        $mota = $_POST['thongtin'];
        $img = upload($_POST['img'], true);
        $id = $_POST['id'];
        echo <<<EOL
    <div class="reponsive">
        <div class="gallery">
            <a href="#" target="_blank">
                <img src=" $img " alt="imge" height="300px" width="300px">
            </a>
            <div class="content-img"> $name</div>
            <div class="content-img"> $gia <sup>đ</sup></div>
            <div class="content-img"> $mota</div>
            <div class="Ud_Dl">
                <div class="delete"><a href="delete.php?id=$id">Xóa</a></div>
                <div class="update"><a href="edit_infor.php?id=$id">Sửa</a></div>
            </div>
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