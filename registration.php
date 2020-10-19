<?php
 session_start();
header('location:index.php'); 
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con, 'logindb');
 $name = $_POST['user'];
 $pass = $_POST['password'];

 $s = "select * from login where name = '$name'";
  
 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);
 

 if($num == 1)
 {
  echo " Username Already used";
 }
 else{
  $reg = " insert into login(username, password) values ('$name', '$pass')";
  mysqli_query($con, $reg);
  echo " Registration Successful";
 }
 ?>
