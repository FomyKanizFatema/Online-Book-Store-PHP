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
               
			   <form action="handler.php">
<fieldset>
<legend>Profile</legend>
<table cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php  echo $currentUser['name']; ?></td>
                <td rowspan="7" align="center">
                    <img width="128" src="user.png"/>
                    <br/>
                    <a href="profile.php">Change</a>
                </td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php  echo $currentUser['email']; ?></td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>			
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?php  echo $currentUser['gender']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td><?php  echo $currentUser['birthday']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>Admin</td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>Active</td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>User Since</td>
                <td>:</td>
                <td>15/09/2015</td>
            </tr>
        </table>	



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