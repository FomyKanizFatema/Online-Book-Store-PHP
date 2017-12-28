				
				
				<!--<table align="center" border='1'>
						<tr>
							<td><a href="item.php"><img src="c.png" height="50%" /></a></td>
						</tr>
						<tr> 
							<td align="center">Price : <?php echo $book['SELLING PRICE'];?> <br/><a href="../../../App/Controller/Shared/wishlist.php" id="wishlist"><img src="wishlist.png"width="25px" height="25px"/></a> | <a href="../../../App/Controller/Shared/cart.php" id="cart"><img src="cart.png" width="25px" height="25px"/></a></td>
						</tr>
				</table>-->
				
				<!--<table align="center" border='1'>
						<tr >
							<td colspan="2" align="center"><a href="item.php"><img src="c.png" height="50%" /></a></td>
						</tr>
						<tr  > 
							<td align="center" colspan="2">Price : <?php echo $book['SELLING PRICE'];?> </td> 
						</tr>
						<tr valign="top" align="center">
							<td align="center">
							<form action="../../../App/Controller/Shared/wishlist.php"> <button id="wish" width="25px" height="25px"><img src="wishlist.png" width="25px" height="25px"/></button> </form> 
							</td>
							<td align="center">
								<form action="../../../App/Controller/Shared/cart.php"> <button id="wish" width="25px" height="25px"><img src="cart.png" width="25px" height="25px"/></button> </form> 
							</td>
						</tr>
				</table>-->
				<?php// session_start(); 
				$_SESSION['book']=$book;?>
				
				<table align="center" border='1'>
						<tr >
							<td colspan="2" align="center"><a href="app/controller/shared/item.php"><?php echo $book['NAME'];?></a></td>
						</tr>
						<tr  > 
							<td align="center" colspan="2">Price : <?php echo $book['SELLING PRICE'];?> </td> 
						</tr>
						<tr valign="top" align="center">
							<td align="center">
							<button onclick="addToUsersWishlist()" id="wish" width="25px" height="25px"><img src="wishlist.png" width="25px" height="25px"/></button>
							</td>
							<td align="center">
							<button id="cart" onclick="addToUsersCart()" width="25px" height="25px"><img src="cart.png" width="25px" height="25px"/></button> 
							</td>
						</tr>
				</table>
				<script>
					function addToUsersWishlist(){
						window.location.href = '/project/main/app/controller/Shared/wishlist.php';
					}
					
					function addToUsersCart(){
						window.location.href = '/project/main/app/controller/Shared/cart.php';
					}
				</script>

				
				 
				