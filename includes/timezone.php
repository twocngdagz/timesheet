<?php
require_once(LIB_PATH.DS.'database.php');

class Timezone extends DatabaseObject {
	protected static $table_name = "timezone";
	protected static $db_fields = array('id', 'name', 'timezone', 'activated');
	
	public $id;
	public $name;
	public $timezone;
	public $activated;
}
?>