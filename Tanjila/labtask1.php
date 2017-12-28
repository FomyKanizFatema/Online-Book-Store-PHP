<?php

    echo"serial 1";
	echo"<br>";
	$l=6;
	$w=5;
	
	$area=$l*$w;
	$perimeter=2*($l+$w);
    echo "area of rectangle".$area;
	echo"<br>";
	echo"perimeter of rectangle".$perimeter;
	echo"<br><br><br><br>";
	echo"serial 2";
	echo"<br>";
	
	$value=60;
	$vat=($value*20)/100;
	echo"vat is ".$vat;
	echo"<br><br><br><br>";
	
	echo "serial 3";
	echo"<br>";
	
	$num=6;
	if($num%2==0)echo "even";
	else echo "odd";
	echo"<br><br>";
	
	 echo"serial 4";
	 echo"<br>";
	$a=1;
	$b=2;
	$c=3;
	if($a>$b&&$a>$c)echo $a."is bigger";
	else if ($b>$a&&$b>$c)echo $b."is bigger";
	else echo $c."is bigger";
	
	echo"<br><br>";
	echo "serial 5";
	echo"<br>";
	for($i=10;$i<=100;$i++){
		if($i%2==1)echo $i."  ";
	}
	echo"<br><br>";
	
	 echo"serial 6";
	 echo"<br>";
	 $num=5;
	 $k=0;
	 $arr=array(1,2,3,4);
	 for($i=0;$i<4;$i++){
	 if($arr[$i]==$num){
		 echo"found";
		 $k++;
		 break;
		 
	 }
	 }
	 if($k==0)
		 echo"not found";
	 
		 
	
	
	
	
	
	
?>

	