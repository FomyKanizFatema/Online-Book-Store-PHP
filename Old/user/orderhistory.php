<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<html>

  <head>
		<title>AIUB Online Book Store</title>
	  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
 
	  
   </head>

   <body>
   
   	<?php include("header.php");?>
		
      <table width = "100%" height="">
  
 <tr>

<td>

<legend><h4>Order History :</h4><legend><br/>
  <img src="e.jpg" alt="Forest" width="200" height="250">
  <td left>
  <b ><!--align="center" style="<!--position: absolute;top:200px;left:400px; " --> Book Name : <?php echo "Demo" ?></b><br/>
  <b  ><!--align="center" style="<!--position: absolute;top:220px;left:400px; "--> by <font size="4px" color="green"> <?php echo "Demo" ?></font></b><br/>
  <b ><!--style="<!--position: absolute;top:240px;left:400px; "-->-----------------------------</b><br/>
   <b ><!--style="<!--position: absolute;top:260px;left:400px; "-->Edition : <?php echo "Demo" ?> </b><br/>

      <b ><!--style="<!--position: absolute;top:280px;left:400px; "-->Publisher: <?php echo "Demo"."<br/>"  ?> </b>
	   <b ><!--style="<!--position: absolute;top:300px;left:400px; "-->Cagagory : <?php echo "Demo"."<br/>" ?> </b><br/>
			   <b ><!--style="position: absolute;top:330px;left:400px; "--> <a  href="usercard12.php"> Add to card  </a> </b><br/><br/>

		<b ><!--style="position: absolute;top:370px;left:400px; "-->Related Cetagory : <?php echo "Demo"."<br/>" ?> </b><br/><br/>

</td>
</td>

 </tr>
 </table>
</html>