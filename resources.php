<?php
session_start();

function list_resources()
{

}

$conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);
$sql = "SELECT * FROM resourcestable";
$result = $conn->query($sql);
?>

<h2> Part 3 - Discovering Your Resources </h2>
<h5> Definition: </h5>
Resources are the God-given abilities and talents that enable us to build His kingdom.

 <h5> Directions: </h5>
Note: Be honest – there is no right or wrong answer. Answer the following questions <br>
based on what you are “able to do” and not what you would” like to do.” <br>
1. From the list of skills below, place a check mark by those skills you’ve used any time
in the past. <br>
2. Review your checked skills and circle the top ten (it can be less than ten) that interest
you the most. <br>
3. Rate the top three circled skills according to your level of proficiency (“1” = most
proficient). <br><br>

<?php
if ($result->num_rows > 0)
{
  echo("<style>");
  echo("table, th, td {padding: 5px; border: 1px solid black; border-collapse: collapse;}
  </style>");
  echo("<form action = 'resources2.php' method = 'post'>");
  echo("<table>");
  $i = 0;
    while($row=$result->fetch_assoc())
    {
      $idname = "q".$row["id"];
      if ($i%5 == 0)
      {
        echo("<tr>");
      }
      $rname = $row['resource'];
      echo("<td> <input type = 'checkbox' name = '$idname' value = '$rname'> ".$rname."</td>");
      //echo("</tr>");
      $i++;
      echo("<input type='hidden' name='finalq' value='$row[id]'>");
    }
  echo("</table><br>");
 	echo("<input type='submit' value='Next'>");
 	echo("</form>");
}
?>

<!--<table>
<tr>
	<td> <input type = "checkbox" name = "adapt"> Adapting </td>
	<td> <input type = "checkbox" name = "counsel"> Counseling </td>
	<td> <input type = "checkbox" name = "help"> Helping </td>
	<td> <input type = "checkbox" name = "memorize"> Memorizing </td>
	<td> <input type = "checkbox" name = "restore"> Restoring </td>
</tr>
<tr>
	<td> <input type = "checkbox" name = "administer"> Administering </td>
	<td> <input type = "checkbox" name = "create"> Creating </td>
	<td> <input type = "checkbox" name = "identify"> Identifying </td>
	<td> <input type = "checkbox" name = "participate"> Participating </td>
	<td> <input type = "checkbox" name = "risk"> Risking </td>
</tr>
<tr>
	<td> <input type = "checkbox" name = "advertise"> Advertising </td>
	<td> <input type = "checkbox" name = "decide"> Deciding </td>
	<td> <input type = "checkbox" name = "illustrate"> Illustrating </td>
	<td> <input type = "checkbox" name = "perceive"> Perceiving </td>
	<td> <input type = "checkbox" name = "schedule"> Scheduling </td>
</tr>
</table> <br>
<input type = "submit" value = "Submit">
</form>-->
