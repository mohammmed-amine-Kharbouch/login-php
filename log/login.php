<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>

<form action="" method="POST">

<b>Username:-</b><input type="text" name="uname" required=""><br><br>

<b>Password:-</b><input type="password" name="upassword" required=""><br><br>

<input type="submit" name="sub" value="Login">

<form>
</center>    


<?php
include("config.php");

if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$res = mysqli_query($mysqli,"select* from user where name='$uname'and password='$upassword'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "<center> <h2>You are login Successfully </h2></center> ";
header("location:my_account.php");   
	
}
else
{
	echo "<center> <h2>login failed</h2></center> ";
}
}
?>
</body>
</html>