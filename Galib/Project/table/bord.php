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
				 <a href="../table/bord.php"> <li> Dashbord</a><br />
				 <a href="../table/viewpro.php"> <li> View Profile</a><br />
				 <a href="../table/editpro.php"> <li>Edit Profile</a><br />
				 <a href="../table/profile.php"> <li> Change Profile Picture</a><br />
				<a href="../table/reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout</a><br />
			</h3>
			   </ul>
            </td>
            
            <td bgcolor = "" width = "1050" height = "200">
               ADD YOUR CODE HERE...<font size="6"><?php echo $currentUser['uname']; ?></font>
            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "">
               <center style="color:">
                  Copyright © 2017
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>
