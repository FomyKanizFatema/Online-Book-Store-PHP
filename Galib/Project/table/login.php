

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
	<div id="login">
<form action="../table/loginHandler.php">

   
  <!--table width = "100%" height="">
      <!--div class="sticky">
		 
         <!--tr -->
		
            <!--td colspan = "2" bgcolor = "steelblue" align="right" -->
			 
               <!--h1 style="color:white" align="center">AIUB BOOK STORE</h1>
			  <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>
			   <a href="../table/home.php" ><b style="color:white" ><font size="4">Home</font></b></a>
	<b>|</b>
<a href="../table/login.php" ><b style="color:white"><font size="4">Logout</font></a> 
	<b>|</b>
	<a href="../table/registation.php" ><b style="color:white"><font size="4">Registration</font></a><br/>	
</b>

</center>
	<!--/td-->
	
         <!--/tr-->
 <!--/div-->
  <!--tr valign = "top" align="left" >
		  
           
			
			
   <!--div class="sticky1">
   <div class="space">
   
   
            
				<b > <a href="../admin/bord.php"style="color:white" >  Discover</a></b>
				<b> <a href="../admin/adminpro.php"style="color:white">  TopBooks</a></b>
				<b> <a href="../admin/editpro.php"style="color:white;word-spacing:0px"> coming Soon</a></b>
				<b> <a href="../admin/profile.php"style="color:white">  Recommended</a></b>
				<b><a href="../admin/reset_password.php"style="color:white">  Genres</a></b>
				<!--a href="../table/login.php">  <li> Logout</a><br /><br/-->
				

				<!--b> <a href="../table/userdetail.php"style="color:white"> Reading</a></b>
				<b> <a href="../admin/viewpro.php"style="color:white"> History</a></b>
				<b> <a href="../admin/viewpro.php"style="color:white;word-spacing:0px"> Read Later</a></b>
				<b><a href="../admin/viewpro.php"style="color:white"> Favourates</a></b>
				
				<b><input type="text" placeholder="Search" style="padding:2px"/><a class="c" href="" style="word-spacing:0px"><!--button  style="width:45px;padding:2px" title="search"--><i style="color:white;padding:2px" class="fa fa-search"></i><!--/button--></a></b>
          
		   <!--/div>
		   </div-->
           <!--/tr-->
 
 
<body >
<table id="one"><!-- style="position:absolute;top:45%;left:5%" -->
<tr align="" ><!--style="background-image:url('f.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500"--> <td>



<fieldset>
<legend>LOGIN</legend>	<br/>
<b >User Name : </b> <input name="uname" type="text" placeholder="Enter User Name" /><br/><br/>
<b >Password &nbsp &nbsp: </b> <input name="password" type="password" placeholder="Enter Password" /><br/><br/>
<input  type="checkbox"/><b >Remember Me</b><br/><br/>

<input type="submit" value="login"/>



<b><a href="forgotpass.php" id ="for">Forgot Password?</a></b><br/><br/>


	<?php
		if(isset($_GET['error1']))
	{
		echo '<font size="4px" color="red"<b>Invalid username or password</b></font>';
	}
	?>


</td>


</tr>

</table>
</form>
</div>

<table id="two" align="center" ><!-- style="position:absolute;top:45%;left:40%" -->
<form action="regihandler1.php">
<tr><!--style="background-image:url('ab.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500" -->
 <td>
<fieldset>
<!--legend>Registration</legend><br/-->
<b> <font size="5" > No Account?  sign up here </font> </b><br/><br/>
<b >Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  :  </b> <input name="name" type="text" placeholder="Name" />
<?php
		if(isset($_GET['errors3']))
	{
		echo '<font  color="red"<b>Invalid Name</b></font>';
	}
	?><br/><br/>
<b >Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text" title="example@gmail.com" placeholder="Email"/><!--img src="i.png"width="30" title="example@gmail.com"/-->
<?php
		if(isset($_GET['errors1']))
	{
		echo '<font  color="red"<b>Invalid Email</b></font>';
	}
	?> <br/><br/>
<b >User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="uname" type="text" placeholder="User Name"/>
<?php
		if(isset($_GET['errors4']))
	{
		echo '<font  color="red"<b>Invalid username </b></font>';
	}
	?><br/><br/>
<b>Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="password" type="password" placeholder="Password"/>
<?php
		if(isset($_GET['errors2']))
	{
		echo '<font  color="red"<b>Invalid  Password</b></font>';
	}
	?><br/><br/>
<b >Retype Password &nbsp &nbsp: </b> <input name="cpassword" type="password" placeholder="retype password "/>
<?php
		if(isset($_GET['errors5']))
	{
		echo '<font  color="red"<b>Invalid Password</b></font>';
	}
	?><br/><br/>
	
	<!--b style="color:">Date of Birth :</b-->
<table >
<td><b >Date of Birth &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<td >dd<br/><input name="dd" type="text" / >  /
<td >mm<br/><input name="mm" type="text"/ > /
<td >yyyy<br/><input name="yyyy" type="text"/ >
</td>
</fieldset>
</table>
<?php
		if(isset($_GET['errors6']))
	{
		echo '<font  color="red"<b>Invalid Dath of Birth </b></font>';
	}
	?><br/><br/>


<b >Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<input name="gender" type="radio" value="male" /><b >male
<input name="gender" type="radio" value="female"/>Female
<input name="gender" type="radio" value="other"/>Other &nbsp &nbsp &nbsp &nbsp
<?php
		if(isset($_GET['errors7']))
	{
		echo '<font  color="red"<b>Select Gender </b></font>';
	}
	?><br/><br/><br/>




	<input type="submit" value="Sign up"/>&nbsp &nbsp
	<!--input type="reset" value="Reset"/-->


<br/><br/>

<?php
		if(isset($_GET['errors']))
	{
		echo '<font size="4px" color="red"<b>File can not be empty</b></font>';
	}
?>

<?php
		if(isset($_GET['error0']))
	{
		echo '<font size="4px" color="green"<b>Registration Successful		</b></font>';
	}
?>



</td>

     </tr>

	 </form>
	</fieldset>	
	
	
	
	
	
		 <table id="three" border='1' align="center" width="100%"><!-- style="position:absolute;top:150%"-->
          <tr  >
		  
            <td colspan = "2" bgcolor = "">
               <center >
                  Copyright © 2017
               </center>
            </td>
			
         </tr>
        
      </table>
	  </table>
	   
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
