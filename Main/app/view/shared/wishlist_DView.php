<table border="0" width="70%" align="center">
			<tr valign="top">
				
				</td>
				<td>
				
					<table cellpadding="25px">
					<tr>
					<td>
					  <?php if(isset($_REQUEST['m'])){
					if($_REQUEST['m']==1){
				echo "Order Placed.Please wait for the confirmation call ! !";}
				}
				if($_REQUEST['m']==2){
				echo "One item is added to cart !";}
			
				?><br/>
						<h4>Item Details :</h4><br/>
					<img src="e.jpg" alt="Forest" width="200" height="250">
					</td>
				 <td >
					<br/><br/><br/><br/>
					<b >Book Name : <?php echo $item['NAME'];?></b><br/>
					<b  >by <font size="4px" color="green"> <?php echo $item['AUTHOR'];?></font></b><br/>
					<b >-----------------------------</b><br/>
					<b >Price : <?php echo $item['SELLING PRICE'];?> </b><br/>
					<form action="cart2.php"><button id="cart" >Add To Cart</button></form>
					<form action="placeOrder.php"><button id="order" onclick="placeOrder()">Direct Place Order</button></form>
					</td></tr></table>

				</td>
			</tr>
		</table>
		<script>
					function placeOrder(){
						window.location.href = '/project/main/app/controller/Shared/placeOrder.php';
					}
					
					function addToUsersCart(){
						window.location.href = '/project/main/app/controller/Shared/cart.php';
					}
				</script>