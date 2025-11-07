<!DOCTYPE html>
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
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
					  <label for="exampleInputName">Category</label><br>
						 <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Category Description</label>
						
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="description" name="desc" >
                      </div>
                     <button type="submit" class="btn btn-primary" name="btnAdd" OnClick="return validate();">Submit</button>
					
                     
              </div>
            </div>
          </div>
		</form>
		  <?php
		  $conn=mysqli_connect('127.0.0.1','root','','project');
			$caid="";
			$caname="";
			
				
				if(isset($_GET['id']))
				{
					$catid=$_GET['id'];
					$sql="select* from category where cid='".$catid."'";
					$data=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($data);
					$caid=$row['cid'];
					$caname=$row['cname'];
				}
				if(isset($_POST['btnAdd']))
				{
					if(!empty($_GET['id']))
					{
						$sql="update category set cname='".$_POST['name']."',cdesc='".$_POST['desc']."' where cid='".$catid."'";
						mysqli_query($conn,$sql);
						header('location:category_tables.php');
					}
					else
					{
						$str="insert into category values(NULL,'".$_POST['name']."','".$_POST['desc']."')";
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="../../assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>