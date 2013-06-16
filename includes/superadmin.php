<?php
require_once(LIB_PATH.DS.'database.php');

class SuperAdmin extends DatabaseObject {
	protected static $table_name = "superadmin";
	protected static $db_fields = array('id', 'user', 'pass', 'type', 'email');
	
	public $id;
	public $user;
	public $pass;
	public $type;
	public $email;
}
?>