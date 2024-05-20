<?php

include("connection.php");
$con = connection();

$id=$_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$sql="UPDATE users SET name='$name', lastname='$lastname', direccion='$direccion', celular='$celular', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}

?>