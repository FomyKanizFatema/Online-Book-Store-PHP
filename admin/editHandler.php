<?php
include ('session.php');
//var_dump($_REQUEST);

$count=0;
foreach ($_SESSION['userlist'] as $user){

	if($user['uname']==$_SESSION['currentUser']['uname']){
		$_SESSION['userlist']['name']=$_REQUEST['name'];		
		$user['email']=$_REQUEST['email'];
		//$user['dd']=$_REQUEST['date'];
		//$user['mm']=$_REQUEST['month'];
		//$user['yyyy']=$_REQUEST['year'];
		$user['gender']=$_REQUEST['gender'];
		$user['birthday']=$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy'];
		$user['type'] = $_REQUEST['type'];
		$_SESSION['$count']=$user;
		var_dump($_SESSION['userlist']);
		$_SESSION['currentUser']=$user;
		
		break;
	}
	$count++;
}

//var_dump($userlist);
//header('location:ViewProfile.php');
//$user=array('$name','uname','pass','email','gender')
?>