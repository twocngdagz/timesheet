<?php
require_once(LIB_PATH.DS.'database.php');

class Log extends DatabaseObject {
	protected static $table_name = "log";
	protected static $db_fields = array('id', 'admin_id', 'text', 'date');
	
	public $id;
	public $admin_id;
	public $text;
	public $date;
}
?>