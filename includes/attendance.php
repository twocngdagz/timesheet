<?php
require_once(LIB_PATH.DS.'database.php');

class Attendance extends DatabaseObject {
	protected static $table_name = "attendance";
	protected static $db_fields = array('id', 'user_id', 'indate', 'outdate', 'hour', 'min', 'second', 'overtime', 'is_new', 'task', 'note', 'task_finish');
	
	public $id;
	public $user_id;
	public $indate;
	public $outdate;
	public $hour;
	public $min;
	public $second;
	public $overtime;
	public $is_new;
	public $task;
	public $note;
	public $task_finish;
}
?>