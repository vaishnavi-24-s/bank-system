<?php
session_start();
$con=mysqli_connect('localhost','root','','bank_system');
$name1=$_SESSION['name'];
$q="select amount from users where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['amount'];
$from=$_SESSION['name'];
$to=$_POST['receiver'];
$q1="select amount from users where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['amount'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update users set amount='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update users set amount='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into mini_statement(sender,receiver,amount)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    include 'getdetail.php';
    $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
   
    
}
else
{
	include 'getdetail.php';
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
<footer>
  <p style="color:red;">Copyright @ 2021 A Basic Banking System by vaishnavi.S</p>
  <p><a href="mailto:vaishnavisreddy24@gmail.com">vaishnavisreddy24@gmail.com</a></p>
</footer>  
</body>
</html>