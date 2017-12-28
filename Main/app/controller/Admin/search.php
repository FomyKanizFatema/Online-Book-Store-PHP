<?php
session_start();
include(dirname(__DIR__).'/../../Service/person.php');
echo dirname(__DIR__);
$string=$_REQUEST['string'];

$fetch=searchUser($string);
if($fetch!=NULL){
	?>
	<?php
//session_start();
include(realpath("view/header.php"));
//include(dirname(__DIR__).'/../../../Service/person.php');
?>


<html>
	<head>
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		<table border="0" width="100%">
			<tr valign="top">
				<td width="20%">
					<?php include("view/sidebar.php");?>
					
				</td>
				<td>
		<table align="center" width="100%">
			<tr>
				<td ><form action="search.php?k=1&">
							<input type="text" height="31"  size="35" id="searchBox" name="string"/>
							<input type="submit" value="search User"/>
							
							
					</form>
				
									<font color="red"><?php
					 if (isset($_REQUEST['m']))
						 { 
						if($_REQUEST['m']==1)
						{ 
							echo "One User Removed!";
							 } 
						   if($_REQUEST['m']==2)
						   { echo "User Updated";}
					}?></font>
					<br/>
					  <table  width="100%">
						<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Department</th>
						<th>Action</th>				
						 
						</tr>
						<?php 
						foreach($fetch as $user){
						?>
						<tr align="center">
						<td><?php echo $user['USER_ID'];?></td>
						<td><?php echo $user['NAME'];?></td>
						<td><?php echo $user['EMAIL'];?></td>
						<td><?php echo $user['PHONE'];?></td>
						<td><?php echo $user['DEPARTMENT'];?></td>
						<td><a href="remove.php?m=<?php echo $user['USER_ID'];?>">Remove</a></th>	
						</tr>
						<?php } ?>
					  </table>
				</td>
				</td>
			</tr>
		<table>
			
	</body>
</html>
	<?php
}

else{
	?>
	<script type="text/javascript">
		window.location.href = '/project/main/app/controller/Admin/removeUser.php?x=1';
		</script>
	<?php
}
?>