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
				<a href="../table/reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout<br />
			</h3>
			   
			   </ul>
            </td>
            
            <td bgcolor = "" width = "1050" height = "200">
               
			   <form action="handler.php">
<fieldset>
<legend>Edit Profile</legend>

<b>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="name" type="text" value="<?php  echo $currentUser['name']; ?>"/><br/><hr/>
<b>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text" value="<?php  echo $currentUser['email']; ?>"/><img src="i.png"width="30" title="example@gmail.com"/><br/><hr/>



<b>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<?php $m="male";$f="female";$o="other"?>
<input name="gender" type="radio" value="male" checked="<?php if ($currentUser['gender'] == $m){ echo 'checked'; } ?>"/>Male
<input name="gender" type="radio" value="female" checked="<?php if ($currentUser['gender'] == $f){ echo 'checked'; } ?>"/>Female
<input name="gender" type="radio" value="other" checked="<?php if ($currentUser['gender'] == $o){ echo 'checked'; } ?>"/>Other<br/><br/>




<table  >
<td><b>Date of Birth  &nbsp &nbsp &nbsp &nbsp &nbsp :</b>
<td>dd<br/><input name="dd" type="text"  value="<?php echo $currentUser['dd'];?>" / >  /
<td>mm<br/><input name="mm" type="text"  value="<?php echo $currentUser['mm'];?>"/> /
<td>yyyy<br/><input name="yyyy" type="text" value="<?php echo $currentUser['yyyy'];?>"/ ><td>
</td>

</table>
<hr/>

	<input type="submit" value="Submit"/>&nbsp &nbsp
	<input type="reset" value="Reset"/>

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