<?php include(dirname(__DIR__).'/data/data_access.php'); ?>
<?php
    function addBookToWishlistDb($bookname,$bookprice,$userid){
		//echo $user['USER_ID'].$book['NAME'];
       $sql = "INSERT INTO wishlist(name,price,user_Id) VALUES('$bookname','$bookprice','$userid')";
        $result = executeSQLs($sql);
        return $result;
    }
	
	function addBookToCartDb($bookname,$bookprice,$userid){
		//echo $user['USER_ID'].$book['NAME'];
       $sql = "INSERT INTO cart(name,price,user_Id) VALUES('$bookname','$bookprice','$userid')";
        $result = executeSQLs($sql);
        return $result;
    }
	
	
    function editBookToDb($book){
        $sql = "UPDATE book SET name='$book[name]', author='$book[author]', course_id='$book[courseId]', copies='$book[copies]',buying price='$book[bp]', selling price'$book[sp]' WHERE id=$book[id]";
        $result = executeSQLs($sql);
        return $result;
    }
    
    function removeBookFromDb($bookId){
        $sql = "DELETE FROM book WHERE id=$bookId";        
        $result = executeSQLs($sql);
        return $result;
    }
    
    function getAllBooksFromDb(){
        $sql = "SELECT * FROM book";        
        $result = executeSQLs($sql);
        
        $book = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
	
	function getAllCartItemsFromDb($userid){
        $sql = "SELECT * FROM cart,book where user_id='$userid' ";        
        $result = executeSQLs($sql);
        
        $book = array();
		$item = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
			$b=$book[$i]['name'];
			 $sql = "SELECT * FROM book where NAME='$b' ";        
             $result = executeSQLs($sql);
			 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
             $item[$i] = $row;
			
         }
        }
        
        return $item;
    }
	
	
	
	function getAllwishedItemsFromDb($userid){
        $sql = "SELECT * FROM wishlist where user_id='$userid' ";        
        $result = executeSQLs($sql);
        
        $book = array();
		$item = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
			$b=$book[$i]['name'];
			 $sql = "SELECT * FROM book where NAME='$b' ";        
             $result = executeSQLs($sql);
			 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
             $item[$i] = $row;
			
         }
        }
        
        return $item;
    }
	
	
	
    
    function getBookByIdFromDb($bookId){
        $sql = "SELECT * FROM book WHERE id=$bookId";        
        $result = executeSQLs($sql);
        
        $book = mysqli_fetch_assoc($result);
        
        return $book;
    }    

    function getBookByNameFromDb($bookName){
        $sql = "SELECT * FROM book WHERE name LIKE '%$bookName%'";
        $result = executeSQLs($sql);
        
         $book = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
    
   
	
	function getBookByAuthorFromDb($author){
		
        $sql = "SELECT * FROM book WHERE author LIKE '%$bookauthor%'";
        $result = executeSQLs($sql);
        
        $book = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
    
	
    function getBookByNameOrAuthorFromDb($key){
        $sql = "SELECT * FROM book WHERE name LIKE '%$key%' OR author LIKE '%$key%'";
        $result = executeSQLs($sql);
        
         $book = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
    
?>