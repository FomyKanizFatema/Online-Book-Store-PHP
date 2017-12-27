<?php include(realpath("../../../App/View/Shared/header_view.php"));?>

<html>
<body>
		<table border="0" width="70%" align="center">
			<tr valign="top">
				
				</td>
				<td>
					<table cellpadding="25px">
					<tr>
					<td>
						<h4>Item Details :</h4><br/>
					<img src="../../../App/View/Images/e.jpg" alt="Forest" width="200" height="250">
					</td>
				 <td >
					<br/><br/><br/><br/>
					<b >Book Name : <?php echo $item['name'];?></b><br/>
					<b  >by <font size="4px" color="green"> Demo</font></b><br/>
					<b >-----------------------------</b><br/>
					<b >Edition : Demo </b><br/>
					<b >Publisher: Demo<br/> </b>
					<b >Cagagory : Demo<br/> </b><br/>
					<form><button>Place Order</button></form>
					</td></tr></table>

				</td>
			</tr>
		</table>
	</body>
</html>