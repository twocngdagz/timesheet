<?php
require_once(LIB_PATH.DS.'database.php');

class Holidays extends DatabaseObject {
	protected static $table_name = "holidays";
	protected static $db_fields = array('id', 'date', 'details', 'isworking', 'deletee');
	
	public $id;
	public $date;
	public $details;
	public $isworking;
	public $deletee;
}
?>