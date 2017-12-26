<?php include(realpath("../../../app/view/user/user_header_view.php"));?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("sidebar_view.php");?>
				</td>
				<td>
					<table cellpadding="25px" width="100%"><tr><td>
						 <form action="" method="">
							<fieldset>
								<legend><h3><b>Send Feedback</b></h3></legend>
								<input type="text" name="feedback" id="feedback" size="50"/><br/><br/>
								<input type="submit" value="Submit"/>
							</fieldset>
						 </form>
						</td></tr></table>

				</td>
			</tr>
		</table>
	</body>
	
	
	<script type="text/javascript">
			
			
			document.getElementById('feedback').style.height="200px";
			document.getElementById('feedback').style.width="500px";
			
			
	</script>
</html>