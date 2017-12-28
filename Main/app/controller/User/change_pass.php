<?php 
session_start();
include(dirname(__DIR__).'/../view/User/change_pass_view.php');
include(dirname(__DIR__).'/../../Service/person.php');
$person= $_SESSION['user'];
$fetchedUser=getUsersByEmail($person['EMAIL']);
$_SESSION['user']=$fetchedUser[0];
$person= $_SESSION['user'];

if(isset($_REQUEST['oldpass'])){
				if($person['PASSWORD']==$_REQUEST['oldpass']){
					if($_REQUEST['newpass']==$_REQUEST['rnewpass']){	
						$person['PASSWORD']=$_REQUEST['newpass'];
						$r=changeUserPass($person);
						if($r){ echo "changed";
						$fetchedUser=getUsersByEmail($person['EMAIL']);
						$_SESSION['user']=$fetchedUser[0];
						$message="Changed";
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
}
?>