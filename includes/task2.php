<?php
require_once(LIB_PATH.DS.'database.php');

class Task2 extends DatabaseObject {
	protected static $table_name = "task2";
	protected static $db_fields = array('id', 'user_id', 'attendance_id', 'date', 'timein', 'am/pm_in', 'timeout', 'am/pm_out', 'task', 'note', 'finish');
	
	public $id;
	public $user_id;
	public $attendance_id;
	public $date;
	public $timein;
	public $ampm_in;
	public $timeout;
	public $ampm_out;
	public $task;
	public $note;
	public $finish;
}
?>