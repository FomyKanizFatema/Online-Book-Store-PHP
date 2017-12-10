<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<html>

   <head>
		<title>AIUB Online Book Store</title>
	  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
 
	  
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
				<a href="../table/login.php">  <li> Logout</a><br /><br/>
				
					</ul><br/>
					
					<hr/><b>Orders</b><br/><hr><br/>
					<ul>
						<li><a href="Order/Orders.php">New Order List</a></li>
						<li><a href="Order/Order_History.php">Order_History</a></li>
												
											
					</ul><br/>
					
					<hr/><b>Users</b><br/><hr><br/>
					<ul>
						<li><a href="userdetail.php">User List</a></li>
						<li><a href="Update_User_Info.php">Update User Info</a></li>
						<li><a href="Add User.php">Add User</a></li>
						<li><a href="Block_User">Block User</a></li>
						<li><a href="Remove_User.php">Remove User</a></li>						
					</ul><br/>
					
					<hr/><b>Books</b><br/><hr><br/>
					<ul>
						<li><a href="Books.php">Book List</a></li>
						<li><a href="Update_Book_Info.php">Update Book Info</a></li>
						<li><a href="Add Book.php">Add Book</a></li>						
						<li><a href="Delete_Book.php">Delete Book</a></li>						
					</ul><br/>
					
					<hr/><b>Employees</b><br/><hr/><br/>
					<ul>
						<li><a href="Employee.php">Employee List</a></li>
						<li><a href="Update_Employee_Info.php">Update User Info</a></li>
						<li><a href="Add Employee.php">Add User</a></li>
						<li><a href="Block_Employee">Block User</a></li>
						<li><a href="Remove_Employee.php">Remove User</a></li>						
					</ul>
					
					
				</td>
               
			<td bgcolor = "" width = "1050" height = "200">

        
 
	<!--tr>
         <td bgcolor = "#eee" align="left" height="900" valign = "top" >
	    <!--   ADD YOUR CODE HERE...<font size="6"><!--?php echo $currentUser['name']; ?--></font-->
			   
		
 <table border="1" align="" >
	<tr>
	    <th>serial No.</th>
		<th>Item Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total</th>
		<th>Action</th>
		<!--th>pass Year</th-->
	</tr>
	
	<tr>	<td>1</td> <td>Algorithm </td> <td>2</td> <!--b align="center" style="position:absolute;top:130px;right:260px"--><td>00.00</td> <td>00.00</td> <td><a href="order.php">Confirm</a> | <a href="">Remove</a></td> </tr>
	<tr>	<td>2</td> <td>Cs math</td> <td>3</td>  <!--b align="center" style="position:absolute;top:150px;right:260px"--><td>00.00 <td>00.00</td> <td><a href="order.php">Confirm</a> | <a href="">Remove</a></td> </tr>
	<tr>	<td>3</td> <td>Accounting </td> <td>1</td> <!--b align="center" style="position:absolute;top:170px;right:260px"--><td>00.00</td> <td>00.00</td> <td><a href="order.php">Confirm</a> | <a href="">Remove</a></td> </tr>
	
	


</table>

<br/>




   
			   
            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "steelblue">
               <center style="color:white">
                  Copyright © 2017
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>
