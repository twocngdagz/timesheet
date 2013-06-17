<?php
require_once("../includes/initialize.php");

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->get('/accounts', 'getAccounts');
$app->get('/accounts/:id', 'getAccount');
$app->post('/accounts', 'addAcccount');
$app->post('/login', 'login');
$app->get('/attendances', 'getAttendances');
$app->get('/attendance/:id', 'getAttendance');
$app->run();

function login() {
	$user = array("email"=>"admin", "firstName"=>"Clint", "lastName"=>"Berry", "role"=>"user");
	echo json_encode($user);
}


function getAttendances() {
	$attendance = Attendance::find_all();
	echo trim(json_encode($attendance));
}

function getAttendance($id) {
	$attendance = Attendance::find_by_id($id);
	echo trim(json_encode($attendance));
}

function getAccounts() {	
	$accounts = Account::find_all();
	echo trim(json_encode($accounts));
}

function getAccount($id) {
	$account = Account::find_by_id($id);
	echo trim(json_encode($account));
}

function addAcccount() {
	$user = new Account();
	$request = \Slim\Slim::getInstance()->request();
	$data = urldecode($request->getBody());
	$account = json_decode($data);
	$user->user = $account->user;
	$user->pass = $account->pass;
	$user->fname = $account->fname;
	$user->lname = $account->lname;
	$user->mname = $account->mname;
	$user->email = $account->email;
	$user->h_rate = $account->h_rate;
	$user->o_rate = $account->o_rate;
	$user->company = $account->company;
	$user->image = $account->image;
	$user->gender = $account->gender;
	$user->phone = $account->phone;
	$user->type = $account->type;
	$user->shift_id = $account->shift_id;
	$user->status = $account->status;
	$user->screenshot_x = $account->screenshot_x;
	$user->deleted = $account->deleted;
	$user->overtime = $account->overtime;
	print_r($user);
}
?>