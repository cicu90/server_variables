<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['username'] = $username;

$varsesion = $_SESSION['username'];
if($varsesion == null || $varsesion == '' || $password == ''){
  echo 'You dont have authorization';
  die();
}
else {
  header("Location:panel.php");
}
?>