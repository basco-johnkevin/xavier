<?php

class Enrollment extends ActiveRecord\Model {

    static $table_name = 'enrollment';

	static $primary_key = 'enrollmentid';

	static $belongs_to = array(
		array('student', 'class_name' => 'Student', 'foreign_key' => 'studentid'),
		array('subjectSection', 'class_name' => 'SubjectSection', 'foreign_key' => 'subjectsectionid')
	);

	

}

