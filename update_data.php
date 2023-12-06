<?php
require_once('connection.php');

if(isset($_GET['id']))
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
        $data = mysqli_fetch_assoc($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>
    
<div class="container">
<div class="update-container">
    <form action="router/update.php" method="post">
        <h1>Update Data</h1>
        <span>Sudah yakin data mu benar?</span>
        <input type="text" name="id" value="<?php echo $data['id']; ?>"readonly>
        <input type="text" name="npm" placeholder=" NPM " value="<?php echo $data['npm']; ?>">
        <input type="text" name="nama" placeholder=" Nama " value="<?php echo $data['nama']; ?>">
        <input type="text" name="kelas" placeholder=" Kelas " value="<?php echo $data['kelas']; ?>">
        <input id="input-data" type="submit" value="UPDATE">
    </form>
</div>
</div>
</body>
</html