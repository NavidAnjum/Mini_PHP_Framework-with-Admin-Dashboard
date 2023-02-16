<?php

	require base_path('/views/partials/head.php') ?>
<?php require base_path('/views/partials/sidebar.php') ?>
<?php require base_path('/views/partials/nav.php')?>

<div class="row">

	<!-- Area Chart -->
	<div class="col-xl-12 col-lg-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div
				class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary"><?php $_SESSION["user_id"]?></div>
			<!-- Card Body -->
			<div class="card-body">

<!--				User Create Form Start-->
				<form class="container form-horizontal" action="/fabric_tracker/users/create"
					  method="post" name="user_info_form" id="user_info_form"
					  enctype="multipart/form-data" data-parsley-validate>
                    <p class="text-center" style="color: red"><?php
							echo isset($errors)? $errors :'';
							?></p>

					<div class="row form-group form-group-sm" id="form-group_for_user_name">
						<label class="control-label col-sm-3" for="user_name"
							   style="color:#00008B;">User Name:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control"
								   id="user_name" name="user_name" placeholder="Enter User Name"
								   required>
						</div>

					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_user_name"> -->

					<div class="row form-group form-group-sm" id="form-group_for_employee_name">
						<label class="control-label col-sm-3" for="employee_name" style="color:#00008B;">Employee Name:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="employee_name" name="employee_name" placeholder="Enter Employee Name" required>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_user_name"> -->

					<div class="row form-group form-group-sm" id="form-group_for_user_id">
						<label class="control-label col-sm-3" for="user_id" style="color:#00008B;">User ID:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter User ID" required>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_user_id"> -->

					<div class="row form-group form-group-sm" id="form-group_for_password">
						<label class="control-label col-sm-3" for="password" style="color:#00008B;">Password:</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_password"> -->

					<div class="row form-group form-group-sm" id="form-group_for_confirm_password">
						<label class="control-label col-sm-3" for="confirm_password" style="color:#00008B;">Confirm Password:</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password" required>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_confirm_password"> -->

					<div class="row form-group form-group-sm" id="form-group_for_user_type">
						<label class="control-label col-sm-3" for="user_type" style="margin-right:0px; color:#00008B;">User Type:</label>
						<div class="col-sm-5">
							<select  class="form-control for_auto_complete" id="user_type" name="user_type">
								<option select="selected" value="select">Select User Type</option>
								<option value="Super Admin">Super Admin</option>
								<option value="Admin">Admin</option>
								<option value="User">User</option>
								<option value="Sub_User">Sub User</option>
							</select>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_user_type"> -->

					<div class="row form-group form-group-sm" id="form-group_for_status">
						<label class="control-label col-sm-3" for="status" style="margin-right:0px; color:#00008B;">Status:</label>
						<div class="col-sm-5">
							<select  class="form-control for_auto_complete" id="status" name="status">
								<option select="selected" value="select">Select Status</option>
								<option value="Active">Active</option>
								<option value="Inactive">Inactive</option>
							</select>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_status"> -->

					<div class="row form-group form-group-sm" id="form-group_for_email">
						<label class="control-label col-sm-3" for="email" style="color:#00008B;">Email:</label>
						<div class="col-sm-5">

							<input type="text" class="form-control" id="email" name="email"
                                   placeholder="Enter Email">
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_email"> -->

					<div class="row form-group form-group-sm" id="form-group_for_contact_no">
						<label class="control-label col-sm-3" for="contact_no"
                               style="color:#00008B;">Contact No:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control"
                                   id="contact_no" name="contact_no"
                                   placeholder="Enter Contact No">
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_contact_no"> -->

					<!-- ******** Start <div class="form-group form-group-sm" id="form-group_for_department_info-->
					<div class="row form-group form-group-sm" id="form-group_for_department">
						<label class="control-label col-sm-3" for="department"
                               style="margin-right:0px; color:#00008B;">Department:</label>
						<div class="col-sm-5">
							<select  class="form-control for_auto_complete"
                                     id="department" name="department">
								<option select="selected" value="select">Select Department</option>
								<option select="selected" value="marketing">Marketing</option>

							</select>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_department"> -->

					<!-- ******** Start <div class="form-group form-group-sm" id="form-group_for_designation_info-->
					<div class="row form-group form-group-sm" id="form-group_for_designation">
						<label class="control-label col-sm-3" for="designation"
                               style="margin-right:0px; color:#00008B;">Designation:</label>
						<div class="col-sm-5">
							<select  class="form-control for_auto_complete" id="designation" name="designation">
								<option select="selected" value="select">Select Designation</option>
								<option select="select" value="fm">GM</option>
								<option select="select" value="manager">Manager</option>
								<option select="select" value="officer">Officer</option>

							</select>
						</div>
					</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_designation"> -->

					<div class="row form-group form-group-sm" id="form-group_for_profile_picture">
						<label class="control-label col-sm-3" style="margin-right:0px; color:#00008B;">Profile Picture:</label>
						<div class="col-sm-5">
							<input type="file" class="form-control"
                                   id="profile_picture" name="profile_picture" >
						</div>
					</div> <!-- end of <div class="form-group form-group-sm" id="form-group_for_profile_picture"> -->

					<div class="row for form-group form-group-sm">
						<div class="offset-4 col-sm-5">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-success">Reset</button>
						</div>
					</div>



				</form>

<!--				User Create Form End-->

			</div>
		</div>
	</div>


</div>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/footer-end.php') ?>
