<?php

require_once 'ketnoi.php';

$id = $_GET['id'];
// echo $id;

//ket noi
require_once 'ketnoi.php';
//cau lenh sql
$chitiet_sql = "SELECT * FROM sinhvien WHERE id = '$id' ";

$result = mysqli_query($conn, $chitiet_sql);
$r = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/boostrap/css/bootstrap.min.css">
    <script src="asset/boostrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5 spinner-border  ">
        <div class="card"> 
            <div class="card-body">
                <h4><?= $r['masv'] ?></h4>
                <h1 class="card-title"><?= $r['hoten'] ?></h1>
                <p class="card-text"><?= $r['masv'] ?></p>
                <a href="lietke.php" class="btn btn-dark ">Return</a>
            </div>
        </div>
    </div>
</body>

</html>