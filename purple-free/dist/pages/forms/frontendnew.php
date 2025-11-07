<?php
$conn = mysqli_connect("localhost", "root", "", "project");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SOEZI Nail Hub</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>
<body>

<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Form elements</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
      </nav>
    </div>

    <!-- Manage Form -->
    <div id="manage-form" class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="form-sample" method="POST" onsubmit="return validate();">
            <div class="row">
              <!-- Category Dropdown -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Select Category</label>
                  <div class="dropdown">
                    <button class="btn btn-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Select Category
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="categoryDropdown">
                      <?php
                      $result = mysqli_query($conn, "SELECT * FROM category");
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<a class='dropdown-item' href='#' data-value='{$row['cid']}'>{$row['cname']}</a>";
                      }
                      ?>
                    </div>
                  </div>
                  <input type="hidden" name="category_id" id="selectedCategory">
                </div>
              </div>

              <!-- Service Dropdown (normal select) -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Select Service</label>
                  <select id="service" class="form-control" required>
                    <option selected disabled>Select Service</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Price -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail3">Service Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Price" name="price" required>
                </div>
              </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary" name="btnAdd">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- content-wrapper ends -->

  <?php include '../footer.php'; ?>
</div>
<!-- main-panel ends -->

<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {
  // When category is selected
  $('#categoryDropdown .dropdown-item').click(function (e) {
    e.preventDefault();
    
    let selectedText = $(this).text();
    let selectedValue = $(this).data('value');

    // Update dropdown button text
    $('#dropdownMenuButton').text(selectedText);

    // Update hidden input value
    $('#selectedCategory').val(selectedValue);

    // Make AJAX call to get services
    $.ajax({
      url: 'cat.php',
      type: 'POST',
      data: { c_id: selectedValue },
      success: function (response) {
        $('#service').html(response);
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error: ", status, error);
      }
    });
  });
});

// Simple validation
function validate() {
  let price = document.getElementById('exampleInputEmail3').value;
  let category = document.getElementById('selectedCategory').value;
  if (!category) {
    alert("Please select a category.");
    return false;
  }
  if (price === '' || isNaN(price)) {
    alert("Please enter a valid numeric price.");
    return false;
  }
  return true;
}
</script>

</body>
</html>
