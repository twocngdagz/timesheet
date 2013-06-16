<?php
require_once(LIB_PATH.DS.'database.php');

class ClientProfile extends DatabaseObject {
	protected static $table_name = "client_profile";
	protected static $db_fields = array('id', 'fname', 'lname', 'company', 'address', 'website', 'gender', 'email', 'skype_name', 'phone', 'no_employees', 'industry_type', 'contact_person', 'person_position', 'person_gender', 'person_email', 'person_skype', 'person_phone');
	
	public $id;
	public $fname;
	public $lname;
	public $company;
	public $address;
	public $website;
	public $gender;
	public $email;
	public $skype_name;
	public $phone;
	public $no_employees;
	public $industry_type;
	public $contact_person;
	public $person_position;
	public $person_gender;
	public $person_email;
	public $person_skype;
	public $person_phone;
}
?>