<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<html>

   <head>
		<title>AIUB Online Book Store</title>
	</head>
	<body>
		<?php include("adminheader.php");?>
		<table border="1" width="100%" align="center" cellpadding="10px">
			<!--tr >				
				<td border="0" colspan="2"><!--div align="center"--> <!--img src="t.jpg" width="10%"><!--div align="center"><b>TIENDA DE FLORIS</b></div-->
				
				
				<!--div align="right" cellpadding="-25">
					Logged in as <a href="Dashboard.php"><!--?php echo "User"/*$currentUser['name']*/;?> </a>|<a href="Users.php">User List</a>|
					<a href="Books.php">Book List</a>|<a href="Employee.php">Employee List</a>|
					<a href="Logout.php">Logout</a>
					
				</div>
				</td>
			</tr-->
         <tr valign = "top" height="500">
            <td bgcolor = "" width ="">
              <b>Account</b><br/><hr><br/>
					<ul>
						 <a href="../admin/bord.php"> <li> Dashbord</a><br />
				 <a href="../admin/adminpro.php"> <li> View Profile</a><br />
				 <a href="../admin/editpro.php"> <li>Edit Profile</a><br />
				 <a href="../admin/profile.php"> <li> Change Profile Picture</a><br />
				<a href="../admin/reset_password.php">  <li> Change Password</a><br />
				<a href="../user/login.php">  <li> Logout</a><br /><br/>
				
					</ul><br/>
					
					<hr/><b>Orders</b><br/><hr><br/>
					<ul>
						<li><a href="card.php"> Order List</a></li>
						<!--li><a href="Order/Order_History.php">Order_History</a></li-->
												
											
					</ul><br/>
					
					<hr/><b>Users</b><br/><hr><br/>
					<ul>
						<li><a href="userdetail.php">User List</a></li>
						<!--li><a href="Update_User_Info.php">Update User Info</a></li-->
						<li><a href="AddUser.php">Add User</a></li>
						<li><a href="../admin/userdetail.php">Block User</a></li>
						<!--li><a href="Remove_User.php">Remove User</a></li-->						
					</ul><br/>
					
					<hr/><b>Books</b><br/><hr><br/>
					<ul>
						<li><a href="booklist.php">Book List</a></li>
						<li><a href="UpdateBookInfo.php">Update Book Info</a></li>
						<li><a href="addbook.php">Add Book</a></li>						
						<!--li><a href="Delete_Book.php">Delete Book</a></li-->						
					</ul><br/>
					
					<hr/><b>Employees</b><br/><hr/><br/>
					<ul>
						<li><a href="employeedetail.php">Employee List</a></li>
						<li><a href="editpro.php">Update User Info</a></li>
						<li><a href="../admin/adduser.php">Add User</a></li>
						<!--li><a href="../admin/userdetail.php">Block User</a></li-->
						<!--li><a href="Remove_Employee.php">Remove User</a></li-->						
					</ul>
					
					
				</td>
            
            <td bgcolor = "" width = "1050" height = "200">
               
			   <form action="../user/handler.php">
<fieldset>
<legend>Edit Profile</legend>

<b>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="name" type="text" value="<?php  echo $currentUser['name']; ?>"/><br/><hr/>
<b>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text" value="<?php  echo $currentUser['email']; ?>"/><img src="i.png"width="30" title="example@gmail.com"/><br/><hr/>
<!--b>User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    : </b> <input name="name" type="text" /><br/><hr/>
<b>Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     : </b> <input name="name" type="text" /><br/><hr/>
<b>Confirm Password &nbsp : </b> <input name="name" type="text" /><br/><hr/-->


<b>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<?php $m="male";$f="female";$o="other"?>
<input name="gender" type="radio" value="male" checked="<?php if ($currentUser['gender'] == $m){ echo 'checked'; } ?>"/>Male
<input name="gender" type="radio" value="female" checked="<?php if ($currentUser['gender'] == $f){ echo 'checked'; } ?>"/>Female
<input name="gender" type="radio" value="other" checked="<?php if ($currentUser['gender'] == $o){ echo 'checked'; } ?>"/>Other<br/><br/>




<table  >
<td><b>Date of Birth  &nbsp &nbsp &nbsp &nbsp &nbsp :</b>
<td>dd<br/><input name="dd" type="text"  value="<?php echo $currentUser['dd'];?>" / >  /
<td>mm<br/><input name="mm" type="text"  value="<?php echo $currentUser['mm'];?>"/> /
<td>yyyy<br/><input name="yyyy" type="text" value="<?php echo $currentUser['yyyy'];?>"/ ><td>
</td>

</table>
<hr/>

<b>Role  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b>
<select name="type">
	
	<option ></option>
	<option value="Admin">Admin</option>	
	<option value="user">User</option>
	<option value="block">Exicutive</option>
	
</select>
<br/><br/><hr/>
<b>Status &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b>
<select name="type">
	
	<option ></option>
	<option value="Admin">Active</option>	
	<option value="user">Pending</option>
	<option value="block">Block</option>
	
</select>
<br/><br/><hr/>
<!--b>Joined &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b><input type="text" value="since "/><hr/-->


<a href="adminpro.php"><button type="button">Update</button></a>
<input type="reset" value="Reset"/>&nbsp
<a href="../admin/viewpro-del.php"><button type="button">Delete</button></a>
&nbsp <a href="../admin/userdetail.php">go back?</a>

</fieldset>
</form>
		</form>	   
            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "">
               <center style="color:">
                  Copyright © 2007
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>