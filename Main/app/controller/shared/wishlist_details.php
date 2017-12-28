<?php echo dirname(__DIR__);
	session_start();
	include(dirname(__DIR__).'/../../service/shop.php');
	<?php if(isset($_REQUEST['m'])){
					if($_REQUEST['m']==1){
				echo "Order Placed.Please wait for the confirmation call ! !";}
				}
				if($_REQUEST['m']==2){
				echo "One item is added to cart !";}
				}
				?>
	$fetchedItems=getAllwishedItems($_SESSION['user']['USER_ID']);
	include(dirname(__DIR__).'/../View/shared/wished_items_view.php');
	
?>