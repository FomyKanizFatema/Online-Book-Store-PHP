<?php dirname(__DIR__); include(dirname(__DIR__).'/data/book_data_access.php');?>
<?php
//echo "hh";
    function addBook($book){
        return addBookToDb($book);
    }	
    
    function editBook($book){
        return editBookToDb($book);
    }
    
    function removeBook($bookId){
        return removeBookFromDb($bookId);
    }
    
    function getAllBooks(){
        return getAllBooksFromDb();
    }
	
	
	
    
    function getBookById($bookId){
        return getBookByIdFromDb($bookId);
    }
    
    function getBooksByName($bookName){
        return getBooksByNameFromDb($bookName);
    }
    
    function getBooksByAuthor($bookAuthor){
        return getBooksByAuthorFromDb($bookAuthor);
    }
	
	
    
    function getBooksByNameOrAuthor($key){
        return getBooksByNameOrAuthorFromDb($key);
    }
    
    
?>