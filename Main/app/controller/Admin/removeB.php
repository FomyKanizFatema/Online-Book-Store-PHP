<?php
session_start();
include(dirname(__DIR__).'/../../Service/book.php');
$id=$_REQUEST['m'];
$r=removeBook($id);
if($r){
	?>
	<script type="text/javascript">
		window.location.href = '/project/main/app/controller/Admin/userlist.php?m=1';
	</script>
	<?php
}
?>