<?php

/*
 * Thay "hoc_php" bằng tên thư mục của bạn ở htdocs
 */

// Thư mục gốc ở htdocs (đối với XAMPP)
define('ROOT_PATH', "/btap");

// Thư mục chứa file upload bởi user
define('UPLOAD_PATH', "/btap/upload");

// Đường dẫn đầy đủ đến thư mục hiện tại, không cần chỉnh sửa nếu dùng XAMPP
define('DOCUMENT_ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);

// Thông tin đăng nhập database
$database = [
	"host" => "localhost",
	"db" => "btap",
	"username" => "root",
	"password" => "",
];


