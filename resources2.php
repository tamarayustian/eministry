2. Review your checked skills and circle the top ten (it can be less than ten) that interest
you the most. <br><br>

<?php
session_start();

$conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);

$finalq = $_POST["finalq"];
$end = 1;
echo("<form action = 'resources3.php' method = 'post'>");
for($i=1;$i<=$finalq;$i++)
{
		if (isset($_POST['q'.$i]))
		{
			${"q$i"} = $_POST['q'.$i];
			//echo(${"q$i"});
			$idname = "f".$end;
			echo("<input type = 'checkbox' name = '$idname' value = '${"q$i"}'> ".${"q$i"});
			echo("<br>");
			$end++;
		}
}
echo("<input type='hidden' name='end' value='$end'>");
echo("<br><input type='submit' value='Next'>");
echo("</form>");


?>
