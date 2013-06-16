<?php
require_once(LIB_PATH.DS.'database.php');

class Shift extends DatabaseObject {
	protected static $table_name = "shift";
	protected static $db_fields = array('id', 'thein', 'theout', 'details');
	
	public $id;
	public $thein;
	public $theout;
	public $details;
}
?>