<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route = array(
	'default_controller' 					=> 'User',
	'404_override'							=> '404_override',
	'translate_uri_dashes'					=> FALSE,


	
	'api/users/post'						=> 'Api/users_post',
	'api/users'								=> 'Api/users',
	'api/users/(:num)'						=> 'Api/users_get/$1',
	'api/users/login'						=> 'Api/users_login',
	'api/users/put/(:num)'					=> 'Api/users_put/$1',
	'api/users/delete/(:num)'				=> 'Api/users_delete/$1',
	'api/logs'								=> 'Api/logs',
	'api/logs/user/(:num)'					=> 'Api/log_users/$1',
	'api/logs/today'						=> 'Api/logs_today',
	'api/logs/timeIn'						=> 'Api/logs_timeIn',
	'api/logs/timeOut'						=> 'Api/logs_timeOut',
	'uploads'								=> 'Api/uploads',
);