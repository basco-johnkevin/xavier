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

			  

			  	<h3 class="alert-info">Now viewing records of student number: <?php echo $student->student_number; ?></h3>

			<h3>Subjects: </h3>
			  <thead>
			    <tr>
			      <th width="30%">Subject</th>
			      <th width="30%">Schedule</th>
			      <th width="30%">Department</th>

			    </tr>
			  </thead>
			  <tbody>
			   	<?php foreach ($student->enrollments as $enrollment): ?>
				 <tr>

						<td><?php echo $enrollment->subjectsection->subject->subjectname; ?></td>
						<td><?php echo $enrollment->subjectsection->schedule; ?></td>
						<td><?php echo $enrollment->subjectsection->subject->collegedept->collegedeptname; ?></td>

			
				 </tr>
				<?php endforeach; ?>
			  </tbody>
			</table>
			


		</div>
	</div>
</div>