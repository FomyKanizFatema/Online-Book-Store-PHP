<?php session_start();
include(dirname(__DIR__).'/../../service/shop.php');
$userid=$_SESSION['user']['USER_ID'];
$bookname=$_SESSION['book']['NAME'];
$bookprice=$_SESSION['book']['SELLING PRICE'];


addBookToWishlist($bookname,$bookprice,$userid);
?>
<script>					
	window.location.href = '/project/main/app/controller/User/home.php';
</script>

