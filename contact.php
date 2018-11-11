<?php
include('config.php');
if (isset($_POST['contact']))
{
session_start();
$username = mysqli_real_escape_string($db,$_POST['name']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$message = mysqli_real_escape_string($db,$_POST['message']);

$sql = " insert into message(name,email,phone,message) values('$username','$email','$phone','$message')";
$query = mysqli_query($db,$sql);
$_SESSION['message']= "Message sent successfully";
header("location: index.php");
}
