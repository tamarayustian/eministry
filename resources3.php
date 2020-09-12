<?php
session_start();

$conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);

$end = $_POST["end"];

echo("Your circled skills: <br>");
for($i=1;$i<=$end;$i++)
{
		if (isset($_POST['f'.$i]))
		{
			${"f$i"} = $_POST['f'.$i];
			echo("- ".${"f$i"});
			echo("<br>");
		}
}
//need validation of the 3 chosen skills with the top 10
?>
<br><br>
3. Rate the top three circled skills according to your level of proficiency (“1” = most
proficient). <br><br>

<form action = 'resources4.php' method = 'post'>
1. <input list = 'resources' name = 'r1'>
    <datalist id = 'resources'>
      <?php
      for($i=1;$i<=$end;$i++)
      {
      		if (isset($_POST['f'.$i]))
      		{
      			${"f$i"} = $_POST['f'.$i];
      			echo("<option value = '${"f$i"}'>");
      			echo("<br>");
      		}
      }
      ?>
    </datalist><br>
2. <input list = 'resources' name = 'r2'>
    <datalist id ='resources'>
    </datalist><br>
3. <input list = 'resources' name = 'r3'>
    <datalist id ='resources'>
    </datalist><br><br>
  <input type = 'Submit' value ='Submit'>
</form>

<!--
1. <input type = 'text' id = 'r1' name ='r1'><br>
2. <input type = 'text' id = 'r2' name ='r2'><br>
3. <input type = 'text' id = 'r3' name ='r3'><br>
<input type = 'Submit' value ='Submit'>-->
