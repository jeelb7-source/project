<?php include 'connection.php'; ?>
 <div>
        <label>Select category</label>
		<select id="category" name="cid">
			<?php
				$result= mysqli_query($conn,"select * from category");
				
			?>
			<option hidden selected>Select Category</option>
			<?php while($row=mysqli_fetch_array($result)){
				?>
				
				<option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?></option>
				
			<?php
			}
			?>
			
	</select>
      </div>
      </div>
      <div>
					<label >Select Service</label><br>
						<select id="service12">
							
						</select>
					
      </div>
    </div>
	<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
	
	<script>
						$(document).ready(function(){
							$('#category').change(function(){
								var c_id = $(this).val();

								// Reset dropdown while loading
								$('#service12').html('<option hidden selected>Loading…</option>');

								if(c_id != ""){
									$.ajax({
										url: 'get_service.php',
										type: 'POST',
										data: { c_id: c_id },
										success: function(response){
											// Insert returned <option> tags
											$('#service12').html(response);
										}
									});
								} else {
									$('#service12').html('<option hidden selected value="">Select Service</option>');
								}
							});
						});

					</script>
			