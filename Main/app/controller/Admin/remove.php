<?php
session_start();
include(dirname(__DIR__).'/../../Service/person.php');
$id=$_REQUEST['m'];
$r=removeUser($id);
if($r){
	?>
	<script type="text/javascript">
		window.location.href = '/project/main/app/controller/Admin/userlist.php?m=1';
		</script>
	<?php
}
?>