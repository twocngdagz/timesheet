<?php
require_once(LIB_PATH.DS.'database.php');

class Extra extends DatabaseObject {
	protected static $table_name = "extra";
	protected static $db_fields = array('id', 'user_id', 'date', 'in', 'out', 'details');
	
	public $id;
	public $user_id;
	public $date;
	public $in;
	public $out;
	public $details;
}
?>