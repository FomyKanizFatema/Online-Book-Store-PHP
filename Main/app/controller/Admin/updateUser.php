<?php
session_start();
echo dirname(__DIR__);
//echo $_SESSION['user']['NAME'];
include(dirname(__DIR__).'/Admin/view/updateUser.php');

?>