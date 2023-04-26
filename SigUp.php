
<?php
include("include/common.php");

if (is_method_post()) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $passs = $_POST["passs"];
    if ($pass != $passs) {
        js_alert("Mật khẩu không đúng- Vui lòng nhập lại!!");
        js_redirect_to("SigUp.php");
        die;
    }

    $sql = "insert into `sigup` values(default,?, ?, ?)";
    $sql_sel = "select * from `SigUp` where name=?";
    $data = db_select($sql_sel, [$name]);

    if (!empty($data)) {
        js_alert("Lỗi! Tên tài khoản đã tồn tại!");
        js_redirect_to("SigUp.php");
        die;
    }
    $password_hash = password_hash($pass, PASSWORD_DEFAULT);
    $params = [$name, $pass, $passs];
    db_execute($sql, $params);
    js_alert("Đăng ký thành công!");
    js_redirect_to("LogIn.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÝ TÀI KHOẢN</title>
    <style>
        body{
            /* cho phần body sát với viền trang web  */
            padding:0px;
            margin:0px;
        }
        .account{
            background-color: #B5B5B5;
            /* chiều cao khhung lớn  */
            height: 250px;
            /* tạo độ rộng từ khung đến viền trang web  */
            margin: 20px ;
            border: 0px solid;
            /* bo góc  */
            border-radius: 10px;
        }
        h2{
            padding: 20px 20px 0px 20px;
            color: black;
            text-align: center;
        }
        .form{
            height: 30%;
            width: 70%;
            background-color:rgb(255,255, 255);
            margin: auto;
            padding: 10px;
            border: 0px solid;
            border-radius: 10px;
        }
        input{
            border: 1px solid black;
           border-radius: 4px;
        }
        .infor{
            float:left;
        }
        .inser{
            float:right;
        }
        @media only screen and (min-width: 500px){
            .form{
                width: 70%;
            }
        }
        @media only screen and (min-width: 700px){
            .form{
                width: 40%;
            }
        }

    </style>
</head>
<body>
    <div class="account">
        <!-- class account bao gồm toàn bộ khung  -->
        <h2> ĐĂNG KÝ TÀI KHOẢN</h1>
        <div class="form">
            <!-- class form bao gồm input && label  -->
        <form method="post" >
            <div class="infor">
                <!-- bao gồm ten đăng nhập &&..  -->
                <label for="name"> Tên đăng nhập:</label>
                <br>
                <label for="pass">Mật khẩu:</label>
                <br>
                <label for="passs">Nhập lại mật khẩu:</label>
                <br>
                <input type="submit" value="Đăng ký">
            </div>
            <div class="inser">
                <!-- inser bao gồm các thè input  -->
                <input type="text" id="name" name="name" ><br>
                <input type="password" id="pass" name="pass"> <br>
                <input type="password" id="passs" name="passs"><br>
            </div>
        
        </form>
    </div>
    </div>
</body>
</html>