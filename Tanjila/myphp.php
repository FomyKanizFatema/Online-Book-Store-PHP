<?php
    $file1=fopen("in.txt","r");
	$file2=fopen("out.txt","w");
	while(!(feof($file1))){
		
	
	$content=fgets($file1);
	$ar=explode(",",$content);
	var_dump($ar);
	$sum= $ar[1]+$ar[2]+$ar[3];
	var_dump($sum);
	fwrite($file2,$sum." ");
	echo"<br>";}
?>	
	
	