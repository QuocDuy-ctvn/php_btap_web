<?php
include("../../include/common.php");
$id = $_GET["id"] ?? "-1";

if (is_method_get()) {
    $sql = "select * from thongtin where id=?";
    $data = db_select($sql, [$id]);
    if (empty($data)) {
        redirect_to("/admin/thongtin");
    }
    $data = $data[0]; 
} else {
    $name = $_POST["ten"] ?? "";
	$gia = $_POST["gia"] ?? "";
	$mota = $_POST["thongtin"] ?? "";
	$img = upload_and_return_filename("img","thongtin");
    if (empty($img)==true) {
        $sql = "UPDATE thongtin SET  gia=?, ten=?,thongtin=?  WHERE id=?"; 
        $data =[ $id, $gia, $name,  $mota];
        db_execute($sql, $data);
        js_alert("Cập Nhập thành công");
        js_redirect_to("admin/thongtin/index.php");
    } else {
        $sql = "UPDATE thongtin SET img=?, gia=?, ten=?, thongtin=?  WHERE id=?";
        $data = [ $img, $gia, $name,  $mota, $id];
        db_execute($sql, $data);
        js_alert("Cập Nhập thành công");
        js_redirect_to("admin/thongtin/index.php");
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Cập Nhập</title>
</head>

<body>

<form enctype="multipart/form-data"  method="post">
        <label for="ten">Nhập Tên Máy Tính: </label>
        <input type="text" name="ten" id="ten"> <br>
        <label for="gia">Nhập Giá: </label>
        <input type="text" name="gia" id="gia"> <br>
        <label for="thongtin">Mô Tả: </label>
        <input type="text" name="thongtin" id="thongtin"> <br>
        <label for="img">Chọn soure Ảnh: </label>
        <input type="file" name="img" id="img"  accept=".png, .jpg, .jpeg"> <br>
        <input type="submit" value="Cập Nhập">
    </form>
</body>

</html>