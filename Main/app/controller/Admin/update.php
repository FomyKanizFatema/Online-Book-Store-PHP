<?php
session_start();
include(dirname(__DIR__).'/../../Service/person.php');
$id=$_REQUEST['m'];
$r=getUserByID($id);


?>

<?php
//echo dirname(__DIR__);
include(realpath("view/header.php"));
$currentUser['id']=$r['USER_ID'];
$currentUser['name']=$r['NAME'];
$currentUser['email']=$r['EMAIL'];
$currentUser['phone']=$r['PHONE'];
$currentUser['dept']=$r['DEPARTMENT'];
$message="";


?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("view/sidebar.php");?>
				</td>
				<td>
				<font color="red"><?php if(isset($_REQUEST['n'])){
					if($_REQUEST['n']==1){
				echo "Profile Updated !";}
				}?></font>
					<table cellpadding="25px" width="100%"><tr><td>
					
					
				<form action="userEditHandler.php?k=<?php echo $currentUser['id'];?>" method="POST" width="100%">
					<fieldset>
						<legend>Edit Profile</legend>
						<table align="center">
						<tr><td> <b>USER ID</b></td><td> <b>: <?php echo $currentUser['id'];?></b></td>
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