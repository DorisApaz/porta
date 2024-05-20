<?php
include('connection.php');

$con =connection();

$id=null;
$name= $_POST['name'];
$lastname= $_POST['lastname'];
$direccion= $_POST['direccion'];
$celular= $_POST['celular'];
$email= $_POST['email'];

$sql="INSERT INTO users VALUES('$id','$name','$lastname','$direccion','$celular','$email')";
$query =mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
};
?>