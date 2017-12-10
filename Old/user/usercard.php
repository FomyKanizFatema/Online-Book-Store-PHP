<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<html>

   <head>
		<title>Tienda De Floris</title>
	  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
 
	  
   </head>

   <body>
		<?php include("headerUserSignedIn.php");?>
		
		
		<table border='1' width="100%" align="center">
			<tr valign="top">
				<td width="15%" > 
					<table cellpadding="15px">
						<tr ><th ><h3>Account</h3></th></tr>
						<tr align="center"><td><a href="userDashboard.php">Dashboard</td></tr>
						<tr align="center"><td><a href="View_User_Profile.php">View Profile</td></tr>
						<tr align="center"><td><a href="Edit_User_Profile.php">Edit Profile</td></tr>
						<tr align="center"><td><a href="Change_User_Picture.php">Change Profile Picture</td></tr>
						<tr align="center"><td><a href="Change_User_Pass.php">Change Password</td></tr>						
					</table>
				</td>
				<td >
		
		

						<table border="1" width="100%" align="center" cellpadding="10px">
								<tr valign = "top" align="center" height="500">
							
							   
							<td bgcolor = "" width = "1050" height = "200">

						
				 
					<!--tr>
						 <td bgcolor = "#eee" align="left" height="900" valign = "top" >
						<!--   ADD YOUR CODE HERE...<font size="6"><!--?php echo $currentUser['name']; ?--></font-->
							   
						
				 <table border="1" align="" >
					<tr>
						<th>serial No.</th>
						<th>Item Name</th>
						<th>Quantity</th>
						<th>Price</th>		
						<th>Action</th>
						<th>Total</th>
						<!--th>pass Year</th-->
					</tr>
					
					<tr>	<td>1</td> <td>Algorithm </td> <td>2</td> <!--b align="center" style="position:absolute;top:130px;right:260px"--><td>00.00</td> <td><a href="">Remove</a></td> <td rowspan="3">0.0</td> </tr>
					<tr>	<td>2</td> <td>Cs math</td> <td>3</td>  <!--b align="center" style="position:absolute;top:150px;right:260px"--><td>00.00</td> <td> <a href="">Remove</a></td> </tr>
					<tr>	<td>3</td> <td>Accounting </td> <td>1</td> <!--b align="center" style="position:absolute;top:170px;right:260px"--><td>00.00</td> <td><a href="">Remove</a></td></tr>
					
				</table>
				<br/>
				<form action="login.php">
				<input type="submit" value="Confirm" /> <!--if not logged in have to login first if not have any account have toregister first!-->
				</form>
				<br/>




				   
							   
							</td>
						 </tr>
						 <tr>
							<td colspan = "2" >
							   <center >
								  Copyright © 2017
							   </center>
							</td>
						 </tr>
						 
					  </table>
					  
		</td>
		</tr>
		</table>
					  
	  
   </body>

</html>
