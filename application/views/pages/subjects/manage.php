<div class="container" id="main-con">
    <div class="row">

         <div class="span3">
              <div class="well sidebar-nav">
                <ul class="nav nav-list">
                  <li class="nav-header">Sidebar</li>
                  <li><a href="<?php echo  site_url()?>/subjects/add">Add Subjects</a></li>
                  <li class="active"><a href="<?php echo  site_url()?>/subjects">Manage Subjects</a></li>
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

              <h2 class="alert-info">Manage Subjects</h2>
              <thead>
                <tr>
                  <th width="10%">ID</th>
                  <th width="50%">Subject</th>
                  <th width="20%">College Department</th>
                   <th width="20%">Commands</th>
                </tr>
              </thead>
              <tbody>
               

                <?php foreach ($subjects as $subject): ?>
                     <tr>
                        <td><?php echo $subject->subjectid; ?></td>
                        <td><?php echo $subject->subjectname; ?></td>
                        <td><?php echo $subject->collegedept->collegedeptname; ?></td>
                        <td><a href="<?php echo  site_url()?>/subjects/edit/<?php echo $subject->subjectid; ?>">EDIT</a>&nbsp;&nbsp;<a href="<?php echo  site_url()?>/subjects/delete/<?php echo $subject->subjectid; ?>">DELETE</a></td>
                     </tr>
                <?php endforeach; ?>

               
              </tbody>
            </table>
            


        </div>
    </div>
</div>