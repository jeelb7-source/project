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
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">

              <!-- Logo -->
              <div class="brand-logo text-center mb-3">
                <img src="SOEZI_files/logo1.png" alt="logo">
              </div>

              <!-- Heading -->
              <h4 class="text-center">New here?</h4>
              <h6 class="font-weight-light text-center mb-4">
                Signing up is easy. It only takes a few steps
              </h6>

              <!-- Signup Form -->
              <form class="pt-3" method="POST" action="">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" 
                         placeholder="Username" name="name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" 
                         placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" 
                         placeholder="Password" name="password" required>
                </div>

                <!-- Terms -->
                <div class="form-check mb-4">
                  <input type="checkbox" class="form-check-input" required>
                  <label class="form-check-label text-muted">
                    I agree to all Terms & Conditions
                  </label>
                </div>

                <!-- Submit Button -->
                <div class="mt-3 d-grid gap-2">
                  <button type="submit" class="btn btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="btnSignUp">
                    SIGN UP
                  </button>
                </div>

                <!-- Login link -->
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? 
                  <a href="index.php" class="text-primary">Login</a>
                </div>
              </form>
			  <?php
						error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
						$conn=mysqli_connect('127.0.0.1','root','','project');
						$str="insert into admin values(NULL,'".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')";
						mysqli_query($conn,$str);

						if (isset($_POST['btnSignUp']))
						{
							header("location:index.php");
						}
			?>
              <!-- End Signup Form -->

              <!-- PHP Insert -->
              
            
              <!-- End PHP -->

            </div> <!-- auth-form-light -->
          </div> <!-- col -->
        </div> <!-- row -->
      </div> <!-- content-wrapper -->
    </div> <!-- page-body-wrapper -->
  </div> <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <script src="../../assets/js/jquery.cookie.js"></script>
</body>
</html>
