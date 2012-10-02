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
				

			<table class="table">

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

			  <h2 class="alert-info">Manage Students</h2>
			  <thead>
			    <tr>
			      <th width="10%">ID</th>
			      <th width="50%">Name</th>
			      <th width="20%">Student Number</th>
			       <th width="20%">Commands</th>
			    </tr>
			  </thead>
			  <tbody>
			   

				<?php foreach ($students as $student): ?>
					 <tr>
						<td><?php echo $student->studentid; ?></td>
						<td><?php echo $student->name; ?></td>
						<td><?php echo $student->student_number; ?></td>
						<td><a href="<?php echo site_url()?>/students/edit/<?php echo $student->studentid; ?>">EDIT</a>&nbsp;&nbsp;<a href="<?php echo  site_url()?>/students/delete/<?php echo $student->studentid; ?>">DELETE</a></td>
					 </tr>
				<?php endforeach; ?>

			   
			  </tbody>
			</table>
			


		</div>
	</div>
</div>