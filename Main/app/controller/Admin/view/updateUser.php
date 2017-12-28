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
				
					<form action="searchForUpdate.php?k=1&">
							<input type="text" height="31"  size="35" id="searchBox" name="string" placeholder="search user to update"/>
							<input type="submit" value="search User"/>
							
							
					</form>
					<?php if(isset($_REQUEST['x'])){
					if($_REQUEST['x']==1){
				echo "No user Found";}
				}?>
				</td>
				</td>
			</tr>
		<table>
			
	</body>