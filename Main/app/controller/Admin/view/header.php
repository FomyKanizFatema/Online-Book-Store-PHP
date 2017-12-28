<?php
include(realpath("../../../links.php"));
?>

<html>
	<head>
		
	</head>
	<body  align="center" width="80%">
		<header>
			<table width="100%" align="center" border="0">
			
				<tr id="row1" >
					<td  width="100%" height="40px" align="right">
                         					
						<a href="home.php" id="home"><img src="home2.png" width="45px" height="45px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="logout.php"id="log"><img src="logout.png" width="45px" height="45px"/></a> &nbsp;&nbsp; &nbsp;&nbsp;
						<a href="contact.php" id="contact"><img src="contactus.png"  height="43px" /></a> &nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
			
			<table border="0" width="100%">
				
				<tr valign="center">
					<td width="25%" align="center"><img src="logo.jpg" height="150px" width="120"</td>
					<td width="50%" align="center">
						<form action="searchForAll.php">
							<input type="text" height="31"  size="35" id="searchBox" name="string"/>
							<button>Search</button>
							
						</form>
					</td>
					<td>
					
					
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					</td>
					<td>
					<form action="../../../App/Controller/User/profile.php"><button><font color="blue">Welcome <br/><?php echo $_SESSION['user']['name'];?> </font></button></form>
					</td>
				</tr>
				
			</table>			
			
		</header>
		<br/> <br/>
	</body>
	
	<script type="text/javascript">
	document.getElementById("cartD").style.marginTop = "20px";
	document.getElementById("wishD").style.backgroundColor = "ffffff";
			document.getElementById("cartD").style.backgroundColor = "ffffff";
			document.getElementById('searchBox').style.height="36px";
			document.getElementById('searchIcon').style.height="41px";
			document.getElementById('searchIcon').style.width="45px";
			document.getElementById('searchBox').style.fontSize="17px";
			document.getElementById("searchIcon").style.marginBottom = "-16px"
			document.getElementById("row1").style.backgroundColor = "4889F3";
			document.getElementById("row2").style.backgroundColor = "4889F3";
			document.getElementById("searchButton").style.backgroundColor = "ffffff";
			
			
			document.getElementById("log").style.marginTop = "30px";
			
			document.getElementById("log").style.textDecorationColor = "red";
			
			/*document.getElementById("home").style.backgroundColor = "ffffff";
			document.getElementById("home").style.height = "30px";
			document.getElementById("home").style.width = "30px";
			document.getElementById("log").style.backgroundColor = "ffffff";
			document.getElementById("contact").style.backgroundColor = "ffffff";*/
			
			
			var wishlistButton = document.getElementById("wishlist");
			wishlistButton.innerHTML = '<img src="../Images/wishlist.png" / width="31px">';
			
			var cartButton = document.getElementById("cart");
			cartButton.innerHTML = '<img src="../Images/cart1.png" / width="31px">';
			
			var userButton = document.getElementById("user");
			userButton.innerHTML = '<img src="../Images/user.png" / width="51px">';
			
			document.getElementById('searchBox').style.height="35px";
			document.getElementById('searchBox').style.fontSize="17px";
			
			
			
			
			
	</script>
</html>