<?php
require_once(LIB_PATH.DS.'database.php');

class Account extends DatabaseObject {
	protected static $table_name = "account";
	protected static $db_fields = array('id', 'user', 'pass', 'fname', 'lname', 'mname', 'email', 'h_rate', 'o_rate', 'company', 'image', 'gender', 'phone', 'type', 'shift_id', 'status', 'screenshot_x', 'deleted', 'overtime');
	
	public $id;
	public $user;
	public $pass;
	public $fname;
	public $lname;
	public $mname;
	public $email;
	public $h_rate;
	public $o_rate;
	public $company;
	public $image;
	public $gender;
	public $phone;
	public $type;
	public $shift_id;
	public $status;
	public $screenshot_x;
	public $deleted;
	public $overtime;
}
?>