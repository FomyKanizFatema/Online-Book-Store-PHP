<?php include(dirname(__DIR__).'/data/data_access.php'); ?>
<?php
    function addBookToDb($book){
        $sql = "INSERT INTO book(NAME, AUTHOR, COURSE_ID, COPIES, BUYING PRICE, SELLING PRICE) VALUES('$book[name]', '$book[author]','$book[courseId]', '$book[copies]','$book[bp]', '$book[sp]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	
    function editBookToDb($book){
        $sql = "UPDATE book SET name='$book[name]', author='$book[author]', course_id='$book[courseId]', copies='$book[copies]',buying price='$book[bp]', selling price'$book[sp]' WHERE id=$book[id]";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removeBookFromDb($bookId){
        $sql = "DELETE FROM book WHERE id=$bookId";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllBooksFromDb(){
        $sql = "SELECT * FROM book";        
        $result = executeSQL($sql);
        
        $book = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
	
	
    
    function getBookByIdFromDb($bookId){
        $sql = "SELECT * FROM book WHERE id=$bookId";        
        $result = executeSQL($sql);
        
        $book = mysqli_fetch_assoc($result);
        
        return $book;
    }    

    function getBookByNameFromDb($bookName){
        $sql = "SELECT * FROM book WHERE name LIKE '%$bookName%'";
        $result = executeSQL($sql);
        
         $book = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
    
   
	
	function getBookByAuthorFromDb($author){
		
        $sql = "SELECT * FROM book WHERE author LIKE '%$bookauthor%'";
        $result = executeSQL($sql);
        
        $book = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
    
	
    function getBookByNameOrAuthorFromDb($key){
        $sql = "SELECT * FROM book WHERE name LIKE '%$key%' OR author LIKE '%$key%'";
        $result = executeSQL($sql);
        
         $book = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $book[$i] = $row;
        }
        
        return $book;
    }
    
?>