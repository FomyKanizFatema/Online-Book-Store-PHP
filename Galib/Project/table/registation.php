<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>

<head>
		<title>Tienda De Floris</title>
</head>
	<body>
		<?php include("header.php");?>
		<br/>
<form action="regihandler.php" method="post">
		
<table  align="center" width="100%"  >
<!--tr bgcolor = "steelblue"><!-- style="background-image:url('ab.jpg ');background-repeat:no-repeat;background-size:100%;width="50%" height="40" -->
	<!--td align="right" style="color:white" ><!--img src="b.png" align="left" width="150" /--><!--font size="6"><center><b><p>Registration</p></center></b></font>
	<!--a href="home.php" ><b style="color:white"><font size="4">Home</font></b></a>
	<b>|</b>
	<a href="login.php" ><b style="color:white"><font size="4">Login</font></a> 
	<b>|</b>
	<a href="registation.php" ><b style="color:white"><font size="4">Registration</font></a><br/>	
	
	</td>

</tr-->

<tr ><!--style="background-image:url('ab.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500" --> <td>
<fieldset>
<legend>Registration</legend><br/>

<b style="color:">Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  :  </b> <input name="name" type="text" /><br/><br/>
<b style="color:">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text"/><img src="i.png"width="30" title="example@gmail.com"/><br/><br/>
<b style="color:">User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="uname" type="text" /><br/><br/>
<b style="color:">Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="password" type="password" /><br/><br/>
<b style="color:">Confirm Password &nbsp : </b> <input name="password" type="password" /><br/><br/><br/>


<legend style="color:">Gender :</legend>
<input name="gender" type="radio" value="male" /><b style="color:">male
<input name="gender" type="radio" value="female"/>Female
<input name="gender" type="radio" value="other"/>Other<br/><br/>



<legend style="color:">Date of Birth :</legend>
<table >
<td style="color:">dd<br/><input name="dd" type="text" / >  /
<td style="color:">mm<br/><input name="mm" type="text"/ > /
<td style="color:">yyyy<br/><input name="yyyy" type="text"/ ><td style="color:">(dd/mm/yyyy)
</td>
</fieldset>
</table><br/><br/>


	<input type="submit" value="Submit"/>&nbsp &nbsp
	<input type="reset" value="Reset"/>





</td>
</tr>
</table><br/>

</form>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		$name=$_REQUEST['name'];
		$uname=$_REQUEST['uname'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$password=$_REQUEST['password'];

		$gender=$_REQUEST['gender'];
		$birthday=$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy'];
		
		$dd=$_REQUEST['dd'];
		$mm=$_REQUEST['mm'];
		$yyyy=$_REQUEST['yyyy'];
		$type=$_REQUEST['type'];
		
		$sql = "INSERT INTO persons (name,email,username,password,confirmpassword,gender,birthday,role) VALUES ('$name', $email, $uname, $password,$password,$gender,$birthday,$type)";		
		echo $sql;
		$conn = mysqli_connect("localhost", "root", "", "person_db", 3306);
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		
	}
?>
