<?php 
echo "hi"
	
	include(dirname(__DIR__).'/../../service/book.php');
	$fetchedBooks=getAllBooks();
	foreach ($fetchedBooks as $book){
		include(dirname(__DIR__).'/../View/shared/books_view.php');
	}
?>