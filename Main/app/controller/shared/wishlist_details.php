<?php echo dirname(__DIR__);
	session_start();
	include(dirname(__DIR__).'/../../service/shop.php');
	
	$fetchedItems=getAllwishedItems($_SESSION['user']['USER_ID']);
	include(dirname(__DIR__).'/../View/shared/wished_items_view.php');
	
?>