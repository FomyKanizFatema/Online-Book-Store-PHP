<?php 
session_start();
echo dirname(__DIR__);
include(dirname(__DIR__).'/../../Service/person.php');
echo $_REQUEST['name'];
$person['name']=$_REQUEST['name'];
$person['email']=$_REQUEST['email'];
$person['phone']=$_REQUEST['phone'];
$person['dept']=$_REQUEST['dept'];
$person['id']=$_SESSION['user']['USER_ID'];
editUser($person);
$fetchedUser=getUsersByEmail($person['email']);
$_SESSION['user']=$fetchedUser[0];

/*$user['NAME']=$_REQUEST['name'];
$user['EMAIL']=$_REQUEST['email'];
$user['PHONE']=$_REQUEST['phone'];
$user['DEPARTMENT']=$_REQUEST['dept'];
$user['ID']=$_SESSION['user']['USER_ID'];
editUser($user);*/?>
<script type="text/javascript">
		window.location.href = '/project/main/app/controller/User/edit_profile.php';
		</script>