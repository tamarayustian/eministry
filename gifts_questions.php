<?php
session_start();
//include "db_connect.php";

//invisible table to tidy up the outlook of the questions
echo("<style>");
echo("table, th, td {padding: 5px}");
echo("</style>");

//to display the username and password for session testing
//echo("Your username is ". $_SESSION["username"] ."<br>");
//echo("Your password is ". $_SESSION["password"] ."<br>");

//to connect with the database
$conn = new mysqli("localhost", "root", "", "eministry") or die("Connect failed: %s\n". $conn -> error);
//$conn = OpenCon();
//to connect to the login database
$sql1 = "SELECT * FROM accounts";
$result1 = $conn->query($sql1);

//to find the username and password if it matches
/*while($row1=$result1->fetch_assoc())
{
	if($_POST["username"] == $row1["username"] and $_POST["password"] == $row1["password"])
	{
		$_SESSION["id"]=$row1["id"];
		$_SESSION["username"]=$_POST['username'];
		$_SESSION["password"]=$_POST['password'];
	}
}*/

//to connect to the questions database
 $sql = "SELECT * FROM questiontable WHERE id <= 133 AND gift = 'administration' OR gift = 'apostleship'";
 $result = $conn->query($sql);
 ?>
 
 <h2> Part 1 - Discovering Your Spiritual Gifts </h2>
 <h5> Definition: </h5>
 Spiritual Gifts are special abilities distributed by the Holy Spirit to every believer
 according to God’s design and grace for the common good of the body of Christ.
 
 <h5> Directions: </h5>
 1. IMPORTANT: Please answer according to who you are, NOT who you would like to
be or think you ought to be! As you go through the packet consider: <br>
• How true are these statements of me? <br>
• What has been my experience? <br>
• To what degree do these statements reflect my usual tendencies? <br>
2. Complete the attached SPIRITUAL GIFT ASSESSMENT QUESTIONS handout,
writing down ALL your responses on that handout. DO NOT refer back to this
document until the handout has been finished in its entirety. Only when finished,
continue with the next Step #2. Please complete the handout now. <br>
3. Into the corresponding blocks of the grid below, record your responses from the
SPIRITUAL GIFT ASSESSMENT QUESTIONS handout. <br>
4. Rank the (3) highest totals with numbers in the boxes below the spiritual gifts. <br>

 <?php
 //to display the questions and calculate when submit
 if($result->num_rows > 0)
 {
	 echo("<form action='gifts_calculate1.php' method='post'>");
	 echo("<table>");
	 echo("<tr>");
		echo("<th></th>");
		echo("<th></th>");
		echo("<th>0</th>");
		echo("<th>1</th>");
		echo("<th>2</th>");
		echo("<th>3</th>");
		echo("<th>4</th>");
	 echo("</tr>");
	 while($row=$result->fetch_assoc())
	 {
		 echo("<tr>");
			echo("<td><center>".$row['id'].".</td>");
			echo("<td>".$row['quest']."</td>");
			$idname = "q".$row["id"];
			echo("<td><center><input type='radio' name='$idname' value='0'></td>");
			echo("<td><center><input type='radio' name='$idname' value='1'></td>");
			echo("<td><center><input type='radio' name='$idname' value='2' required></td>");
			echo("<td><center><input type='radio' name='$idname' value='3'></td>");
			echo("<td><center><input type='radio' name='$idname' value='4'></td>");
		 echo("</tr>");
		 echo("<input type='hidden' name='finalq' value='$row[id]'>");
	 }
	 echo("</table><br>");
	 echo("<input type='submit' value='Submit'>");
	 echo("</form>");
 }
 
//CloseCon($conn);
$conn -> close();
?>