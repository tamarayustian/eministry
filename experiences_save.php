<?php
session_start();

//to connect to the questions database
$conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);
 //$sql = "SELECT * FROM questiontable";
 //$result = $conn->query($sql);

$list1 = $_POST["list1"];
$list2 = $_POST["list2"];
$list3 = $_POST["list3"];
$list4 = $_POST["list4"];

$exp1 = $_POST["exp1"];
$exp2 = $_POST["exp2"];
$exp3 = $_POST["exp3"];

echo("<h5> Lists of experiences: </h5>");

echo("1.) ".$list1."<br>");
echo("2.) ".$list2."<br>");
echo("3.) ".$list3."<br>");
echo("4.) ".$list4."<br>");

echo("<h5> Top three most rewarding/fulfilling experiences: </h5>");
echo("1.) ".$exp1."<br>");
echo("2.) ".$exp2."<br>");
echo("3.) ".$exp3."<br>");

echo("Your answers have been saved. <br><br>");
echo("<a href='http://localhost/eministry/viewpoint.php'><< Part 4 - View Points</a><br>");
echo("<a href='http://localhost/eministry/homepage.php'> Home Page </a>");

?>
