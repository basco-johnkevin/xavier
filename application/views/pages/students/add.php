<div class="container" id="main-con">
	<div class="row">

		
		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li class="active"><a href="<?php echo  site_url()?>/students/add">Add Student</a></li>
	              <li ><a href="<?php echo  site_url()?>/students">Manage Student</a></li>
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->


		<div class="span9">
				

			<form method="post" action="<?php echo site_url("students/add"); ?>">
			<h2 class="alert-info">Add Student</h2>
		 	
		 	<label>Name</label>
		  	<input type="text" name="name">

		  	<br>

			<label>Student Number</label>
		  	<input type="text" name="studentNumber">

		  	<br>

		  	<button type="submit" class="btn">Submit</button>

		  	<!-- notices, success and error msgs -->
		  	<?php if (isset($notices)): ?>
		  		<?php foreach ($notices as $notice): ?>
		  			<?php echo @$notice; ?>
		  		<?php endforeach; ?>
		  	<?php endif; ?>

		  	<?php echo $this->session->flashdata('success'); ?>

		  	<?php echo validation_errors(); ?>
		  	<!-- notices, success and error msgs ENDS -->
		  	
		</form>
			


		</div>
	</div>
</div>