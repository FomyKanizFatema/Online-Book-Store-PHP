<?php
    $host="localhost";
    $user="root";
	//$user="";//
    $pass="";
    $dbname="BookStore_DB";
    $port=3306;
   
    function executeSQL($sql){
        global $host, $user, $pass, $dbname, $port;
        
        $link=mysqli_connect($host, $user, $pass, $dbname);
        
		
		if($link){
			//echo "connected";
			$result = mysqli_query($link, $sql);
		}
		else
			echo "NOT Connected";
        mysqli_close($link);
        
        return $result;
    }
	
	function executeSQLs($sql){
        global $host, $user, $pass, $dbname, $port;
        
        $link=mysqli_connect($host, $user, $pass, $dbname);
        
		
		if($link){
			//echo "connected";
			$result = mysqli_query($link, $sql);
		}
		else
			echo "NOT Connected";
        mysqli_close($link);
        
        return $result;
    }
?>