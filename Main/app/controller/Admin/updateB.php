<?php
session_start();
include(dirname(__DIR__).'/../../Service/person.php');
$id=$_REQUEST['m'];
$r=getBookByID($id);


?>

<?php
//echo dirname(__DIR__);
include(realpath("view/header.php"));
$currentbook['id']=$r['BOOK_ID'];
$currentbook['name']=$r['NAME'];
$currentbook['author']=$r['AUTHOR'];
$currentbook['bp']=$r['BUYING PRICE'];
$currentbook['bp']=$r['SELLING PRICE'];

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
					
					
				<form action="bookEditHandler.php?k=<?php echo $currentbook['id'];?>" method="POST" width="100%">
					<fieldset>
						<legend>Edit Profile</legend>
						<table align="center">
						<tr><td> <b>book ID</b></td><td> <b>: <?php echo $currentbook['id'];?></b></td>
						<tr>
						<td><b>Name </b></td>				
						<td><b>: </b><input type="text" name="name" value="<?php echo $currentbook['name'];?>"</td>
						
						</tr>
						
						<tr>
						<td><b>Author </b></td>				
						<td><b>: </b><input type="text" name="email" value="<?php echo $currentbook['author'];?>"></td>
						</tr>
						
						<tr>
						<td><b>Phone </b></td>				
						<td><b>: </b><input type="text" name="phone" value="<?php echo $currentbook['phone'];?>"></td>
						</tr>

						<tr>
						<td><b>Buying Price </b></td>				
						<td><b>: </b><input type="text" name="dept" value="<?php echo $currentbook['bp'];?>"></td>
						</tr>
						
						<tr>
						<td><b>Selling Price </b></td>				
						<td><b>: </b><input type="text" name="dept" value="<?php echo $currentbook['sp'];?>"></td>
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