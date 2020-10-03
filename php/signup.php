<?php
$username=$_POST["username"];
$password=$_POST["password"];
$password1=$_POST["password1"];

 $conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);

if($password != $password1)
{
	header("Location: http://localhost/eministry/signupform_error.html");
}
else
{
	$sql = "INSERT INTO accounts (username, password)
	VALUES ('$username', '$password')";
	$result = $conn->query($sql);
	if($result == TRUE)
	{
		echo("You have successfully signed up! Log in <a href='http://localhost/eministry/login.html'>here</a>.");
	}
	else
	{
		echo("Something went wrong. <a href='http://localhost/eministry/signupform.html'>Try again</a>.");
	}
}

 $conn -> close();
?>