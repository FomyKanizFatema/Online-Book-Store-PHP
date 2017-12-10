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
		$user['cpassword']=$_REQUEST['cpassword'];
		$user['gender']=$_REQUEST['gender'];
		$user['birthday']=$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy'];
		$user['dd']=$_REQUEST['dd'];
		$user['mm']=$_REQUEST['mm'];
		$user['yyyy']=$_REQUEST['yyyy'];
		//$user['dd']=$_REQUEST['dd'];
		//$user['mm']=$_REQUEST['mm'];
		//$user['yyyy']=$_REQUEST['yyyy'];
		
		//$user['type']=$_REQUEST['type'];
		
		$size=count($_SESSION['userlist']);
		$_SESSION['userlist'][$size]=$user;
		
		if($user['name']=="" || $user['uname']=="" || $user['email']==""|| $user['password']=="" )
		{
			header('location:login.php?errors=2');
			echo '<font color="red" ><b>File can note be empty</b></font>';
		}
	else
	{
	/*	if(empty($type))
	{
		
		echo "Select user type";
	}*/
	 if( empty($_REQUEST['name'])==true )
	{
			
		header('location:login.php?errors3=3');
		//include("login.php");
		echo  "Enter valid name"."<br/>";
	}
	else  if( empty($_REQUEST['cpassword'])==true )

	{
		
		
		header('location:login.php?errors2=3');
		echo  "Enter valid  password"."<br/>";
				

	}
	else 	if(empty($_REQUEST['uname'])==true)
	{
		header('location:login.php?errors4=3');
				echo  "Enter valid user name"."<br/>";

	}
	else	if(empty($_REQUEST['password'])==true || $_REQUEST['password']!=$_REQUEST['cpassword'])
	{
		header('location:login.php?errors5=3');
				echo  "Enter valid password"."<br/>";

	}
	
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)==true || empty($email)==true)
	{
		header('location:login.php?errors1=3');
		//include("login.php");
		echo "Invalid email address"."<br/>";

	}
	
	
	else if(($_REQUEST['dd']<=1&&$_REQUEST['dd']<=31)&&($_REQUEST['mm']<=1&&$_REQUEST['mm']<=12)&&($_REQUEST['yyyy']<=1900))
	{
		header('location:login.php?errors6=3');

		echo "Invalid date"."<br/>";

	}
	else if(empty($_REQUEST['gender'])==true)
	{
		header('location:login.php?errors7=3');

		echo"select gender"."<br/>";

	}
	//else if(empty($_REQUEST['gender'])==true)
	//{
	//	echo"select gender"."<br/>";

	//}
	//else if(($_REQUEST['dd']<=1&&$_REQUEST['dd']<=31)&&($_REQUEST['mm']<=1&&$_REQUEST['mm']<=12)&&($_REQUEST['yyyy']<=1900))
	//{
	//	echo "Invalid date"."<br/>";

	//}
	
	else {
				
				header('location:login.php?error0=0');
				echo "successful";
		}
		





		
	}





?>