
<?php
include("../../include/common.php");
// check_login();
if (is_method_post()) {
	// upload và nhận lại filename
	$name = $_POST["ten"] ?? "";
	$gia = $_POST["gia"] ?? "";
	$mota = $_POST["thongtin"] ?? "";
	// Lưu file 
	$img = upload_and_return_filename("img","thongtin");

	$sql = "insert into thongtin( img, gia, ten, thongtin)
			values( ?, ?, ?, ?)";
	$data = array($img, $gia, $name, $mota);
	db_execute($sql, $data);

	js_alert("Thêm Thông Tin thành công");
	js_redirect_to("/admin/thongtin/");	
}

$_title = "Thêm Thông Tin";
include("../../_header.php");
?>

<div>
<!-- action="/btap/admin/index.php" -->
    <form enctype="multipart/form-data"  method="post" >
        <label for="ten">Nhập Tên Máy Tính: </label>
        <input type="text" name="ten" id="ten" requied> <br>
        <label for="gia">Nhập Giá: </label>
        <input type="text" name="gia" id="gia" requied> <br>
        <label for="thongtin">Mô Tả: </label>
        <input type="text" name="thongtin" id="thongtin" requied> <br>
        <label for="img">Chọn file Ảnh: </label>
        <input type="file" name="img" id="img"  accept=".png, .jpg, .jpeg" requied> <br>
        <input type="submit" value="Thêm Sản Phẫm">
    </form>
</div>




<?php include("../../_footer.php"); ?>


