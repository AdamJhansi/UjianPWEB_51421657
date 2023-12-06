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
    <title>Delete</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>
<div class="container">
<div class="update-container">
    <form action="router/delete.php" method="post">
        <h1>Delete Data</h1>
        <span>Sudah yakin datamu akan dihapus?</span>
        <input type="text" name="id" value="<?php echo $data['id']; ?>"readonly>
        <input type="text" name="npm"  value="<?php echo $data['npm']; ?>"readonly>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"readonly>
        <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"readonly>
        <input id="input-data" type="submit" value="DELETE">
    </form>
    <a href="index.html"><button>kembali</button></a>
</div>
</div>
</body>
</html>

