<?php
echo dirname(__DIR__);
include(realpath("view/header.php"));

$currentUser['name']=$_SESSION['user']['name'];
$currentUser['email']=$_SESSION['user']['email'];
$currentUser['phone']=$_SESSION['user']['phone'];
$message="";


?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("sidebar.php");?>
				</td>
				<td>
				<font color="red"><?php if(isset($_REQUEST['m'])){
					if($_REQUEST['m']==1){
				echo "Profile Updated ! !";}
				}?></font>
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