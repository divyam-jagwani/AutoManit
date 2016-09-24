<?php
include_once 'connect.inc.php';

$source=$_POST['source'];
$dest=$_POST['dest'];
$query="UPDATE locations SET Value='1' WHERE Name='$source'";
$query2="UPDATE locations SET Value='2' WHERE Name='$dest'";
$link1=mysql_query($query);
$link2=mysql_query($query2);
if($link1 && $link2)
{
  header("Location:booknew.php");
}
else
{
  echo "Connection problem";
}
mysql_close();
?>