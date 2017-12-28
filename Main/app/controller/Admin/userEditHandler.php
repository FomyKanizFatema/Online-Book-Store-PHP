<?php 
session_start();
echo dirname(__DIR__);
include(dirname(__DIR__).'/../../Service/person.php');
echo $_REQUEST['name'];
$id=$_REQUEST['k'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$dept=$_REQUEST['dept'];
editUserByAdmin($name,$email,$phone,$dept,$id);
$fetchedUser=getUsersByEmail($email);
$_SESSION['user']=$fetchedUser[0];


/*$user['NAME']=$_REQUEST['name'];
$user['EMAIL']=$_REQUEST['email'];
$user['PHONE']=$_REQUEST['phone'];
$user['DEPARTMENT']=$_REQUEST['dept'];
$user['ID']=$_SESSION['user']['USER_ID'];
editUser($user);*/?>
<script type="text/javascript">
		window.location.href = '/project/main/app/controller/Admin/update.php?n=1';
		</script>