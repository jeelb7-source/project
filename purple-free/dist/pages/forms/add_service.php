
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SOEZI Nail Hub</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
	
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    
	  <?php
		include '../header.php';
	  ?>
	  <?php
		include '../sidebar.php';
	  ?>
	  <?php
		include '../connection.php';
	  ?>
      <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
			<div class="col-12 grid-margin stretch-card">
               <div class="card">
                <div class="card-body">
			<form  class="form-sample" method="POST">
				 <div class="row">
				 <div class="form-group">
					
						<label>Select category</label>
						<select id="category" name="cid">
						<?php
							$result= mysqli_query($conn,"select*from category");
							while($row=mysqli_fetch_assoc($result)){
								?>
								<option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?></option>
							<?php
							}
							?>
							
					</select>
					</div>
					</div>
					 <div class="form-group">
					  <label for="exampleInputName">Enter Service</label><br>
						 <input type="text" class="form-control" id="exampleInputName" placeholder="Service" name="name" >
                      </div>
					<div class="row">
                      <div class="form-group">
                        <label for="exampleInputEmail3">Service Price</label>
						
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Price" name="price">
                      </div>
					</div> 
			 <button type="submit" class="btn btn-primary" name="btnAdd" OnClick="return validate();">Submit</button>
			</div>	
			</div>
			</form>
			</div>
			</div>
			</div>
			</div>
			<?php
			$sid="";
			$sname="";
			
				
				if(isset($_GET['id']))
				{
					$catid=$_GET['id'];
					$sql="select* from service where sid='".$s_id."'";
					$data=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($data);
					$sid=$row['s_id'];
					$sname=$row['s_name'];
				}
				if(isset($_POST['btnAdd']))
				{
					if(!empty($_GET['id']))
					{
						$sql="update service set s_name='".$_POST['name']."',s_price='".$_POST['price']."' where s_id='".$id."'";
						mysqli_query($conn,$sql);
						header('location:service_tables.php');
					}
					else
					{
						$str="insert into service values(NULL,'".$_POST['name']."','".$_POST['price']."','".$_POST['cid']."')";
						$results=mysqli_query($conn,$str);
						echo"<h1>Record added</h1>";
					}
				}
			?>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
			include '../footer.php';
		  ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>