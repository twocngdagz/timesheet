<?php
require_once(LIB_PATH.DS.'database.php');

class AdminLog extends DatabaseObject {
	protected static $table_name = "admin_log";
	protected static $db_fields = array('id', 'admin_id', 'text', 'date');
	
	public $id;
	public $admin_id;
	public $text;
	public $date;
}
?>