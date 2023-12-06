<?php require_once('..\connection.php');

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

mysqli_query($conn, "INSERT INTO siswa VALUES('', '$npm', '$nama', '$kelas')");

header('location:../table.php'); 
?>
