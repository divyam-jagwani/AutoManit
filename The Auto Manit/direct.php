
<?php
  session_start();
require 'connect.inc.php';


$s_no=@$_SESSION['sno']=@$_POST['sno'];
$pass=$_POST['pass'];
if(!empty($s_no) && !empty($pass))
{
   $query="SELECT Name FROM auto WHERE SNo='$s_no' AND Password='$pass'";
   $query_run=mysql_query($query);

   if($query_run === FALSE) {
    die(mysql_error()); // TODO: better error handling
}


   $row=mysql_fetch_array($query_run);

   $run=mysql_num_rows($query_run);

  if($run==1)
  {
    //header("Location:book.php");
    echo "<script>window.open('book.php?logged=Welcome $row[0]...','_self')</script>";
  }
  else
  echo 'Wrong email id/password combination';
}
else
echo 'Enter email and password';
mysql_close();
?>