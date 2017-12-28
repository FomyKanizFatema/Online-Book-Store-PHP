<?php session_start();
include(dirname(__DIR__).'/../../service/shop.php');
$userid=$_SESSION['user']['USER_ID'];
$userphone=$_SESSION['user']['PHONE'];
$bookname=$_SESSION['book']['NAME'];
$bookprice=$_SESSION['book']['SELLING PRICE'];


placeOrder($bookname,$bookprice,$userid,$userphone);

?>
<script type="text/javascript">
		window.location.href = '/project/main/app/controller/user/wishlist.php?m=1';
		</script>
