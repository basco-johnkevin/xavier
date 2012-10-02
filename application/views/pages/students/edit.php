<div class="container" id="main-con">
	<div class="row">

		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li ><a href="<?php echo  site_url()?>/students/add">Add Student</a></li>
	              <li class="active"><a href="<?php echo  site_url()?>/students">Manage Student</a></li>
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->


		<div class="span9">
				
			<form method="post" action="<?php echo site_url("students/edit") . '/' . $student->studentid; ?>">
		  <h2 class="alert-info">Edit Student</h2>
	 	<label>New Student Name</label>
	 	<input type="hidden" name="id" value="<?php echo $student->studentid; ?>">
	 	<input type="hidden" name="primary_key" value="<?php echo $student->studentid; ?>">
	  	<input type="text" name="name" value="<?php echo $student->name; ?>">
	  	<br>
	  	<label>New Student Number</label>
	  	<input type="text" name="studentNumber" value="<?php echo $student->student_number; ?>">
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

