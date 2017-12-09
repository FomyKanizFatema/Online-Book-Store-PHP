<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<head>
		<title>Tienda De Floris</title>
</head>
	<body>
		<?php include("header.php");?>
		<br/>
<form action="passHandler.php">
<table  align="center" width="100%" >


<tr ><!-- style="background-image:url('h.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500" --> 
<td>

<form action="passHandler.php">
<fieldset>

<legend>CHANGE PASSWORD</legend>	
<!--b style="color:">Current Password &nbsp &nbsp &nbsp &nbsp   : </b> <input  type="password" name="old"/><br/><br/-->
<b style="color:">New Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input  type="password" name="new"/><br/><br/>
<b style="color:">Retype New Password : </b> <input  type="password" name="rnew"/><br/><br/>

<input type="submit" value="Save"/>

</fieldset>


</form>



</td>
</tr>
</table><br/>

</form>
