<form action="registation.php">
<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
	
	//$name = $_REQUEST['name'];
	// $sql = "SELECT * FROM products WHERE name LIKE '$name'";
	// //$sql = "SELECT * FROM persons";		
	// $conn = mysqli_connect("localhost", "root", "", "person_db", 3306);
	// $result = mysqli_query($conn, $sql);
	// $row = mysqli_fetch_assoc($result);

?>

<!--?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_REQUEST['name'];
		$email=$_REQUEST['email'];
		$gender=$_REQUEST['gender'];
		$birthday=$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy'];
		$type=$_REQUEST['type'];

		
		$sql = "SELECT * FROM persons";		
		$conn = mysqli_connect("localhost", "root", "", "person_db", 3306);
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);		
		//header("location: index.php");
	}
?-->
<!--?php
	//$name = $_REQUEST['name'];
	$sql = "SELECT * FROM persons ";
	$conn = mysqli_connect("localhost", "root", "", "person_db", 3306);
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	mysqli_close($conn);
?-->

<html>

   <head>
		<title>Tienda De Floris</title>
   </head>

   <body>
       <body>
      <table width = "100%" border='1' height="">
         
         <tr>
            <td colspan = "2" bgcolor = "" align="right" >
               <h1 style="color:" align="center">Tienda De Floris</h1>
			   <a href="../table/login.php"  ><b style="color:"><font size="4.5" >Logged in as<font size="5"> <?php  echo $currentUser['name']; ?>  </font> </font></b></a>
				<b>|</b>
				<a href="../table/login.php" ><b style="color:"><font size="4.5">Logout</font></a> 
            </td>
         </tr>
         <tr valign = "top" height="500">
            <td bgcolor = "" width ="">
               <b>Account</b><br /><hr/>
			   <ul>
              <h3>
				 <a href="bord.php"> <li> Dashbord</a><br />
				 <a href="viewpro.php"> <li> View Profile</a><br />
				 <a href="editpro.php"> <li>Edit Profile</a><br />
				 <a href="profile.php"> <li> Change Profile Picture</a><br />
				<a href="../table/reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout<br />
			</h3>
			   
			   </ul>
            </td>
            
            <td bgcolor = "" width = "1050" height = "200">
               
			   
<fieldset>
<legend>Profile</legend>

<b>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp </b> <b>  <?php  echo $currentUser['name']; ?> </b> <!--input name="name" type="text" value="<!--?php  echo $currentUser['name']; ?--> <br/><hr/>
<b>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp  </b> <b> <?php  echo $currentUser['email']; ?> <!--</b>"/><img src="i.png"width="30" title="example@gmail.com"/> --><br/><hr/>
<!--b>User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    : </b> <input name="name" type="text" /><br/><hr/>
<b>Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     : </b> <input name="name" type="text" /><br/><hr/>
<b>Confirm Password &nbsp : </b> <input name="name" type="text" /><br/><hr/-->


<b>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp  </b> <b> <?php  echo $currentUser['gender']; ?></b>
<!--<input name="gender" type="radio" value="male"/>male
<input name="gender" type="radio" value="female"/>Female
<input name="gender" type="radio" value="other"/>Other --> <br/> <br/>

<hr/>


<table  >
<td><b>Date of Birth  &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp </b>
<b><?php  echo $currentUser['birthday']; ?> 
</td>

</table>
<hr/>

<b>Type &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b><hr/>
<b>Joined &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b><input type="text" value="since "/>


	<!--br/><br/><input type="submit" value="Edit"/-->
	<!--input type="reset" value="Reset"/-->

</fieldset>
</form>
			   
            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "">
               <center style="color:">
                  Copyright © 2017
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>