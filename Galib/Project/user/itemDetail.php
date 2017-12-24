
<html>

  <head>
		<title>AIUB Online Book Store</title>
	  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
 
	  
   </head>

   <body>
   
   	<html>
	
	<body>
		
		<header>
			<table border='0'width="95%" align="center" cel="10px">
			
			<tr >				
				<td border="0" width='20%'><a href="home.php"> <img src="t.jpg" height="150"/></a>
				
				</td>
				<td width='60%' align="center">
					<form action="Handler/search.php">
					<input type="text" name="search" placeholder="  Search by Course/ Books/ Authors" size="31" height="100px" /> 
					<input type="submit" value="Search" />
					</form>
				</td>
				<td cellpadding="" width='50%'>
				<div align="left" >
				
					<a href="userHome.php">	<input type="submit" value="Home" /></a>
					
					<a href="wishlist.php">	<input type="submit" value="Wishlist" /></a>
					<a href="usercard.php">	<input type="submit" value="Cart" /></a>
					<a href="contact.php"><input type="submit" value="Contact Us" /></a>					
					<a href="login.php"><input type="submit" value="Sign Out" /></a>
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
	<table border='1' width="100%" cellpadding="15px">
			<tr>
				<td width="20%" > 
					<table cellpadding="15px" align="center">
						<tr ><th >Account</th></tr>
						<tr align="center"><td><a href="userDashboard.php">Dashboard</td></tr>
						<tr align="center"><td><a href="View_User_Profile.php">View Profile</td></tr>
						<tr align="center"><td><a href="Edit_User_Profile.php">Edit Profile</td></tr>
						<tr align="center"><td><a href="Change_User_Picture.php">Change Profile Picture</td></tr>
						<tr align="center"><td><a href="Change_User_Pass.php">Change Password</td></tr>						
					</table>
				</td>
	
	
	<td>
	
	
		
      <table width = "70%" height="" align="center">
  
			<tr>


	 


				<td>
					<h4>Item Details :</h4><br/>
					<img src="e.jpg" alt="Forest" width="200" height="250">
				  </td>
				 <td >
					  <b ><!--align="center" style="<!--position: absolute;top:200px;left:400px; " --> Book Name : Demo</b><br/>
					  <b  ><!--align="center" style="<!--position: absolute;top:220px;left:400px; "--> by <font size="4px" color="green"> Demo</font></b><br/>
					  <b ><!--style="<!--position: absolute;top:240px;left:400px; "-->-----------------------------</b><br/>
					   <b ><!--style="<!--position: absolute;top:260px;left:400px; "-->Edition : Demo </b><br/>

					  <b ><!--style="<!--position: absolute;top:280px;left:400px; "-->Publisher: Demo<br/> </b>
					   <b ><!--style="<!--position: absolute;top:300px;left:400px; "-->Cagagory : Demo<br/> </b><br/>
							   <b ><!--style="position: absolute;top:330px;left:400px; "--> <a  href="usercard.php"> Add to card  </a> </b><br/><br/>

						<b ><!--style="position: absolute;top:370px;left:400px; "-->Related Cetagory : Demo<br/> </b><br/><br/>

				</td>


			</tr>
		</table>
	</td>
</tr>
</table>
 
</html>