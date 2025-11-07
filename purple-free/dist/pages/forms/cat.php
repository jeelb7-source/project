<?php
	$conn=mysqli_connect('localhost','root','','project');
	
if(isset($_POST['c_id'])) 
{
	$c_id=$_POST['c_id'];
	$result=mysqli_query($conn,"select * from service where c_id=$c_id");
	
	echo "<option value=''>Select service</option>";
	
	while($row=mysqli_fetch_assoc($result))
	 {
		echo "<option value=".$row['s_id'].">".$row['s_name']."</option>";
	} 
	//exit;
}
?>