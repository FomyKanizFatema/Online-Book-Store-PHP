<?php
//session_start();
include(realpath("view/header.php"));
include(dirname(__DIR__).'/../../../Service/book.php');
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
						<th>Author</th>						
						<th>Buying Price</th>	
<<<<<<< HEAD
						<th>Selling Price</th>
						<th>Profit</th>
						
						
=======
						<th>Selling Price</th>	
						<th>Profit</th>
>>>>>>> 1b9f36ea9478de1b5727755e715b43e60c04e170
						<th>Action</th>				
						 
						</tr>
						<?php $fetchedbook=getAllBooks();
						foreach($fetchedbook as $book){
						?>
						<tr align="center">
						<td><?php echo $book['BOOK_ID'];?></td>
						<td><?php echo $book['NAME'];?></td>
						<td><?php echo $book['AUTHOR'];?></td>						
<<<<<<< HEAD
						<td><?php echo $book['BUYING PRICE']." "."Taka";?></td>	
						<td><?php echo $book['SELLING PRICE']." "."Taka";?></td>						
						
=======
						<td><?php echo $book['BUYING PRICE']." "."Taka";?></td>		
						<td><?php echo $book['SELLING PRICE']." "."Taka";?></td>
						<td><?php echo $book['SELLING PRICE']-$book['BUYING PRICE']." "."Taka";?></td>
>>>>>>> 1b9f36ea9478de1b5727755e715b43e60c04e170
						<td><a href="updateB.php?m=<?php echo $book['BOOK_ID'];?>">Update</a>|<a href="removeB.php?m=<?php echo $book['BOOK_ID'];?>">Remove</a></th>	
						</tr>
						<?php } ?>
					  </table>
				</td>
				</td>
			</tr>
		<table>
			
	</body>
</html>