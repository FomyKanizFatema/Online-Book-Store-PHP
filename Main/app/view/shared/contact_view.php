<?php include(realpath("../../../App/View/Shared/header_view.php"));?>
<html>
	<head>
	</head>
	<body>
		<table align="center">
			<tr>
				<th colspan="2">Contact Us</th>
			</tr>
			<tr>
				<td>Email</td>
				<td>: abc@gmail.com</td>
			</tr>
		</table>
	</body>
	
	
	
	
	<script type="text/javascript">
			document.getElementById('searchBox').style.height="36px";
			document.getElementById('searchIcon').style.height="41px";
			document.getElementById('searchIcon').style.width="45px";
			document.getElementById('searchBox').style.fontSize="17px";
			document.getElementById("searchIcon").style.marginBottom = "-16px"
			document.getElementById("row1").style.backgroundColor = "4889F3";
			document.getElementById("row2").style.backgroundColor = "4889F3";
			document.getElementById("searchButton").style.backgroundColor = "ffffff";
			document.getElementById("wishlist").style.backgroundColor = "ffffff";
			document.getElementById("cart").style.backgroundColor = "ffffff";
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