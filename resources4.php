<?php
session_start();

$conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);

$r1 = $_POST["r1"];
$r2 = $_POST["r2"];
$r3 = $_POST["r3"];

echo("Your top three Resources skills are listed below:<br>");
echo($r1."<br>");
echo($r2."<br>");
echo($r3."<br>");

echo("Your answers have been saved. <br><br>");
 echo("<a href='http://localhost/eministry/enthusiasm.php'><< Part 2 - Enthusiasm</a><br>");
echo("<a href='http://localhost/eministry/viewpoint.php'>Part 4 - View Point>></a>");
?>
