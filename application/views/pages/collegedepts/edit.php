<div class="container" id="main-con">
	<div class="row">

		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li ><a href="<?php echo  site_url()?>/collegedepts/add">Add College Departments</a></li>
	              <li class="active"><a href="<?php echo  site_url()?>/collegedepts/">Manage College Departments</a></li>
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->


		<div class="span9">
				
			<form method="post" action="<?php echo site_url("collegedepts/edit") . '/' . $collegeDept->collegedeptid; ?>">
		  <h2 class="alert-info">Edit College Department</h2>
	 	<label>New College Department Name</label>
	 	<input type="hidden" name="id" value="<?php echo $collegeDept->collegedeptid ?>">
	  	<input type="text" name="name" value="<?php echo $collegeDept->collegedeptname ?>">
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

