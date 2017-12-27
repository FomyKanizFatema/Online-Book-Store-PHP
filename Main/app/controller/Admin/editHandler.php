<?php 
session_start();
echo dirname(__DIR__);
include(dirname(__DIR__).'/../../Service/person.php');
echo $_REQUEST['name'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
editEmployee($name,$email,$phone);
$fetchedUser=getEmployeeByEmail($person['email']);
$_SESSION['user']=$fetchedUser[0];


/*$user['NAME']=$_REQUEST['name'];
$user['EMAIL']=$_REQUEST['email'];
$user['PHONE']=$_REQUEST['phone'];
$user['DEPARTMENT']=$_REQUEST['dept'];
$user['ID']=$_SESSION['user']['USER_ID'];
editUser($user);*/?>
<script type="text/javascript">
		window.location.href = '/project/main/app/controller/Admin/editProfile.php?m=1';
		</script>