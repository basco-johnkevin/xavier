<?php

class SubjectSection extends ActiveRecord\Model {

    static $table_name = 'subjectsection';

	static $primary_key = 'subjectsectionid';

	static $belongs_to = array(
		array('subject', 'class_name' => 'Subject', 'foreign_key' => 'subjectid')
	);

	

}

