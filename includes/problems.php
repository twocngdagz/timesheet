<?php
require_once(LIB_PATH.DS.'database.php');

class Problems extends DatabaseObject {
	protected static $table_name = "problems";
	protected static $db_fields = array('id', 'user_id', 'problem', 'action', 'recommendation', 'datetime');
	
	public $id;
	public $user_id;
	public $problem;
	public $recommendation;
	public $datetime;
}
?>