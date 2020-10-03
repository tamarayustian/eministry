<?php
session_start();

$o1 = $_POST["o1"];
$o2 = $_POST["o2"];
$o3 = $_POST["o3"];
$o4 = $_POST["o4"];
$o5 = $_POST["o5"];
$o6 = $_POST["o6"];
$o7 = $_POST["o7"];
$o8 = $_POST["o8"];
$o9 = $_POST["o9"];
$o10 = $_POST["o10"];

$e1 = $_POST["e1"];
$e2 = $_POST["e2"];
$e3 = $_POST["e3"];
$e4 = $_POST["e4"];
$e5 = $_POST["e5"];
$e6 = $_POST["e6"];
$e7 = $_POST["e7"];
$e8 = $_POST["e8"];
$e9 = $_POST["e9"];
$e10 = $_POST["e10"];

$c1 = $_POST["c1"];
$c2 = $_POST["c2"];
$c3 = $_POST["c3"];
$c4 = $_POST["c4"];
$c5 = $_POST["c5"];
$c6 = $_POST["c6"];
$c7 = $_POST["c7"];
$c8 = $_POST["c8"];
$c9 = $_POST["c9"];
$c10 = $_POST["c10"];

$o_sum = $o1 + $o2 + $o3 + $o4 + $o5 + $o6 + $o7 + $o8 + $o9 + $o10;
$e_sum = $e1 + $e2 + $e3 + $e4 + $e5 + $e6 + $e7 + $e8 + $e9 + $e10;
$c_sum = $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7 + $c8 + $c9 + $c10;

echo("<h2> Your Scales: </h2>");

echo("Organized: $o_sum <br>");
echo("Energized: $e_sum <br>");
echo("Characterized: $c_sum <br>");

echo("<br><br><br>");

if($o_sum <= 30 AND $e_sum >= 30)
{
  echo("You are People-Oriented and Unstructured <br>");
  echo("• Spontaneous situations, relates well to others, very conversational, tends to be flexible<br>");
  echo("• Consider the kind of ministry position that gives you the freedom to respond to people with spontaneity<br>");
}
elseif($o_sum >= 30 AND $e_sum >= 30)
{
  echo("You are People-Oriented and Structured <br>");
  echo("Defined relationships, projects warmth, familiar surroundings, enjoys familiar relationships <br>");
  echo("• Consider the kind of ministry position that will enable you to interact with people in more stable or defined setting<br>");
}
elseif($o_sum <= 30 AND $e_sum <= 30)
{
  echo("You are Task-Oriented and Unstructured <br>");
  echo("• General guidelines, helps wherever needed, versatile, likes tangible results <br>");
  echo("• Consider the kind of ministry position that needs you to fulfill a wide variety of responsibilities<br>");
}
elseif($o_sum >= 30 AND $e_sum <= 30)
{
  echo("You are Task-Oriented and Structured <br>");
  echo("• Getting the job done, prefers to follow an agenda, focused on results, appreciates clear direction <br>");
  echo("• Consider the kind of ministry position that allows you to know clearly what the goals are and how the task is to be accomplished<br>");
}

echo("<br><br><br>");

if($c_sum < 30)
{
  echo("You are Introverted<br>");
  echo("• Energy is directed primarily inwards, towards thoughts, perceptions, and reactions <br>");
  echo("• More reserved, private, cautious, and interested in fewer interactions, but with greater depth and focus<br>");
}
elseif($c_sum > 30)
{
  echo("You are Extroverted<br>");
  echo("• Energy is directed primarily outward towards people and things outside of themselves<br>");
  echo("• More naturally active, expressive, social and interested in many different thing<br>");
}
elseif($c_sum == 30)
{
  echo("You are Ambiverted<br>");
}

echo("<br><br><br>");
echo("Your answers have been saved. <br><br>");
echo("<a href='http://localhost/eministry/resources.php'><< Part 3 - Resources</a><br>");
echo("<a href='http://localhost/eministry/experiences.php'>Part 5 - Experiences>></a>");
?>
