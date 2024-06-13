<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<body background ="carol.jpg">

    </body><br>
    

<p><center><legend><font color='#000000' size='18'></p><br>
<p>In order to make a vote you have to register first and then login.</font></legend></center>
    <p>&nbsp;&nbsp;</p>
    
    
<?php include "footer.php";?>
