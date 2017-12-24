<?php include("adminHeader.php");?>

<html>
	<head>
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include('sidebar.php');?>
				</td>
				<td>
					
								<form action="signIn.php">
								<h3 align="center"><b>Add New Book<b><h3>
						<fieldset>
								<table align="center" id="formcontainer">
									<tr>
										<br/>
										<td><b>Book Name </b></td>				
										<td><b>: </b><input type="text" name="bname" width="100%"></td>				
									</tr>
									
									<tr>
										<td><b>Author </b></td>				
										<td><b>: </b><input type="text" name="author"></td>
									</tr>
									
									<tr>
										<td><b>Buying Price </b></td>				
										<td><b>: </b><input type="text" name="price"></td>
									</tr>
									<tr>
										<td><b>Course</b></td>				
										<td><b>: </b><input type="text" name="author"></td>
									</tr>
									
									<tr>
										<td><b>Deparment </b></td>				
										<td><b>: </b><input type="text" name="price"></td>
									</tr>
									
									<tr>
										<td><b>Number of Copies </b></td>				
										<td><b>: </b><input type="text" name="price"></td>
									</tr>
									
									
									
									
									
									
									<tr>
										<td colspan='2' align="center">
											<br/>
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" >
										</td>
										
									</tr>
								</table>						
								
								
						</fieldset>
					</form>
						
					</table>
				</td>
			</tr>
		</table>
			
	</body>
	

</html>

