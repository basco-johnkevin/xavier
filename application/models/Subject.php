<?php

class Subject extends ActiveRecord\Model {

    static $table_name = 'subject';

	static $primary_key = 'subjectid';

	static $belongs_to = array(
		array('collegeDept', 'class_name' => 'CollegeDept', 'foreign_key' => 'collegedeptid')
	);



}


