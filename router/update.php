<?php require_once('..\connection.php');

$idbaru = $_POST['id'];
$npmbaru = $_POST['npm'];
$namabaru = $_POST['nama'];
$kelasbaru = $_POST['kelas'];

mysqli_query($conn, "UPDATE siswa SET npm='$npmbaru', nama='$namabaru', kelas='$kelasbaru' WHERE id='$idbaru'");

header('location:../table.php'); 
?>
