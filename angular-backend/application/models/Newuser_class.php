<?php

class Newuser_class extends CI_Model
{
	public function login_user($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username'=>$data['username'],'password'=>$data['password']));
		$query = $this->db->get()->result_array();
		$query = current($query);
		if($query){
				$user_array = array(
					'is_success' => '1',
					'message'	 => $query['user_id'],
				);	
			
		}else{
			$user_array = array(
				'is_success' => '0',
				'message'	 => 'Incorrect username or password. Please try again',
			);
		}
		return $user_array;
	}

	public function register_user_submit($data){
		$postrequest = array(
			'fname'				=> $data['fname'],
			'mname'				=> $data['mname'],
			'lname'				=> $data['lname'],
			'phone_number'		=> $data['phone_number'],
			'email'				=> $data['email'],
			'address'			=> $data['address'],
			'username'			=> $data['username'],
			'password'			=> $data['password'],
			'birthdate'			=> $data['birthdate'],
			'date_added'		=> current_ph_date_time(),

		);
			if(num_user_rows($data['username']) == 0){
				$query = $this->db->insert('users', $postrequest);
				if($query){	
					$user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Registered',
						'id_get'	 => $this->db->insert_id(),
					);
				}else{
					$user_array = array(
						'is_success' => '0',
						'message'	 => 'Wrong Query',
					);
				}
				
				
			}else{
				$user_array = array(
					'is_success' => '0',
					'message'	 => 'Please change your username',
				);
			}
		return $user_array;
	}

	public function change_profile_submit($post){
	      $this->db->where('user_id', newuser_session_val());
	      $query = $this->db->update('users', $post);

	      if($query){
	        $user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Update Profile',
					);
	      } else {
	        $user_array = array(
						'is_success' => '0',
						'message'	 => 'Wrong Query',
					);
	      }
	      return $user_array;
	    
	}

	public function change_password_submit($post){
	      $this->db->where('user_id', newuser_session_val());
	      $query = $this->db->update('users', $post);

	      if($query){
	        $user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Changed password',
					);
	      } else {
	        $user_array = array(
						'is_success' => '0',
						'message'	 => 'Wrong Query',
					);
	      }
	      return $user_array;
	    
	}
}