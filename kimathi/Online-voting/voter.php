<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Who is your favourite candidate? <BR>
<input type="radio" name="lan" value="PEACE"> <IMG src="(one.JPG)"> PEACE<BR>
<input type="radio" name="lan" value="PRAISE")> <IMG src="(two.jpg)">PRAISE<BR>
<input type="radio" name="lan" value="RITTA">   RITTA<BR>
<input type="radio" name="lan" value="ISAAC">  ISAAC<BR>
<input type="radio" name="lan" value="WAJACKOYAH">  WAJACKOYAH<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
