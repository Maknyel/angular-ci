<?php
if (!function_exists('global_title')) {
	function global_title(){
		return get_meta_tags_functions(1,'meta_data');
	}
}

if (!function_exists('age_computation')) {
	function age_computation($bithdayDate){
	$date = new DateTime($bithdayDate);
	$now = new DateTime();
	$interval = $now->diff($date);
	return $interval->y;
	}
}


if (!function_exists('global_icon')) {
	function global_icon(){
		return base_url().'assets/images/'.get_meta_tags_functions(2,'meta_data');
	}
}

if (!function_exists('user_session_redirection')) {
	function user_session_redirection(){
		$CI =& get_instance();
		if(!$CI->session->userdata('alarmadmin')){
			redirect(base_url().'login', 'location');
		}
	}
}


if (!function_exists('reuser_session_redirection')) {
	function reuser_session_redirection(){
		$CI =& get_instance();
		if($CI->session->userdata('alarmadmin')){
			redirect(base_url().'admin', 'location');
		}
	}
}

if (!function_exists('user_session_redirection_user')) {
	function user_session_redirection_user(){
		$CI =& get_instance();
		if(!$CI->session->userdata('alarmadminuser')){
			redirect(base_url().'', 'location');
		}
	}
}


if (!function_exists('reuser_session_redirection_user')) {
	function reuser_session_redirection_user(){
		$CI =& get_instance();
		if($CI->session->userdata('alarmadminuser')){
			redirect(base_url().'', 'location');
		}
	}
}

if (!function_exists('return_user_profile')) {
	function return_user_profile(){
		$CI =& get_instance();
		return $CI->session->userdata('alarmadminuser');
	}
}

if(!function_exists('get_all_report')){
	function get_all_report(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('report');
		$result = $CI->db->get()->result_array();
		return ($result);
	}
}

if(!function_exists('get_meta_tags_functions')){
	function get_meta_tags_functions($meta_id,$field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('meta_tags');
		$CI->db->where('meta_id',$meta_id);
		$result = $CI->db->get()->result_array();
		$result = current($result);
		return ($result[$field]);
	}
}

if(!function_exists('get_all_users')){
	function get_all_users(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$result = $CI->db->get()->result_array();
		return ($result);
	}
}




if (!function_exists('user_session_val')) {
	function user_session_val(){
		$CI =& get_instance();
		return $CI->session->userdata('alarmadmin');
	}
}

if(!function_exists('get_myuser_info')){
	function get_myuser_info($field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('admin_data');
		$CI->db->where('id', user_session_val());
		$result = $CI->db->get()->result_array();
		$result = current($result);
		return ($result[$field]);
	}
}

if(!function_exists('upload_image_admin')) {
	function upload_image_admin($data) {
		$CI =& get_instance();
		$CI->db->where('id', user_session_val());
		$query = $CI->db->update('admin_data', $data);
		if($query){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('upload_image_user')) {
	function upload_image_user($data) {
		$CI =& get_instance();
		$CI->db->where('user_id', newuser_session_val());
		$query = $CI->db->update('users', $data);
		if($query){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('upload_image')) {
	function upload_image($data) {
		$CI =& get_instance();
		$CI->db->where('user_id', $data['user_id']);
		$query = $CI->db->update('users', $data);
		if($query){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('current_ph_date_time')){
	function current_ph_date_time(){
		date_default_timezone_set("Asia/Manila");
				return date("Y-m-d H:i:s a");
	}
}

if(!function_exists('current_ph_date')){
	function current_ph_date(){
		date_default_timezone_set("Asia/Manila");
				return date("Y-m-d");
	}
}

if(!function_exists('num_user_rows')){
	function num_user_rows($username){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$CI->db->where('username', $username);
		$result = $CI->db->get();
		return $result->num_rows();
	}
}


if(!function_exists('num_user_rows_id')){
	function num_user_rows_id($username,$user_id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$CI->db->where('username', $username);
		$CI->db->where('user_id<>', $user_id);
		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('users_number_id_exist')){
	function users_number_id_exist($user_id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$CI->db->where('user_id', $user_id);
		$result = $CI->db->get();
		return $result->num_rows();
	}
}


if(!function_exists('fire_station_count')){
	function fire_station_count(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('fire_station');
		$result = $CI->db->get();
		return $result->num_rows();
	}
}


if(!function_exists('admin_data_count')){
	function admin_data_count(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('admin_data');
		$result = $CI->db->get();
		return $result->num_rows();
	}
}



if (!function_exists('newuser_session_val')) {
	function newuser_session_val(){
		$CI =& get_instance();
		return $CI->session->userdata('alarmadminuser');
	}
}

if(!function_exists('get_myuser_info_newuser')){
	function get_myuser_info_newuser($field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$CI->db->where('user_id', newuser_session_val());
		$result = $CI->db->get()->result_array();
		$result = current($result);
		return ($result[$field]);
	}
}


if(!function_exists('sendMail')){
	function sendMail($data){

		$CI =& get_instance();
		// insert_email_database($data);
		$message = $CI->load->view('email_template',$data,true);

		$config = array(
			'protocol' 		=> 'smtp',
			'smtp_host' 	=> 'smtp.hostinger.ph',
			'smtp_port' 	=> 587,
			'smtp_user' 	=> 'water_leveling@cvsu-b-website.online',
			'smtp_pass' 	=> 'P@s$w0rd123!',
			'mailtype'  	=> 'html',
			'wordwrap'  	=> TRUE,
			'charset'   	=> 'utf-8',
		);

		$CI->email->set_newline("\r\n");
		$CI->email->initialize($config);
		$CI->email->from('water_leveling@cvsu-b-website.online', global_title());
		$CI->email->to( $data['email'] );

		$CI->email->subject($data['subject']);
		$CI->email->message( $message );
		return $CI->email->send();
		
	}
}


?>