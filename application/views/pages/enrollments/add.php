<div class="container" id="main-con">
	<div class="row">

		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li class="active"><a href="<?php echo  site_url()?>/enrollments/add">Add Enrollment Records</a></li>
	              <li ><a href="<?php echo  site_url()?>/enrollments/">Manage Enrollment Records</a></li>
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->


		<div class="span9">
				

			<form method="post" action="<?php echo site_url("enrollments/add"); ?>">
		  <h2 class="alert-info">Add Enrollment Record</h2>
	 	<label>Student</label>
	  	
	 	<?php echo form_dropdown('studentId', $studentIdsArray); ?>

	  	<br>

	  	<label>Subject Section Id</label>

	  	<?php echo form_dropdown('subjectSectionId', $subjectSectionIdsArray); ?>

	  	<br>

	  	<button type="submit" class="btn">Submit</button>

	  	<?php if (isset($notices)): ?>
	  		<?php foreach ($notices as $notice): ?>
	  			<?php echo @$notice; ?>
	  		<?php endforeach; ?>
	  	<?php endif; ?>

	  	<?php echo validation_errors(); ?>
	  	
	</form>


		</div>
	</div>
</div>

