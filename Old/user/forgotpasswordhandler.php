 <?php
	//var_dump($_REQUEST);
	
		$email=$_REQUEST['aemail'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false &&empty($email)==false)
		{
			
			//echo $email;
			include '../table/password.php';
			//header('location : ../table/password.html');
			
			 
		}
		
	
		else
		{
			include 'forgotpass.php';
			echo "Invalid email";
			
			
		}
	//}
	
?>