<?php include(realpath("../../../App/View/Shared/header_view.php"));?>

<head>
		<title>Tienda De Floris</title>
</head>

	<body>

		
		<table border="0" align="center">
			<tr valign="top">
			 <td>
			 
					<form action="../../../App/Controller/Home/login_controller.php">
							<fieldset>
								<legend>LOGIN</legend>
									<table >
										<tr>
										<td><b>User Name </b></td>				
										<td><b>: </b><input type="text" name="uname"></td>
										</tr>
										<tr>
										<td><b>Password <b></td>	
										<td><b>: </b><input type="text" name="pass"></td>
										</tr>
										
									</table>
									<hr>
									<input type="checkbox" name="remember" value="remember">Remember Me
									<br/>
									<br/>
									<input type="submit" value="Submit">
									<a href="forget.html">Forgot Password?</a>
									
							</fieldset>
					</form>
										
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
								
								<table id="two" align="center" >

									<tr>
										<td>										
											<form action="../../../App/Controller/Home/registration_controller.php" >
										<fieldset>
											<legend>Don't Have An Account? Register Here</legend>
												<table>
													<tr>
													<td><b>Name </b></td>				
													<td><b>: </b><input type="text" name="name"></td>
													
													</tr>
													
													<tr>
													<td><b>Email </b></td>				
													<td><b>: </b><input type="text" name="email"></td>
													</tr>
													
													<tr>
													<td><b>User Name </b></td>				
													<td><b>: </b><input type="text" name="uname"></td>
													</tr>
													
													<tr>
													<td><b>Password <b></td>	
													<td><b>: </b><input type="text" name="pass"></td>
													</tr>
													
													<tr>
													<td><b>Confirm Password <b></td>	
													<td><b>: </b><input type="text" name="cpass"></td>
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
													</tr>
													
													<tr >
														<td colspan="2">
														<fieldset>
															<legend>Date of Birth</legend>
															<table>
													<tr>
														<td>dd</td>
														<td/>
														<td>mm</td>
														<td/>
														<td>yyyy</td>
													</tr>
													<tr valign="top">
														<td>
															<!--<form action="handler.php">-->
																<input type="dd" name="date">
															<!--</form>-->
														</td>
														<td>/</td>
														<td>
															<!--<form action="handler.php">-->
																<input type="text" name="month">
															<!--</form>-->
														</td>
														<td>/</td>
														<td>
															<!--<form action="handler.php">-->
																<input type="text" name="year">
															<!--</form>-->
														</td>
													</tr>
												</table>
															
														</fieldset>
														</td>
													</tr>
												</table>
												<hr>					
												<br/>
												<input type="submit" value="Submit">
												 <input type="submit" value="Reset">
												
												
										</fieldset>
									</form>
								</td>

							</tr>
							</table>
							
					</td></tr></table> 
	  
	   
   </body>

</html>



<script type="text/javascript">
	
	var forget = document.getElementById("for").style.color = "red";
	
	var log = document.getElementById("one");
	log.style = "position:absolute;top:45%;left:5%";
	
	var reg = document.getElementById("two");
	reg.style = "position:absolute;top:45%;left:40%";
	
	var cop = document.getElementById("three");
	cop.style="position:absolute;top:150%";
	
</script>
