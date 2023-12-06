<?php require_once('..\connection.php');

$email = $_POST["email"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password'")
or die(mysqli_error($conn));

if ($data = mysqli_fetch_array($query)){
    header("location:../index.html");
} else {
    header("location:../login.php");
}

?>