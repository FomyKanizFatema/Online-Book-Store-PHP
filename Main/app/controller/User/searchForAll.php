<?php
session_start();
echo dirname(__DIR__);
//echo $_SESSION['book']['NAME'];
//include(dirname(__DIR__).'/Admin/view/searchForAll.php');?>

<?php
//session_start();
include(dirname(__DIR__).'/../../Service/book.php');
echo dirname(__DIR__);
$string=$_REQUEST['string'];

$fetch=searchbook($string);
if($fetch!=NULL){
	?>
	<?php
//session_start();
include("user_Header_view.php");
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
					<?php// include("view/sidebar.php");?>
					
				</td>
				<td>
		<table align="center" width="100%">
			<tr>
				<td >
				
									<font color="red"><?php
					 if (isset($_REQUEST['m']))
						 { 
						if($_REQUEST['m']==1)
						{ 
							echo "One book Removed!";
							 } 
						   if($_REQUEST['m']==2)
						   { echo "book Updated";}
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
						foreach($fetch as $book){
						?>
						<tr align="center">
						<td><?php echo $book['book_ID'];?></td>
						<td><?php echo $book['NAME'];?></td>
						<td><?php echo $book['EMAIL'];?></td>
						<td><?php echo $book['PHONE'];?></td>
						<td><?php echo $book['DEPARTMENT'];?></td>
						<td><a href="update.php?m=<?php echo $book['book_ID'];?>">Update</a>|<a href="remove.php?m=<?php echo $book['book_ID'];?>">Remove</a></th>	
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
		window.location.href = '/project/main/app/controller/Admin/removebook.php?x=1';
		</script>
	<?php
}
?>

?>