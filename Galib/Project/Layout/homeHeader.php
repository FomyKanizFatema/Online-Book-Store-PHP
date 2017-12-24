<html>
	<head>
		
	</head>
	<body  align="center" width="80%">
		<header>
			<table width="100%" align="center" border="0">
			
				<tr id="row1" >
					<td  width="100%" height="40px" align="right"> 
						<a href="home.php" ><font color="ffffff">Home</font></a> &nbsp;&nbsp;
						<a href="Log.php"><font color="ffffff">Log On/In</font></a> &nbsp;&nbsp; 
						<a href="Contact.php"><font color="ffffff">Contact</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
			
			<table border="0" width="100%">
				
				<tr>
					<td width="25%" align="center"><img src="../Images/t.jpg" height="150px" width="120"</td>
					<td width="50%" align="center">
						<form>
							<input type="text" height="31" placeholder=" Search By Book/Author/Course" size="35" id="searchBox"/>
							<button id="searchButton"><img src="../Images/search.png"  width="27px" height ="30px"/></button>
							
						</form>
					</td>
					<td>
						<button id="wishlist"></button>&nbsp;&nbsp;&nbsp;&nbsp;
						<button id="cart"><a href="log.php"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button id="user"></button>
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
							
							<td>
								<form><!--need make hover dropdoen later-->
									<b><font color="ffffff">&nbsp;EEE</font></b><br/>
									&nbsp;<select name="dept">
									<option value="">Select Course</option>
									<option value="c">Course1</option>
									<option value="EEE">Course2</option>
									<option value="COE">Course3</option>															
									</select>
								</form>
							</td>
							
							<td>
								<form><!--need make hover dropdoen later-->
									<b><font color="ffffff">&nbsp;COE</font></b><br/>&nbsp;
									<select name="dept">
									<option value="">Select Course</option>
									<option value="c">Course1</option>
									<option value="EEE">Course2</option>
									<option value="COE">Course3</option>															
									</select>
								</form>
							</td>
							
							<td>
								<form><!--need make hover dropdoen later-->
									<b><font color="ffffff">&nbsp;BBA</font></b><br/>&nbsp;
									<select name="dept">
									<option value="">Select Course</option>
									<option value="c">Course1</option>
									<option value="EEE">Course2</option>
									<option value="COE">Course3</option>															
									</select>
								</form>
							</td>
							
							<td>
								<form><!--need make hover dropdoen later-->
									<b><font color="ffffff">&nbsp;English</font></b><br/>&nbsp;
									<select name="dept">
									<option value="">Select Course</option>
									<option value="c">Course1</option>
									<option value="EEE">Course2</option>
									<option value="COE">Course3</option>															
									</select>
								</form>
							</td>
							
							<td>
								<form><!--need make hover dropdoen later-->
									<b><font color="ffffff">&nbsp;Architecture</font></b><br/>&nbsp;
									<select name="dept">
									<option value="">Select Course</option>
									<option value="c">Course1</option>
									<option value="EEE">Course2</option>
									<option value="COE">Course3</option>															
									</select>
								</form>
							</td>
							
							<td>
								<form><!--need make hover dropdoen later-->
									<b><font color="ffffff">&nbsp;Law</font></b><br/>&nbsp;
									<select name="dept">
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
			document.getElementById("row1").style.backgroundColor = "4889F3";
			document.getElementById("row2").style.backgroundColor = "4889F3";
			document.getElementById("searchButton").style.backgroundColor = "ffffff";
			document.getElementById("wishlist").style.backgroundColor = "ffffff";
			document.getElementById("cart").style.backgroundColor = "ffffff";
			document.getElementById("user").style.backgroundColor = "ffffff";
			
			
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