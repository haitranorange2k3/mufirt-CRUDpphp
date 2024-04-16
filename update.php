<?php
//nhan du lieu tu form
$id = $_POST['id'];
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];

//ket noi csdl
require_once 'ketnoi.php';

//viet lenh sql de them du lieu
$themsql = "UPDATE sinhvien SET masv = '$masv', hoten = '$ht', lop = '$lop' WHERE id = '$id'";
// echo $themsql; exit;

// thuc thi cau lenh 
 mysqli_query($conn, $themsql);

//in thong bao thanh cong
// echo '<h1>Them thanh cong !</h1>';
header('location: lietke.php');