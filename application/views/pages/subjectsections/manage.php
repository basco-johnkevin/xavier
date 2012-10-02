<div class="container" id="main-con">
	<div class="row">

		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li><a href="<?php echo  site_url()?>/subjectsections/add">Add Subject Sections</a></li>
	              <li class="active"><a href="<?php echo  site_url()?>/subjectsections">Manage Subject Sections</a></li>
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

			  <h2 class="alert-info">Manage Subject Sections</h2>
			  <thead>
			    <tr>
			      <th width="10%">ID</th>
			      <th width="50%">Subject</th>
			      <th width="20%">Schedule</th>
			      <th width="20%">Commands</th>
			    </tr>
			  </thead>
			  <tbody>
			   

				<?php foreach ($subjectSections as $subjectSection): ?>
					 <tr>
						<td><?php echo $subjectSection->subjectsectionid; ?></td>
						<td><?php echo $subjectSection->subject->subjectname; ?></td>
						<td><?php echo $subjectSection->schedule; ?></td>
						<td><a href="<?php echo site_url()?>/subjectsections/edit/<?php echo $subjectSection->subjectsectionid; ?>">EDIT</a>&nbsp;&nbsp;<a href="<?php echo  site_url()?>/subjectsections/delete/<?php echo $subjectSection->subjectsectionid; ?>">DELETE</a></td>
					 </tr>
				<?php endforeach; ?>

			   
			  </tbody>
			</table>
			


		</div>
	</div>
</div>