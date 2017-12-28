<?php

include(realpath("view/header.php"));
?>


<html>
	<head>
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		<table border="0" width="100%">
			<tr valign="top">
				<td width="20%">
					<?php include("sidebar.php");?>
					
				</td>
				<td>
		<table align="center" width="100%">
			<tr>
				<td>
				<?php if(isset($_REQUEST['m'])){
					if($_REQUEST['m']==1){
				echo "New User Added ! !";}
				}?>
					<form action="userAddHandler.php" >
										<fieldset>
											<legend>Add New User</legend>
												<table>
													<tr>
													<td><b>Name </b></td>				
													<td><b>: </b><input type="text" name="name"></td>
													
													</tr>
													
													<tr>
													<td><b>Email </b></td>				
													<td><b>: </b><input type="text" name="email"></td>
													</tr>
													
													<tr>
													<td><b>Phone </b></td>				
													<td><b>: </b><input type="text" name="phone"></td>
													</tr>
													
													<tr>
													<td><b>Department </b></td>				
													<td><b>: </b><input type="text" name="dept"></td>
													</tr>	
													
													<tr>
													<td><b>Password <b></td>	
													<td><b>: </b><input type="text" name="pass"></td>
													</tr>
													
													<tr>
													<td><b>Confirm Password <b></td>	
													<td><b>: </b><input type="text" name="cpass"></td>
													</tr>	
													<tr>
														<td colspan="2">
														<fieldset>
															<legend>Gender</legend>
															<input type="radio" name="gender" value="male"/>Male
															<input type="radio" name="gender" value="female"/>Female
															<input type="radio" name="gender" value="other"/>Other
														</fieldset>
														</td>
													</tr>
													
													
												</table>
															
														</fieldset>
														</td>
													</tr>
												</table>
												<hr>					
												<br/>
												<input type="submit" value="Submit">	
												<input type="submit" value="Reset">
												
												
										</fieldset>
									</form>
									 <!--form action="addUser.php?"><input type="submit" value="Reset"></form-->
				</td>
				</td>
			</tr>
		<table>
			
	</body>