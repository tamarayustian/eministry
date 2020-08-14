<?php
session_start();

echo("<style>");
echo("table {border-collapse: collapse}");
echo("table, th, td {border: 1px solid black; padding: 7px}");
echo("</style>");

 $conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);
 $sql = "SELECT * FROM questiontable";
 $result = $conn->query($sql);

//echo("Your username is ".$_SESSION["username"]. "<br>");
//echo("Your password is ".$_SESSION["password"]. "<br><br>");

$total_id = mysqli_num_rows($result);

for($i=1;$i<=$total_id;$i++)
{
		${"q$i"} = $_POST['q'.$i];
		//echo(${"q$i"});
}
echo("<br><br>");


$administration = $apostleship = $craftsmanship = $arts = $discernment
= $exhortation = $evangelism = $faith = $service = $service = $hospitality
= $intercession = $knowledge = $leadership = $mercy = $prophecy 
= $shepherding = $teaching = $wisdom = 0;

echo("<table>");
echo("<tr>");
	echo("<th>Spiritual Gifts</th>");
	//echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th>Score</th>");
echo("</tr>");
echo("<tr>");
	echo("<td>Administration</td>");
	//echo("<td>:</td>");
	for($j=1;$j<=115;$j+=19)
	{
		$administration = $administration + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$administration</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Apostleship</td>");
	//echo("<td>:</td>");
	for($j=2;$j<=116;$j+=19)
	{
		$apostleship = $apostleship + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$apostleship</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Craftsmanship</td>");
	//echo("<td>:</td>");
	for($j=3;$j<=117;$j+=19)
	{
		$craftsmanship = $craftsmanship + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$craftsmanship</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>The Arts (Music, visual, drama)</td>");
	//echo("<td>:</td>");
	for($j=4;$j<=118;$j+=19)
	{
		$arts = $arts + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$arts</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Discernment</td>");
	//echo("<td>:</td>");
	for($j=5;$j<=119;$j+=19)
	{
		$discernment = $discernment + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$discernment</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Exhortation</td>");
	//echo("<td>:</td>");
	for($j=6;$j<=120;$j+=19)
	{
		$exhortation = $exhortation + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$exhortation</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Evangelism</td>");
	//echo("<td>:</td>");
	for($j=7;$j<=121;$j+=19)
	{
		$evangelism = $evangelism + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$evangelism</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Faith</td>");
	//echo("<td>:</td>");
	for($j=8;$j<=122;$j+=19)
	{
		$faith = $faith + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$faith</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Giving</td>");
	//echo("<td>:</td>");
	for($j=9;$j<=123;$j+=19)
	{
		$service = $service + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$giving</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Service</td>");
	//echo("<td>:</td>");
	for($j=10;$j<=124;$j+=19)
	{
		$service = $service + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$service</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Hospitality</td>");
	//echo("<td>:</td>");
	for($j=11;$j<=125;$j+=19)
	{
		$hospitality = $hospitality + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$hospitality</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Intercession</td>");
	//echo("<td>:</td>");
	for($j=12;$j<=126;$j+=19)
	{
		$intercession = $intercession + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$intercession</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Knowledge</td>");
	//echo("<td>:</td>");
	for($j=13;$j<=127;$j+=19)
	{
		$knowledge = $knowledge + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$knowledge</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Leadership</td>");
	//echo("<td>:</td>");
	for($j=14;$j<=128;$j+=19)
	{
		$leadership = $leadership + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$leadership</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Mercy</td>");
	//echo("<td>:</td>");
		for($j=15;$j<=129;$j+=19)
	{
		$mercy = $mercy + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$mercy</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Prophecy</td>");
	//echo("<td>:</td>");
	for($j=16;$j<=130;$j+=19)
{	
		$prophecy = $prophecy + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$prophecy</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Shepherding</td>");
	//echo("<td>:</td>");
	for($j=17;$j<=131;$j+=19)
	{
		$shepherding = $shepherding + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$shepherding</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Teaching</td>");
	//echo("<td>:</td>");
	for($j=18;$j<=132;$j+=19)
	{
		$teaching = $teaching + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$teaching</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Wisdom</td>");
	//echo("<td>:</td>");
	for($j=19;$j<=133;$j+=19)
	{
		$wisdom = $wisdom + ${"q$j"};
		echo("<td><center>".${"q$j"}."</td>");
	}
	echo("<td><center><b>$wisdom</td>");
echo("</tr>");

echo("</table>");

$gifts = array(
"Administration" => $administration, 
"Apostleship" => $apostleship, 
"Craftsmanship"  => $craftsmanship,
"The Arts (Music, visual,drama)" => $arts,
"Discernment" => $discernment, 
"Exhortation" => $exhortation,
"Evangelism" => $evangelism,
"Faith" => $faith, 
"service" => $service, 
"Service" => $service, 
"Hospitality" => $hospitality,
"Intercession" => $intercession, 
"Knowledge" => $knowledge, 
"Leadership"  => $leadership, 
"Mercy" => $mercy,
"Prophecy" => $prophecy, 
"Shepherding" => $shepherding, 
"Teaching" => $teaching, 
"Wisdom" => $wisdom
);

$countarray = count($gifts);
//echo($countarray);
echo("<br><br>");
//krsort($gifts);
arsort($gifts);

echo("Your gifts in ascending order: <br>");
$k=1;
foreach($gifts as $x => $x_value)
{
	
	echo("$k. $x : $x_value");
	echo("<br>");
	$k++;
}

 $conn -> close();
?>