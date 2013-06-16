<?php
require_once(LIB_PATH.DS.'database.php');

class Client extends DatabaseObject {
	protected static $table_name = "client";
	protected static $db_fields = array('id', 'client_id', 'va_id', 'deleted');
	
	public $id;
	public $client_id;
	public $va_id;
	public $deleted;
}
?>