 <?php include 'connection.php'; ?>
 <?php	
	if(isset($_POST['c_id'])) 
	{
		$c_id=$_POST['c_id'];
		$result=mysqli_query($conn,"select * from service where c_id=$c_id");
		echo "<option value='' hidden selected>Select Service</option>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<option value=".$row['s_id'].">".$row['s_name']."</option>";
		} 
		
	}
	?>