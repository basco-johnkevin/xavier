<div class="container" id="main-con">
	<div class="row">

		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li class="active"><a href="<?php echo  site_url()?>/subjectsections/add">Add Subject Sections</a></li>
	              <li ><a href="<?php echo  site_url()?>/subjectsections">Manage Subject Sections</a></li>
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->


		<div class="span9">
				

			<form method="post" action="<?php echo site_url("subjectSections/add"); ?>">
			 <h2 class="alert-info">Add Subject Sections</h2>
		 	
			<label>Subject</label>
		  	<?php echo form_dropdown('subjectId', $subjectsArray); ?>

		  	<br>

		  	<label>Schedule</label>
		  	<input type="text" name="schedule">

		  	<br>

		  	<button type="submit" class="btn">Submit</button>

		  	<!-- notices, success and error msgs -->
		  	<?php if (isset($notices)): ?>
		  		<?php foreach ($notices as $notice): ?>
		  			<?php echo @$notice; ?>
		  		<?php endforeach; ?>
		  	<?php endif; ?>

		  	<?php echo $this->session->flashdata('success'); ?>

		  	<?php echo $this->session->flashdata('error'); ?>

		  	<?php echo validation_errors(); ?>
		  	<!-- notices, success and error msgs ENDS -->
		  	
		</form>
			


		</div>
	</div>
</div>




