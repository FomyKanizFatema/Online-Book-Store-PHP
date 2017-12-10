<html>
	
	<body>
		
		<header>
			  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->

			<table border='0'width="95%" align="center" cel="10px">
			
			<tr >				
				<td border="0" width='30%'><a href="../user/home.php"> <img src="t.jpg" height="150"/></a>
				
				</td>
				<td width='20%'>
					<form action="Handler/search.php">
					<input type="text" name="search" placeholder="  Search by Course/ Books/ Authors" size="31" height="100px" />
					
					<!--a href=""><i style="color:;padding:2px" class="fa fa-search"></i></a-->
					
					<input type="submit" value="Search" />
					</form>
				</td>
				<td cellpadding="" width='50'>
				<div align="left" >
				
				<!--a href="">User Name</a-->
				
					<!--select>	
						<option value=""><a href="">Welcome User Name</a></option>
						<option value=""><a href="homeUser.php">Home</a></option>
						<option value=""><a href="userDashboard.php">Dashboard</a></option>
						<option value=""><a href="View_User_Profile.php">View Profile</a></option>
						<option value=""><a href="Edit_User_Profile.php">Edit Profile</a></option>
						<option value=""><a href="Change_User_Picture.php">Change Profile Picture</a></option>
						<option value=""><a href="Change_User_Pass.php">Change Password</a></option>
					</select-->
					<a href="../user/home.php"><input type="submit" value="Home" /></a>
					<a href="card.php"><input type="submit" value="Cart" /></a>
					<!--input type="submit" value="Contact" /-->
					<a href="../user/login.php"><input type="submit" value="Sign Out" /></a>
					<!--<a href="signIn.php">Sign In</a> |
					<a href="signUn.php">Sign Un</a> |
					<a href="contact.php">Contact Us</a>!-->					
				</div>
				</td>
			</tr>
				<tr>
				<td colspan="3" align="center" >
				<!--Menue Bar-->
					<table border='0' align="center" cellspacing="15px">
						<tr>
							<td>
								<form><!--need make hover dropdoen later-->
									<b>CS</b><br/>
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
									<b>EEE</b><br/>
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
									<b>COE</b><br/>
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
									<b>BBA</b><br/>
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
									<b>English</b><br/>
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
									<b>Architecture</b><br/>
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
									<b>Law</b><br/>
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
									<b>Programming</b><br/>
									
									<select name="dept">
									<option value="">Select Subject</option>
									<option value="c">C</option>
									<option value="c++">C++</option>
									<option value="java">JAVA</option>
									<option value="c#">C#</option>
									<option value="python">PYTHON</option>
									<option value="python">Android</option>
									<option value="algorithm">Algorithm</option>
									<option value="dataStructure">Data Structure</option>						
									</select>
								</form>
							</td>							
						</tr>
					</table>
				</td>
				</tr>
			</table>
		</header>		
	</body>
</html>