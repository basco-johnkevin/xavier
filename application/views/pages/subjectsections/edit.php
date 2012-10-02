<div class="container" id="main-con">
	<div class="row">

		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li ><a href="<?php echo  site_url()?>/subjects/add">Add Subjects</a></li>
	              <li class="active"><a href="<?php echo  site_url()?>/subjects/">Manage Subjects</a></li>
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->


		<div class="span9">
				
			<form method="post" action="<?php echo site_url("subjectsections/edit") . '/' . $subjectSection->subjectsectionid; ?>">
		  <h2 class="alert-info">Edit Subject Section</h2>
	 	<label>New Subject</label>
	 	<input type="hidden" name="id" value="<?php echo $subjectSection->subjectsectionid ?>">
	  	
	  	<?php echo form_dropdown('subjectId', $subjectsArray); ?>

	  	<label>New Schedule</label>
	  	<input type="text" name="schedule" value="<?php echo $subjectSection->schedule ?>">
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

