<?php
session_start();

//to connect to the questions database
$conn = new mysqli("localhost", "root", "1234", "eministry") or die("Connect failed: %s\n". $conn -> error);
 //$sql = "SELECT * FROM questiontable";
 //$result = $conn->query($sql);
 
$enthus1 = $_POST["enthus1"];
$enthus2 = $_POST["enthus2"];
$enthus3 = $_POST["enthus3"];
$enthus4 = $_POST["enthus4"];

/*echo("1.) ".$enthus1."<br>");
echo("2.) ".$enthus2."<br>");
echo("3.) ".$enthus3."<br>");
echo("4.) ".$enthus4."<br>");*/

echo("Your answers have been saved. <br><br>");
echo("<a href='http://localhost/eministry/resources.php'><< Part 1 - Spiritual Gifts</a><br>");
echo("<a href='http://localhost/eministry/resources.php'>Part 3 - Resources >></a>");

?>