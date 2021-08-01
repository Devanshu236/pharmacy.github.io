<?php
require_once('connection.php');
$name=$_POST['perfume_full_name'];
$email=$_POST['perfume_email'];
$password=$_POST['perfume_password'];
$cpassword= MD5($password);

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
$result = mysqli_query($conn, $sql);

if($result)
{
    header("Location: index.php");
}
else{
    echo "Error:".$sql;
}
?>