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
				 <a href="../admin/bord.php"> <li> Dashbord</a><br />
				 <a href="../admin/adminpro.php"> <li> View Profile</a><br />
				 <a href="../admin/editpro.php"> <li>Edit Profile</a><br />
				 <a href="../admin/profile.php"> <li> Change Profile Picture</a><br />
				<a href="../admin/reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout</a><br />
							
				
			</h3>
			   </ul><hr/>
			   
			   <b>User</b><br /><hr/>
			      <ul>
            <h3>
				 <a href="../table/userdetail.php"> <li> uesr details</a><br />
				 <a href="../admin/viewpro.php"> <li> Edit profile</a><br />
			</h3>
			   
			   
            </td>
			
			
            
            <td bgcolor = "" width = "1050" height = "200">
			
			<!--h3>Academic Qualification:</h3-->
 <table border="1" align="" >
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>User Name</th>
		<!--th>pass Year</th-->
	</tr>
	
	<tr>	<td>saki mahmud galib</td> <td>galib@gmail.com </td> <td>galib</td> <!--b align="center" style="position:absolute;top:130px;right:260px"--><td><a href="../admin/viewpro.php">Details |<a href="../admin/editpro.php">Edit |<a href="../admin/viewpro-del.php"> Delete</td> </tr>
	<tr>	<td>foysal bin</td> <td>g@gmail.com </td> <td>sakib</td>  <!--b align="center" style="position:absolute;top:150px;right:260px"--><td><a href="../admin/viewpro.php">Details |<a href="../admin/editpro.php">Edit |<a href="../admin/viewpro-del.php"> Delete</td> </tr>
	<tr>	<td>mehedi hasan</td> <td>a@gmail.com </td> <td>foysal</td> <!--b align="center" style="position:absolute;top:170px;right:260px"--><td><a href="../admin/viewpro.php">Details |<a href="../admin/editpro.php">Edit |<a href="../admin/viewpro-del.php"> Delete</td> </tr>
	
	
	<!--table align="center" style="position:absolute;top:220px;right:650px"-->

	<!--td><input type="submit"/></td-->
	
<!--/table-->

</table><br/>

<table align="" width="70%">
<tr><td>
	
	<b><input type="submit"/></b>

</table>


              <!-- ADD YOUR CODE HERE...<font size="6"><?php echo $_REQUEST['auname']; ?></font-->
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
