<?php
// lay data tu id can xoa
$id = $_GET['id'];
echo $id;

//ket noi
require_once 'ketnoi.php';
//cau lenh sql
$xoa_sql = "DELETE FROM sinhvien WHERE id = $id";

mysqli_query($conn, $xoa_sql);
// echo '<h1>Xoa thanh cong</h1>';
//tro ve trang liet ke
header('location: lietke.php');