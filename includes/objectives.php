<?php
require_once(LIB_PATH.DS.'database.php');

class Objectives extends DatabaseObject {
	protected static $table_name = "objectives";
	protected static $db_fields = array('id', 'user_id', 'objective', 'details', 'datetime');
	
	public $id;
	public $user_id;
	public $objective;
	public $details;
	public $datetime;
}
?>