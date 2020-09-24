<?php
session_start();

$conn = new mysqli("localhost", "root", "","eministry") or die("Connect failed: %s\n". $conn -> error);
?>

<h2> Part 2 - Discovering Your Enthusiasm </h2>
<h5> Definition: </h5>
Enthusiasm is the God-given passion that compels us to make a difference.
 
 <h5> Directions: </h5>
1. Feel free to express any type of interests or passions. <br>
2. Don't be concerned about "whether or not" or "how" you can do the following things. <br>
3. Complete the assessment as if you have no obstacles to fulfilling your heart's desire. <br>

<form action = "enthusiasm_save.php" method="post">
<h5> Questions </h5>
1. By the end of your life, you would like to have done something about or made a
difference in… <br>
<textarea rows="5" cols="70" name="enthus1" required></textarea> <br><br>
2. What are some things (activities you have been involved with, different events that
happened, etc) that you get excited about? <br>
<textarea rows="5" cols="70" name="enthus2" required></textarea> <br><br>
3. What topic(s) of conversation can you talk passionately talk about over and over
again or without any regard to time? <br>
<textarea rows="5" cols="70" name="enthus3" required></textarea> <br><br>
4. What would your friends and family say you are greatly interested in or passionate
about? <br>
<textarea rows="5" cols="70" name="enthus4" required></textarea> <br><br>
<input type="submit" value="Submit"><br>
</form>