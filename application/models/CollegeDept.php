<?php

class CollegeDept extends ActiveRecord\Model {

    static $table_name = 'collegedept';

	static $primary_key = 'collegedeptid';

	static $has_many = array(
		array('subjects', 'class_name' => 'Subject', 'foreign_key' => 'collegedeptid')
	);



}


