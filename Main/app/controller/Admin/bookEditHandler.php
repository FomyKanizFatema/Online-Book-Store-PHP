<?php 
session_start();
echo dirname(__DIR__);
include(dirname(__DIR__).'/../../Service/person.php');
echo $_REQUEST['name'];
$book['id']=$_REQUEST['k'];
$book['id']=$_REQUEST['name'];
$book['id']=$_REQUEST['email'];
$book['id']=$_REQUEST['phone'];
$book['id']=$_REQUEST['dept'];
editBook($book);
$fetchedUser=getBookById($book['id']);
$bookid=$fetchedUser[0]['BOOK_ID'];

?>

<script type="text/javascript">
		window.location.href = "/project/main/app/controller/Admin/updateB.php?n=<?php $echo $bookid;?>";
		</script>