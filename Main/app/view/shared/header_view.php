<?php

include(dirname(__DIR__).'/../../links.php');
header('dirname(__DIR__).$homeController');
//include("links.php");
?>

<html>
	<head>
		
	</head>
	<body  align="center" width="80%">
		<header>
			<table width="100%" align="center" border="0">
			
				<tr id="row1" >
					<td  width="100%" height="40px" align="right">
                         					
						<a href="Index.php" id="home"><img src="home2.png" width="45px" height="45px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="App/Controller/Shared/log.php"id="log"><img src="loginn.png" width="45px" height="45px"/></a> &nbsp;&nbsp; &nbsp;&nbsp;
						<a href="contact.php" id="contact"><img src="contactus.png"  height="43px" /></a> &nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
			
			<table border="0" width="100%">
				
				<tr>
					<td width="25%" align="center"><img src="logo.jpg" height="150px" width="120"</td>
					<td width="50%" align="center">
						<form>
							<input type="text" height="31" placeholder=" Search By Book/Author/Course" size="35" id="searchBox"/>
							<a href="../../../App/Controller/Home/search_controller.php"><img src="searchIcon.png" id="searchIcon"/></a>
							
						</form>
					</td>
					<td>
						<a href="../../../App/Controller/Home/wishlist_controller.php" id="wishlist"><img src="wishlist.png"width="30px" height="30px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="../../../App/Controller/Home/cart_controller.php" id="cart"><img src="cart.png" width="30px" height="30px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="../../../App/Controller/Home/log_controller.php" id="log"><img src="loginn.png" width="75px" height="75px"/></a>
					</td>
				</tr>
				
			</table>
			
			<table width=70% align="center">
				<tr id="row2" height="30px" width="100%">
							<td>
								<form><!--need make hover dropdoen later-->
									<b><font color="ffffff">&nbsp;&nbsp;&nbsp;&nbsp;&nbspCS</font></b><br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="dept">
									<option value="">Select Course</option>
									<option value="c">Course1</option>
									<option value="EEE">Course2</option>
									<option value="COE">Course3</option>															
									</select>
								</form>
							</td>				
							
				</tr>
			</table>
		</header>
		<br/> <br/>
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