Problem 1</br></br>
<form>
		Length <input name="length"/><br/>
		Width <input name="width"/>
		<input type="submit"/>
</form>

<?php
	
	
	$l=$_REQUEST['length'];
	$w=$_REQUEST['width'];
	$r=$l*$w;
	$p=2*($l+$w);
	/*echo "Length = ".$l."</br>";
	echo "Width = ".$w."</br>";*/
	echo "Area = ".$r."</br>";
	echo "Parameter = ".$p;
	
?>


</br></br>Problem 2</br></br>
<form>
		Amount <input name="amount"/><br/>
		<input type="submit"/>
</form>
<?php
	
	$a=$_REQUEST['amount'];
	$v=($a*15)/100;
	echo "Vat = ".$v."</br>";
?>


</br></br>Problem 3</br></br>
<form>
		Number <input name="number"/><br/>
		<input type="submit"/>
</form>
<?php
	
	$a=$_REQUEST['number'];
	if($a%2==0)
		echo "Even Number";
	else
		echo "Odd Number";
	
?>


</br></br>Problem 4</br></br>
<form>
		Number 1 <input name="n1"/><br/>
		Number 2 <input name="n2"/><br/>
		Number 3 <input name="n3"/>
		<input type="submit"/>
</form>

<?php
	
	$a=$_REQUEST['n1'];
	$b=$_REQUEST['n2'];
	$c=$_REQUEST['n3'];
	if($a>$b)
		if($a>$c)
			echo $a."\n is grater";
		else
			echo $c."\n is grater";
	else
		if($b>$c)
			echo $b."\n is grater";
		else
			echo $c."\n is grater";
		
?>


</br></br>Problem 5</br></br>
<form>
		From <input name="f"/><br/>
		To <input name="t"/>
		<input type="submit"/>
</form>

<?php
	$f=$_REQUEST['f'];
	$t=$_REQUEST['t'];
	for($i=$f; $i<$t+1; $i++)
	{
		if($i%2==0)
			echo $i;
		else 
			echo "\n";
	}
	
?>


</br></br>Problem 6</br></br>
<form>
		Searchable Element <input name="SE"/><br/>
		
		<input type="submit"/>
</form>

<?php
	$a = array(10,20,30);
	$sv = $_REQUEST['SE'];
	for($i=0; $i<count($a); $i++)
	{
		if($a[$i]==$sv)
			echo "Element found : ".$sv;
		/*else
			echo "Element not found";*/
	}
	
?>