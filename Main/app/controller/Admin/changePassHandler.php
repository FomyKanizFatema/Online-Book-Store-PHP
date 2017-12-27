<?php
session_start();
include(dirname(__DIR__).'/../../Service/person.php');
$person= $_SESSION['user'];
$fetchedUser=getEmployeeByEmail($person['email']);
$_SESSION['user']=$fetchedUser[0];
$person= $_SESSION['user'];
echo $person['password'];


if($person['password']==$_REQUEST['oldpass']){
	if($_REQUEST['newpass']==$_REQUEST['rnewpass']){	
		$person['password']=$_REQUEST['newpass'];
		$r=changeEmployeePass($person['password'],$person['id']);
		if($r){ echo "changed";
		$fetchedUser=getEmployeeByEmail($person['email']);
		$_SESSION['user']=$fetchedUser[0];
		$message="Changed";
		?>
				
				
				<script type="text/javascript">
				window.location.href = '/project/main/app/controller/Admin/changePass.php?m=1';
				</script>
				<?php
		
		}
	}
	else{
		?>
		<script>
		document.write("New Password & Confirmed Password didn't match");
		</script>
		<?php 

	}
}

else{
		?>
		<script>
		document.write("Wrong Old Password");
		</script>
		<?php 

	}
?>