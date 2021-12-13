<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Registration </title>
</head>
<body>
<center>
<form action="" method="post"
<fieldset>
<legend> Sign Up</legend>
Name: 
<input type="text" name="name" required><br><br>
Gender : 
<input type="radio" id="ra1" name="gender" value="Male">
<label for="ra1">Male</label>
 
<input type="radio" id="ra2" name="gender" value="female">
<label for="ra2">Female</label>

<br><br>
date:  
<input type="date" name="date"><br><br>
Email: 
<input type="email" name="email"><br><br>
Mobile: 
<input type="Number" name="number"><br><br>
Password: 
<input type="password" name="password"><br><br>
<input type="submit" value="Sign Up" name="submit"><br><br>
</fieldset >
</form>
</center>   


<?php
include("config.php");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$result = mysqli_query($mysqli,"insert into user values('','$name','$gender','$date','$email','$number','$password')");
	if($result)
	{
		echo "Registration Successfully";
	}
	else{
		echo "Registration, failed!!";
	}
}
?>
</body>
</html>