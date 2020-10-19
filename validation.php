<?php
 session_start();
 
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con, 'logindb');
 $name = $_POST['user'];
 $pass = $_POST['password'];

 $s = "select * from login where name = '$name'  && password ='$pass'";
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 

 if($num == 1)
 {

  header('location:register1.php');
 
 }
 else{
  $_SESSION['username'] =  $name;
  header('location:home.php'); 
 }
 ?> 
