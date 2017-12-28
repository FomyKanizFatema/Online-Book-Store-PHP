<?php session_start();
include(dirname(__DIR__).'/../../service/shop.php');
$userid=$_SESSION['user']['USER_ID'];
$bookname=$_SESSION['book']['NAME'];
$bookprice=$_SESSION['book']['SELLING PRICE'];


addBookToCart($bookname,$bookprice,$userid);
?>

<script type="text/javascript">
		window.location.href = '/project/main/app/controller/user/wishlist.php?m=2';
		</script>