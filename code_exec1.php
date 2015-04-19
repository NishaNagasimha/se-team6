<?php
session_start();
include('Connection1.php');
$userId=$_POST['userId'];
$email=$_POST['email'];
$college=$_POST['college'];
$school=$_POST['school'];
$password=$_POST['password'];
$birthday=$_POST['birthday'];
$sex=$_POST['sex'];
mysql_query("INSERT INTO user(Id,Bdate,Email,Gender,College,School)VALUES('$userId', '$birthday', '$email','$sex','$college','$school')");
mysql_query("INSERT INTO authentication(Id,password)VALUES('$userId', '$password')");
header("location: login1.php?remarks=success");
mysql_close($con);
?>