<?php
require_once(LIB_PATH.DS.'database.php');

class Task extends DatabaseObject {
	protected static $table_name = "task";
	protected static $db_fields = array('id', 'user_id', 'attendance_id', 'datetime', 'dateout', 'task', 'note', 'finish');
	
	public $id;
	public $user_id;
	public $attendance_id;
	public $datetime;
	public $dateout;
	public $task;
	public $note;
	public $finish;
}
?>