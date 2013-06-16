<?php
require_once(LIB_PATH.DS.'database.php');

class Screenshot extends DatabaseObject {
	protected static $table_name = "screenshot";
	protected static $db_fields = array('id', 'user_id', 'attendance_id', 'filename', 'datetime', 'is_new');
	
	public $id;
	public $user_id;
	public $attendace_id;
	public $filename;
	public $datetime;
	public $is_new;
}
?>