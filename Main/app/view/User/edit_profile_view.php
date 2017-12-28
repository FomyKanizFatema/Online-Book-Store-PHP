<?php
echo dirname(__DIR__);
include(realpath("../../../app/view/user/user_header_view.php"));

$currentUser['name']=$_SESSION['user']['NAME'];
$currentUser['email']=$_SESSION['user']['EMAIL'];
$currentUser['phone']=$_SESSION['user']['PHONE'];
$currentUser['dept']=$_SESSION['user']['DEPARTMENT'];
$mesage="";


?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("sidebar_view.php");?>
				</td>
				<td>
				
					<table cellpadding="25px" width="100%"><tr><td>
					
					
				<form action="editHandler.php" method="POST" width="100%">
					<fieldset>
						<legend>Edit Profile</legend>
						<table align="center">
						<tr>
						<td><b>Name </b></td>				
						<td><b>: </b><input type="text" name="name" value="<?php echo $currentUser['name'];?>"</td>
						
						</tr>
						
						<tr>
						<td><b>Email </b></td>				
						<td><b>: </b><input type="text" name="email" value="<?php echo $currentUser['email'];?>"></td>
						</tr>
						
						<tr>
						<td><b>Phone </b></td>				
						<td><b>: </b><input type="text" name="phone" value="<?php echo $currentUser['phone'];?>"></td>
						</tr>	

						<tr>
						<td><b>Department </b></td>				
						<td><b>: </b><input type="text" name="dept" value="<?php echo $currentUser['dept'];?>"></td>
						</tr>	
						
						
						
						
						
						
						

					</table>
					</fieldset><br/>
					<input type="submit" value="Edit" />
								
							
							</td>
						</tr>
					</table>
						
					</fieldset>
					</form>
						
						</td></tr></table>

				</td>
			</tr>
		</table>
	</body>
</html>