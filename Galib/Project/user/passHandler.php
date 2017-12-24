
<?php
include("session.php");
foreach ($_SESSION['userlist'] as $user){

	if($user['uname']==$_SESSION['currentUser']['uname']){
		
					$isValidPass=true;
//var_dump($_REQUEST['old']);
				//$old=$_REQUEST['old'];
				$new=$_REQUEST['new'];
				$rnew=$_REQUEST['rnew'];
				if($new==""||$rnew==""){
					
					echo "No field can be empty<br/>";
				}
			else{
				/*if($old==$new){
					echo "New Password can not be same as the Current Password <br/>";
					$isValidPass=false;
				}*/
				 if($new!=$rnew){
					echo "New Password must match with the Retyped Password  <br/>";
					$isValidPass=false;
				}

				else if(strlen($new)<4){
						echo "Password must not be less than four (4) characters <br/>";
						$isValidPass=false;
						}
					/*	$c=0;
					for($i=0;$i<strlen($new);$i++){		
					
						if($new[$i]=="@"||$new[$i]=="#"||$new[$i]=="$"||$new[$i]=="%"){
							
							$c++;
							//echo $pass[$i].$c."<br/>";
						}
					}
						 if($c==0){
							echo "Password must contain at least one of the special characters (@, #, $, %) <br/>";
							$isValidPass=false;
						} */
						else {
							$isValidPass=true;
							header('location:login.php');
						}
			}
				if($isValidPass=true){
					$user['pass']=$_REQUEST['new'];		
					$_SESSION['currentUser']=$user;
					//var_dump($_SESSION['currentUser']);
					
					break;
				}
		
		
	}
}
//header('location:dashboard.php');


?>
