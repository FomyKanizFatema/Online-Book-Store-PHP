
<?php 

	
	include(dirname(__DIR__).'/../../service/book.php');
	$dept;
	$fetchedDept=getAllDept();
	
	foreach($fetchedDept as $dept){		
		$fetchedCourse=getCourseByDept($dept['name']);
		?>
		           <td>
						<form><!--need make hover dropdoen later-->
							<b> <font color="ffffff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<?php  echo $dept['name']?> </font></b><br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select name="dept">
							<option value="">Select Course</option>
							<?php foreach($fetchedCourse as $c){?>
	<option value="<?php echo $c['name'];?>"> <?php echo $c['name']; ?> </option>												
								<?php } ?>
								
							</select>
						</form>
						</td>
	<?php  } ?>
	
	