<div class="container" id="main-con">
	<div class="row">

		 <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Sidebar</li>
	              <li><a href="<?php echo  site_url()?>/collegedepts/add">Add College Departments</a></li>
	              <li class="active"><a href="<?php echo  site_url()?>/collegedepts">Manage College Departments</a></li>
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

			  <h2 class="alert-info">Manage College Departments</h2>
			  <thead>
			    <tr>
			      <th width="10%">ID</th>
			      <th width="70%">College Department</th>
			      <th width="20%">Commands</th>
			    </tr>
			  </thead>
			  <tbody>
			   

				<?php foreach ($collegeDepts as $collegeDept): ?>
					 <tr>
						<td><?php echo $collegeDept->collegedeptid; ?></td>
						<td><?php echo $collegeDept->collegedeptname; ?></td>
						<td><a href="<?php echo  site_url()?>/collegedepts/edit/<?php echo $collegeDept->collegedeptid; ?>">EDIT</a>&nbsp;&nbsp;<a href="<?php echo  site_url()?>/collegedepts/delete/<?php echo $collegeDept->collegedeptid; ?>">DELETE</a></td>
					 </tr>
				<?php endforeach; ?>

			   
			  </tbody>
			</table>
			


		</div>
	</div>
</div>