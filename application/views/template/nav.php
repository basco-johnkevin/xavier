<ul class="nav" >
	<li class=" active"><a class="<?php echo isActive($pageName,"home")?>" href="<?php echo  base_url()?>">Home</a></li>

	<li><a class="<?php echo isActive($pageName,"about")?>" href="<?php echo  site_url()?>">Students</a></li>
	<li><a class="<?php echo isActive($pageName,"about")?>" href="<?php echo  site_url()?>/subjects">Subjects</a></li>
	<li><a class="<?php echo isActive($pageName,"about")?>" href="<?php echo  site_url()?>/collegedepts">College Departments</a></li>
	<li><a class="<?php echo isActive($pageName,"about")?>" href="<?php echo  site_url()?>/subjectsections">Subject Sections</a></li>
	<li><a class="<?php echo isActive($pageName,"about")?>" href="<?php echo  site_url()?>/enrollments">Enrollments</a></li>
</ul>