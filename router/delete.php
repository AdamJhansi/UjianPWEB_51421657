<?php require_once('..\connection.php');

$iddel = $_POST['id'];
mysqli_query($conn, "DELETE FROM siswa WHERE id='$iddel'"); 

header('location:../table.php'); 
?>
