<?php 
include(dirname(__DIR__).'/../../Service/person.php');
echo dirname(__DIR__);
$person['name']=$_REQUEST['name'];
$person['email']=$_REQUEST['email'];
//$person['dob']=$_REQUEST['date']+'/'+$_REQUEST['month']+'/'+$_REQUEST['year'];
$person['dept']=$_REQUEST['dept'];
$person['gender']=$_REQUEST['gender'];
$person['pass']=$_REQUEST['pass'];
$person['cpass']=$_REQUEST['cpass'];
$person['phone']=$_REQUEST['phone'];
$person['status']="Active";
echo addUser($person);

$phone = strlen($person['phone']);
$name = strlen($person['name']);

if($person['name']=="" || $person['email']=="" || $person['dept']==""|| /*$person['gender']==""||*/ $person['pass']=""|| $person['phone']=="" )
		{
			header('location:/project/main/index.php?m=1');
			//echo "No field can be empty<br/>";
		}
		
else
	{
	/*	if(empty($type))
	{
		
		echo "Select user type";
	}*/
	 if( empty($person['name'])==true  || $name <3 )
	{
			
		header('location:/project/main/index.php?errors3=3');
		//include("login.php");
		echo  "Enter valid name"."<br/>";
	}
	/*else  if( empty($person['cpass'])==true )

	{
		
		
		header('location:/project/main/index.php?errors2=3');
		echo  "Enter valid  password"."<br/>";
				

	}*/
	else 	if(empty($person['dept'])==true)
	{
		header('location:/project/main/index.php?errors4=3');
				echo  "Enter depertment"."<br/>";

	}
	/*else	if(empty($person['pass'])==true || $person['cpass']!=$person['cpass'])
	{
		header('location:/project/main/index.php?errors5=3');
				echo  "Enter valid password"."<br/>";

	}*/
	
	else if(!filter_var($person['email'],FILTER_VALIDATE_EMAIL)==true || empty($person['email'])==true)
	{
		header('location:/project/main/index.php?errors1=3');
		//include("login.php");
		echo "Invalid email address"."<br/>";

	}
	
	
	/* else if(($_REQUEST['dd']<=1&&$_REQUEST['dd']<=31)&&($_REQUEST['mm']<=1&&$_REQUEST['mm']<=12)&&($_REQUEST['yyyy']<=1900))
	{
		header('location:/project/main/index.php?errors6=3');

		echo "Invalid date"."<br/>";

	} */
	
	else if(empty($person['phone'])==true || $phone<11 || $phone>11 || $phone !=="016")
	{
		header('location:/project/main/index.php?errors6=3');

		echo"Enter phone number"."<br/>";

	}
	
	else if(empty($person['gender'])==true)
	{
		header('location:/project/main/index.php?errors7=3');

		echo"select gender"."<br/>";

	}
	
	
	
	
	else {
				
				header('location:/project/main/index.php?error0=0');
				echo "successful";
		}
		





		
	}




?>
<!--script type="text/javascript">
		window.location.href = '/project/main/index.php?m=1';
		</script-->