<?php dirname(__DIR__); include(dirname(__DIR__).'/data/shop_data_access.php');?>
<?php
//echo "hh";
    function addBookToWishlist($bookname,$bookprice,$userid){
		//echo $user['USER_ID'];
        return addBookToWishlistDb($bookname,$bookprice,$userid);
    }	
	
	function placeOrder($bookname,$bookprice,$userid,$userphone){
		$r=placeOrderToDb($bookname,$bookprice,$userid,$userphone);
		removeFromWishlist($bookname);
		//echo $user['USER_ID'];
        return $r;
    }	
	function removeFromWishlist($bookname){
		return removeFromWishlistDb($bookname);
	}
	function getAllCartItems($userid){
		return getAllCartItemsFromDb($userid);
	}
	function getAllwishedItems($userid){
		return getAllwishedItemsFromDb($userid);
	}
	
	 function addBookToCart($bookname,$bookprice,$userid){
		$r=addBookToCartDb($bookname,$bookprice,$userid);
    
		removeFromWishlist($bookname);
		//echo $user['USER_ID'];
        return $r;
        }	
    
    function editWishlist($book){
        return editBookToDb($book);
    }
    
    function removeBookFromWishlist($bookId){
        return removeBookFromDb($bookId);
    }
    
    function getFullWishlist(){
        return getAllBooksFromDb();
    }	
	
	
    
    function getWishlistByUser($bookId){
        return getBookByIdFromDb($bookId);
    }
    
    
    
    
?>