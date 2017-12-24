<?php
session_start();
		if(!isset($_SESSION['userlist']))
		{
			$_SESSION['userlist']=array();
		}
		
		$email=$_REQUEST['email'];
		
		$user['name']=$_REQUEST['name'];
		$user['uname']=$_REQUEST['uname'];
		$user['email']=$_REQUEST['email'];
		$user['password']=$_REQUEST['password'];
		$user['gender']=$_REQUEST['gender'];
		$user['birthday']=$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy'];
		
		$user['dd']=$_REQUEST['dd'];
		$user['mm']=$_REQUEST['mm'];
		$user['yyyy']=$_REQUEST['yyyy'];
		
		//$user['type']=$_REQUEST['type'];
		
		$size=count($_SESSION['userlist']);
		$_SESSION['userlist'][$size]=$user;
		
		if($user['name']=="" || $user['uname']=="" || $user['email']==""|| $user['password']==""|| $user['gender']=""|| $user['birthday']=="" )
		{
			
			echo "No field can be empty<br/>";
		}
	else
	{
	/*	if(empty($type))
	{
		
		echo "Select user type";
	}*/
	 if( empty($_REQUEST['password'])==true)
	{
		
		echo  "Enter valid  password"."<br/>";

	}
	else if(empty($_REQUEST['name'])==true)
	{
				echo  "Enter valid name"."<br/>";

	}
	else 	if(empty($_REQUEST['uname'])==true)
	{
				echo  "Enter valid user name"."<br/>";

	}
	else	if(empty($_REQUEST['password'])==true)
	{
				echo  "Enter valid password"."<br/>";

	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)==true || empty($email)==true)
	{
		echo "Invalid email address"."<br/>";

	}
	else if(empty($_REQUEST['gender'])==true)
	{
		echo"select gender"."<br/>";

	}
	else if(($_REQUEST['dd']<=1&&$_REQUEST['dd']<=31)&&($_REQUEST['mm']<=1&&$_REQUEST['mm']<=12)&&($_REQUEST['yyyy']<=1900))
	{
		echo "Invalid date"."<br/>";

	}
	
	else {
				
				header('location:login.php');
		}





		
	}





?>