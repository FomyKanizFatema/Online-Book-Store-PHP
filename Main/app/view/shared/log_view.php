
<head>
		<title>Tienda De Floris</title>
</head>

	<body>

	
	<header>
			<table width="100%" align="center" border="0">
			
				<tr id="row1" >
					<td  width="100%" height="40px" align="right">
                         					
						<a href="index.php" id="home"><img src="home2.png" width="45px" height="45px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						
						<a href="app/controller/shared/contact.php" id="contact"><img src="contactus.png"  height="43px" /></a> &nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
			
			<table border="0" width="100%">
				
				<tr>
					<td width="25%" align="center"><img src="logo.jpg" height="150px" width="120"</td>
					<!--<td width="50%" align="center">
						<form>
							<input type="text" height="31" placeholder=" Search By Book/Author/Course" size="35" id="searchBox"/>
							<a href="../../../App/Controller/Home/search_controller.php"><img src="searchIcon.png" id="searchIcon"/></a>
							
						</form>
					</td>
					
				</tr>
				
			</table>
			
			<table width=70% align="center">
				<tr id="row2" height="30px" width="100%">
				
							<td>
								<table width="100%"><tr/>
									<?php //include(dirname(__DIR__).'/../controller/shared/dept_course_fetcher.php');?>
								</tr></table>
							
								
							</td>									
							
				</tr>
			</table>-->
			
		</header>
	
	
		<br/><br/></br>
		<h1>You must have to have an Account first</h1>
		<table border="0" align="center">
			<tr valign="top">
			 <td>
			<br/>
					<form action="App/Controller/Shared/login.php" method="POST">
							<fieldset>
								<legend>LOGIN</legend>
								 
								<font color="red"><?php if (isset($_REQUEST['k'])){echo "Incoreect Username or Password";}?></font>
									<table >
										<tr>
										<td><b>Email </b></td>				
										<td><b>: </b><input type="email" name="email"></td>
										</tr>
										<tr>
										<td><b>Password <b></td>	
										<td><b>: </b><input type="text" name="pass"></td>
										</tr>
										<tr>
										
										<td><b>Login As <b></td>
										<td>
										<input type="radio" name="role" value="customer">Customer
										<input type="radio" name="role" value="admin">Admin
										<input type="radio" name="role" value="employee">Employee
										</td>	
										
										</tr>
										
									</table>
									<hr>
									<!--<input type="checkbox" name="remember" value="remember">Remember Me-->
									<br/>
									<br/>
									<input type="submit" value="Submit">
									<!--<a href="forget.html">Forgot Password?</a>-->
									
							</fieldset>
					</form>
										
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
								
								<table id="two" align="center" >

									<tr>
										<td>										
											<form action="App/Controller/Shared/registration.php" >
										<fieldset>
											<legend>Don't Have An Account? Register Here</legend>
											 <h3 align="center"><font color="red" ><?php if(isset($_REQUEST['m'])){
					if($_REQUEST['m']==1){
				echo "Field can not be empty";}
				}?></font></h3>
				<br/>
												<table>
													<tr>
													<td><b>Name </b></td>				
													<td><b>: </b><input type="text" name="name"></td>
													<?php
															if(isset($_GET['errors3']))
														{
															echo '<font  color="red"<b>Name at lest 3 character</b></font>';
														}
													?>
													</tr>
													
													<tr>
													<td><b>Email </b></td>				
<<<<<<< HEAD
													<td><b>: </b><input type="text" name="email"></td>
													<?php
															if(isset($_GET['errors1']))
														{
															echo '<font  color="red"<b>Invalid Email</b></font>';
														}
													?>
=======
													<td><b>: </b><input type="email" name="email"></td>
>>>>>>> 358fd4abb7f9017a2724d7689e4b7196fdeb3205
													</tr>
													
													<tr>
													<td><b>Phone </b></td>				
													<td><b>: </b><input type="text" name="phone"></td>
													<?php
															if(isset($_GET['errors6']))
														{
															echo '<font  color="red"<b>Invalid Phone Number</b></font>';
														}
													?>
													</tr>
													
													<tr>
													<td><b>Department </b></td>				
													<td><b>: </b><input type="text" name="dept"></td>
													<?php
															if(isset($_GET['errors4']))
														{
															echo '<font  color="red"<b>Invalid Department</b></font>';
														}
													?>
													</tr>	
													
													<tr>
													<td><b>Password <b></td>	
													<td><b>: </b><input type="text" name="pass"></td>
													<?php
															if(isset($_GET['errors5']))
														{
															echo '<font  color="red"<b>Invalid Password</b></font>';
														}
													?>
													</tr>
													
													<tr>
													<td><b>Confirm Password <b></td>	
													<td><b>: </b><input type="text" name="cpass"></td>
													<?php
															if(isset($_GET['errors2']))
														{
															echo '<font  color="red"<b>Invalid Password</b></font>';
														}
													?>
													</tr>	
													<tr>
														<td colspan="2">
														<fieldset>
															<legend>Gender</legend>
															<input type="radio" name="gender" value="male"/>Male
															<input type="radio" name="gender" value="female"/>Female
															<input type="radio" name="gender" value="other"/>Other
														</fieldset>
														</td>
														<?php
															if(isset($_GET['errors7']))
														{
															echo '<font  color="red"<b>Select Gender</b></font>';
														}
													?>
													</tr>
													<?php
															if(isset($_GET['error0']))
														{
															echo '<font size="4px" color="green"<b>Registration Successful		</b></font>';
														}
													?>

													
												</table>
															
														</fieldset>
														</td>
													</tr>
												</table>
												<hr>					
												<br/>
												<input type="submit" value="Submit">
												
												
												
										</fieldset>
									</form>
								</td>

							</tr>
							</table>
							
					</td></tr></table> 
	  
	   
   </body>

</html>

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

<script type="text/javascript">
	
	var forget = document.getElementById("for").style.color = "red";
	
	var log = document.getElementById("one");
	log.style = "position:absolute;top:45%;left:5%";
	
	var reg = document.getElementById("two");
	reg.style = "position:absolute;top:45%;left:40%";
	
	var cop = document.getElementById("three");
	cop.style="position:absolute;top:150%";
	
</script>
