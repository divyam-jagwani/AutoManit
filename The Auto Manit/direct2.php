<?php
require 'connect.inc.php';
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$sno=$_POST['sno'];

if(!empty($email) && !empty($pass) && !empty($cpass)&& !empty($name)&& !empty($phone)&& !empty($sno))
{
  if($pass==$cpass)
  {
   $query="INSERT INTO auto VALUES('$name', '$sno', '$phone', '$email', '$pass')";
   $query_run=mysql_query($query);

   if($query_run === FALSE) {
    die(mysql_error());

   }
   header("Location:book.php");
   echo $name;


   }
   else

   echo 'Passwords do not match.';
  }
  else
  echo 'Please enter all the fields';
  mysql_close();
?>