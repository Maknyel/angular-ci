<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		header('Content-Type: application/json');
		header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST, OPTIONS");
        header("Access-Control-Allow-Methods: GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
	}


	public function users(){
		$post = $this->input->post();
		$return = $this->User_class->get_all_users($post);
        if($return){
			echo json_encode($return);
		}
		
	}
	public function users_post(){
		$post = $this->input->post();
		$return = $this->User_class->insert_user($post);
        if($return){
			echo json_encode($return);
		}
	}
	public function users_get($id){
		$return = $this->User_class->get_current_user($id);
        if($return){
			echo json_encode($return);
		}
	}
	public function users_login(){
		$post = $this->input->post();
		$return = $this->User_class->login_user($post);
        if($return){
			echo json_encode($return);
		}
		
	}
	public function users_put($id){
		$post = $this->input->post();
		$return = $this->User_class->update_user($post,$id);
        if($return){
			echo json_encode($return);
		}
		
	}
	public function users_delete($id){
		$return = $this->User_class->delete_user($id);
        if($return){
			echo json_encode($return);
		}
		
	}
	public function logs(){
		$post = $this->input->post();
		$return = $this->User_class->get_all_logs($post);
        if($return){
			echo json_encode($return);
		}
		
	}
	public function log_users($id){
		$return = $this->User_class->get_current_log($id);
        if($return){
			echo json_encode($return);
		}
		
	}
	public function logs_today(){
		$post = $this->input->post();
		$return = $this->User_class->logs_today($post);
        if($return){
			echo json_encode($return);
		}
	}
	public function logs_timeIn(){
		$post = $this->input->post();
		$return = $this->User_class->logs_timeIn($post);
        if($return){
			echo json_encode($return);
		}
	}
	public function logs_timeOut(){
		$post = $this->input->post();
		$return = $this->User_class->logs_timeOut($post);
        if($return){
			echo json_encode($return);
		}
		
	}
	public function uploads(){
		
	}

  
    

  
    
}