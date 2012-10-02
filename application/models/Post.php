<?php

class Post extends ActiveRecord\Model {

	static $table_name = 'posts';

	static $primary_key = 'id';

	static $belongs_to = array(
		array('student', 'class_name' => 'Student')
	);


}

