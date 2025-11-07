 <?php			
	include '../connection.php';
		if(isset($_GET['id']))
		{
			$catid=$_GET['id'];
			$sql="delete from category where cid='".$catid."'";
			mysqli_query($conn,$sql);
			header('location:category_tables.php');
		}
?>