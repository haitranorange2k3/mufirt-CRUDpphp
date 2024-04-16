<?php
// lay id cua edit
$id = $_GET['id'];

// ket noi 
require_once 'ketnoi.php';

// cau lenh de lay thong tin sinh vien co id = $id 
$edit_sql = "SELECT * FROM sinhvien WHERE id = $id";
$result = mysqli_query($conn, $edit_sql);
$r = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sua Sinh Vien</title>
    <link rel="stylesheet" href="asset/boostrap/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
      <h1>Form SUA Sinh Vien</h1>
      <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$r['id']?>">
        <div class="form-group">
          <label for="hoten">Ho ten</label>
          <input type="text" id="hoten" class="form-control" name="hoten" value="<?=$r['hoten']?>"/>
        </div>
        <div class="form-group">
          <label for="masv">Ma SV</label>
          <input type="text" id="masv" class="form-control" name="masv" value="<?=$r['masv']?>"/>
        </div>
        <div class="form-group">
          <label for="lop">Lop</label>
          <input type="text" id="lop" class="form-control" name="lop" value="<?=$r['lop']?>"/>
        </div>
        <button class="btn btn-success"> UPDATE </button>
      </form>
    </div>

    <script src="asset/boostrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
