<?php

class Student extends ActiveRecord\Model {

    static $table_name = 'student';

	static $primary_key = 'studentid';

	static $has_many = array(
		array('posts', 'class_name' => 'Post'),
		array('enrollments', 'class_name' => 'Enrollment', 'foreign_key' => 'studentid')
	);


}


