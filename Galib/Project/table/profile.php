<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<html>

   <head>
		<title>Tienda De Floris</title>
   </head>

   <body>
       <body>
      <table width = "100%" border='1' height="">
         
         <tr>
            <td colspan = "2" bgcolor = "" align="right" >
               <h1 style="color:" align="center">Tienda De Floris</h1>
			   <a href="../table/login.php"  ><b style="color:"><font size="4.5" >Logged in as<font size="5"> <?php  echo $currentUser['name']; ?>  </font> </font></b></a>
				<b>|</b>
				<a href="../table/login.php" ><b style="color:"><font size="4.5">Logout</font></a> 
            </td>
         </tr>
         <tr valign = "top" height="500">
            <td bgcolor = "" width ="">
               <b>Account</b><br /><hr/>
			   <ul>
            <h3>
				 <a href="bord.php"> <li> Dashbord</a><br />
				 <a href="viewpro.php"> <li> View Profile</a><br />
				 <a href="editpro.php"> <li>Edit Profile</a><br />
				 <a href="profile.php"> <li> Change Profile Picture</a><br />
				<a href="reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout<br />
			</h3>
			   
			   </ul>
            </td>
            
            <td bgcolor = "" width = "1050" height = "200">
               
			   <form action="handler.php">

<fieldset>
<legend>Profile Picture</legend>
<img src="user.png"/><br/>
<b>Picture</b> <input name="picture" type="file"/><br/><br/>
<input type="submit" value="Change"/><br/><br/>
<!--<b>Validation Rules:</b>
	<p>
	i. UserId cannot be empty and has to be a positive number<br/>
    ii. Picture cannot be empty
	</p>
	-->
</fieldset>
</form>

			   
            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "">
               <center style="color:">
                  Copyright © 2007
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>