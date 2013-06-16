<?php
require_once(LIB_PATH.DS.'database.php');

class Message extends DatabaseObject {
	protected static $table_name = "message";
	protected static $db_fields = array('id', 'user_id', 'message', 'date');
	
	public $id;
	public $user_id;
	public $message;
	public $date;
}
?>