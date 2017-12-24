<!--?php
session_start();

//$user['name']=$_REQUEST['uname'];
//$pass=$_REQUEST['password'];
if($_SESSION['userlist']){
	$userlist=$_SESSION['userlist'];
	
	foreach ($userlist as $user){
		//var_dump($user);
	
		if($user['uname']==$_REQUEST['uname'] && empty($_REQUEST['uname'])==false)
		{
			if($user['password']==$_REQUEST['password'] && empty($_REQUEST['password'])==false)
		
		{
			$_SESSION['currentUser']=$user;
			//var_dump($_SESSION['currentUser']);
			
			header('location:bord.php');
			//break;
		} 
		}
		 
		else
		{
			if($user['uname']="admin" && !empty($_REQUEST['uname']) && $user['password']="admin" &&!empty($_REQUEST['password']) )
			{
				header('location:admin.php');
				
			} 
			
			else if($user['uname']===$_REQUEST['uname'] && $user['password']===$_REQUEST['password'])
			{
				include "login.html";
				//header('location:login.html');
				echo "Invalid username or password";
				
			}
			else{
				
				
				include "login.html";
				//header('location:login.html');
				echo "Invalid username or password";
				
				break;
				
				//header('location:login.html');
			}//break;
		}
		
		
	}
}

-->


<?php
include('session.php');


$un=$_REQUEST['uname'];
$pass=$_REQUEST['password'];
if($_SESSION['userlist']){
	$userlist=$_SESSION['userlist'];
	
	foreach ($userlist as $user){
		//var_dump($user);
	
		if($un==$user['uname'] && $pass==$user['password'] && !empty($un)&& !empty($pass)){
			$_SESSION['currentUser']=$user;
			//var_dump($_SESSION['currentUser']);
			header('location:bord.php');
			//break;
		}
		else {
			if($un=="admin" && $pass=="admin"){
				header('location:../admin/bord.php');
			}
			else{
			
			header('location:login.php?error1=1');
			}
			
			}
		
	}
}
else{
	header('location:login.php?error1=1');
}
?>

?>