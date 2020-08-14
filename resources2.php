<?php
session_start();

$conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);

$adapt = $_POST["adapt"];
$administer = $_POST["administer"];
$advertise = $_POST["advertise"];
$counsel = $_POST["counsel"];
$create = $_POST["create"];
$decide = $_POST["decide"];
$help = $_POST["help"];
$identify = $_POST["identify"];
$illustrate = $_POST["illustrate"];
$memorize = $_POST["memorize"];
$participate = $_POST["participate"];
$perceive = $_POST["perceive"];
$restore = $_POST["restore"];
$risk = $_POST["risk"];
$schedule = $_POST["schedule"];

if($adapt)
{
	
}
?>