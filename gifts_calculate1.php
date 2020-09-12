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

$finalq = $_POST["finalq"];

echo("Number of questions: ".$finalq."<br><br>");

$administration = $apostleship = $craftsmanship = $thearts = $discernment
= $exhortation = $evangelism = $faith = $giving = $service = $hospitality
= $intercession = $knowledge = $leadership = $mercy = $prophecy
= $shepherding = $teaching = $wisdom = 0;

for($i=1;$i<=$finalq;$i++)
{
		${"q$i"} = $_POST['q'.$i];
		//echo(${"q$i"});
}

//$row=$result->fetch_assoc();
$j = 1;
if($result-> num_rows > 0)
{
	while($row=$result->fetch_assoc() and $j <= $finalq)
	{
			//echo($row['gift']);
		if($row['gift'] == 'administration')
			{$administration = $administration + ${"q$j"};}
		if($row['gift'] == 'apostleship')
			{$apostleship = $apostleship + ${"q$j"};}
		if($row['gift'] == 'craftsmanship')
			{$craftsmanship = $craftsmanship + ${"q$j"};}
		if($row['gift'] == 'thearts')
			{$thearts = $thearts + ${"q$j"};}
		if($row['gift'] == 'discernment')
			{$discernment = $discernment + ${"q$j"};}
		if($row['gift'] == 'exhortation')
			{$exhortation = $exhortation + ${"q$j"};}
		if($row['gift'] == 'evangelism')
			{$evangelism = $evangelism + ${"q$j"};}
		if($row['gift'] == 'faith')
			{$faith = $faith + ${"q$j"};}
		if($row['gift'] == 'giving')
			{$giving = $giving + ${"q$j"};}
		if($row['gift'] == 'service')
			{$service = $service + ${"q$j"};}
		if($row['gift'] == 'hospitality')
			{$hospitality = $hospitality + ${"q$j"};}
		if($row['gift'] == 'intercession')
			{$intercession = $intercession + ${"q$j"};}
		if($row['gift'] == 'knowledge')
			{$knowledge = $knowledge + ${"q$j"};}
		if($row['gift'] == 'leadership')
			{$leadership = $leadership + ${"q$j"};}
		if($row['gift'] == 'mercy')
			{$mercy = $mercy + ${"q$j"};}
		if($row['gift'] == 'prophecy')
			{$prophecy = $prophecy + ${"q$j"};}
		if($row['gift'] == 'shepherding')
			{$shepherding = $shepherding + ${"q$j"};}
		if($row['gift'] == 'teaching')
			{$teaching = $teaching + ${"q$j"};}
		if($row['gift'] == 'wisdom')
			{$wisdom = $wisdom + ${"q$j"};}
		$j++;
	}
}

echo("<table>");
echo("<tr>");
	echo("<th>Spiritual Gifts</th>");
	/*echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");
	echo("<th></th>");*/
	echo("<th>Score</th>");
echo("</tr>");
echo("<tr>");
	echo("<td>Administration</td>");
	echo("<td><center><b>$administration</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Apostleship</td>");
	echo("<td><center><b>$apostleship</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Craftsmanship</td>");
	echo("<td><center><b>$craftsmanship</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>The Arts (Music, visual, drama)</td>");
	echo("<td><center><b>$thearts</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Discernment</td>");
	echo("<td><center><b>$discernment</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Exhortation</td>");
	echo("<td><center><b>$exhortation</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Evangelism</td>");
	echo("<td><center><b>$evangelism</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Faith</td>");
	echo("<td><center><b>$faith</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Giving</td>");
	echo("<td><center><b>$giving</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Service</td>");
	echo("<td><center><b>$service</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Hospitality</td>");
	echo("<td><center><b>$hospitality</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Intercession</td>");
	echo("<td><center><b>$intercession</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Knowledge</td>");
	echo("<td><center><b>$knowledge</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Leadership</td>");
	echo("<td><center><b>$leadership</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Mercy</td>");
	echo("<td><center><b>$mercy</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Prophecy</td>");
	echo("<td><center><b>$prophecy</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Shepherding</td>");
	echo("<td><center><b>$shepherding</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Teaching</td>");
	echo("<td><center><b>$teaching</td>");
echo("</tr>");
echo("<tr>");
	echo("<td>Wisdom</td>");
	echo("<td><center><b>$wisdom</td>");
echo("</tr>");

echo("</table>");

$gifts = array(
"Administration" => $administration,
"Apostleship" => $apostleship,
"Craftsmanship"  => $craftsmanship,
"The Arts (Music, visual,drama)" => $thearts,
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

 echo("Your answers have been saved. <br><br>");
 echo("<a href='http://localhost/eministry/enthusiasm.php'><< Part 2 - Enthusiasm</a>");

?>
