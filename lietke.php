<?php
//ket noi
require_once 'ketnoi.php';
//cau lenh
$lietke_sql = 'SELECT * FROM sinhvien ORDER BY lop, hoten';
//thuc thi cau lenh
$result = mysqli_query($conn, $lietke_sql);

// duyet qua resert va in ra
// Kiểm tra và hiển thị dữ liệu
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "<pre>";
//         var_dump($row);
//         echo "</pre>";
//     }
// } else {
//     echo "Không có dữ liệu";
// }
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
    <div class="container">
        <h1>Danh sach sinh vien</h1>
        <a href="them.html" class="btn btn btn-success my-2">THEM</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Ma SV</th>
                    <th>Ho ten</th>
                    <th>Lop</th>
                    <th>Thao tac</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?=$r['masv']?></td>
                        <td><?=$r['hoten']?></td>
                        <td><?=$r['lop']?></td>
                        <td>
                            <a href="edit.php?id=<?=$r['id']?>" class="btn btn-warning">SUA</a>
                            <a href="xoa.php?id=<?=$r['id']?>" class="btn btn-danger mx-2 "
                            onclick="return confirm('Ban muon xoa khong ?')">XOA</a>
                            <a href="detail.php?id=<?=$r['id']?>" class="btn btn-primary ">DETAIL</a>
                        </td>
                    </tr>
                <?php    
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>

</html>