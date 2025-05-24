<?php

class Api_class extends CI_Model
{

	public function login_user($post){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username'=>$post['username'],'password'=>$post['password']));
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

	public function get_user_info($post){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('user_id'=>$post['user_id']));
		$query = $this->db->get()->result_array();
		$query = current($query);
		if($query){
				$user_array = array(
					'is_success' => '1',
					'message'	 => $query,
				);	
			
		}else{
			$user_array = array(
				'is_success' => '0',
				'message'	 => 'No User Exist',
			);
		}
		return $user_array;
	}


	public function register_user($post){
		$arrayName = array(
			'fname' 							=> $post['fname'],
			'mname' 							=> $post['mname'],
			'lname' 							=> $post['lname'],
			'age' 								=> $post['age'],
			'gender' 							=> $post['gender'],
			'address' 							=> $post['address'],
			'barangay' 							=> $post['barangay'],
			'city' 								=> $post['city'],
			'province' 							=> $post['province'],
			'country' 							=> $post['country'],
			'zip_code' 							=> $post['zip_code'],
			'residential_type' 					=> $post['residential_type'],
			'floor' 							=> $post['floor'],
			'contact_number'					=> $post['contact_number'],
			'username' 							=> $post['username'],
			'password' 							=> $post['password'],
			'date_added' 						=> current_ph_date_time(),

		);
		
		
			if(num_user_rows($post['username']) == 0){
				$query = $this->db->insert('users', $arrayName);
				if($query){	
					$user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Registered',
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


	public function residential_maintenance_add($post){
		$arrayName = array(
			'fname' 							=> $post['fname'],
			'mname' 							=> $post['mname'],
			'lname' 							=> $post['lname'],
			'age' 								=> $post['age'],
			'gender' 							=> $post['gender'],
			'address' 							=> $post['address'],
			'contact_num' 						=> $post['contact_num'],
			'user_id' 							=> $post['user_id'],
			'date_added' 						=> current_ph_date_time(),
		);
				$query = $this->db->insert('residential_maintenance', $arrayName);
				if($query){	
					$user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Residential Maintenance Added',
					);
				}else{
					$user_array = array(
						'is_success' => '0',
						'message'	 => 'Wrong Query',
					);
				}
			return $user_array;					
	}

	public function residential_maintenance_update($post){
		$arrayName = array(
			'fname' 							=> $post['fname'],
			'mname' 							=> $post['mname'],
			'lname' 							=> $post['lname'],
			'age' 								=> $post['age'],
			'gender' 							=> $post['gender'],
			'address' 							=> $post['address'],
			'contact_num' 						=> $post['contact_num'],
			'user_id' 							=> $post['user_id'],
			'date_updated' 						=> current_ph_date_time(),
		);
				$this->db->where('residential_maintenance_id', $post['residential_maintenance_id']);
	      		$query = $this->db->update('residential_maintenance', $arrayName);
				if($query){	
					$user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Residential Maintenance Updated',
					);
				}else{
					$user_array = array(
						'is_success' => '0',
						'message'	 => 'Wrong Query',
					);
				}
			return $user_array;					
	}

	public function residential_maintenance_delete($post){
			$data2 = array(
				'residential_maintenance_id'				=> $post['residential_maintenance_id'],
			);
			$this->db->where($data2);
			$query = $this->db->delete('residential_maintenance');
				if($query){	
					$user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Residential Maintenance Deleted',
					);
				}else{
					$user_array = array(
						'is_success' => '0',
						'message'	 => 'Wrong Query',
					);
				}
			return $user_array;					
	}
	

	public function residential_maintenance_get($post){
		$this->db->select('*');
		$this->db->from('residential_maintenance');
		$this->db->where(array('residential_maintenance_id'=>$post['residential_maintenance_id']));
		$query = $this->db->get()->result_array();
		$query = current($query);
		if($query){
				$user_array = array(
					'is_success' => '1',
					'message'	 => $query,
				);	
			
		}else{
			$user_array = array(
				'is_success' => '0',
				'message'	 => 'No User Exist',
			);
		}
		return $user_array;
	}

	public function residential_maintenance_get_user($post){
		$this->db->select('*');
		$this->db->from('residential_maintenance');
		$this->db->where(array('user_id'=>$post['user_id']));
		$query = $this->db->get()->result_array();
		if($query){
				$user_array = array(
					'is_success' => '1',
					'message'	 => $query,
				);	
			
		}else{
			$user_array = array(
				'is_success' => '0',
				'message'	 => 'No User Exist',
			);
		}
		return $user_array;
	}


	public function residential_maintenance_get_all(){
		$this->db->select('*');
		$this->db->from('residential_maintenance');
		$query = $this->db->get()->result_array();
		if($query){
				$user_array = array(
					'is_success' => '1',
					'message'	 => $query,
				);	
			
		}else{
			$user_array = array(
				'is_success' => '0',
				'message'	 => 'No User Exist',
			);
		}
		return $user_array;
	}

	public function upload_user_data($post){
		$arrayName = array(
			'fname' 							=> $post['fname'],
			'mname' 							=> $post['mname'],
			'lname' 							=> $post['lname'],
			'age' 								=> $post['age'],
			'gender' 							=> $post['gender'],
			'address' 							=> $post['address'],
			'city' 								=> $post['city'],
			'province' 							=> $post['province'],
			'country' 							=> $post['country'],
			'zip_code' 							=> $post['zip_code'],
			'residential_type' 					=> $post['residential_type'],
			'barangay' 							=> $post['barangay'],
			'floor' 							=> $post['floor'],
			'contact_number'					=> $post['contact_number'],
			'username' 							=> $post['username'],
			'password' 							=> $post['password'],
			'date_updated' 						=> current_ph_date_time(),

		);
		
		
			if(num_user_rows_id($post['username'],$post['user_id']) == 0){

				
				$this->db->where('user_id', $post['user_id']);
	      		$query = $this->db->update('users', $arrayName);
				if($query){	
					$user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Updated',
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


	public function upload_user_data_password($post){
		$arrayName = array(
			'password' 							=> $post['password'],
			'date_updated' 						=> current_ph_date_time(),

		);
		
		
	

				
				$this->db->where('user_id', $post['user_id']);
	      		$query = $this->db->update('users', $arrayName);
				if($query){	
					$user_array = array(
						'is_success' => '1',
						'message'	 => 'Successfully Updated',
					);
				}else{
					$user_array = array(
						'is_success' => '0',
						'message'	 => 'Wrong Query',
					);
				}
				
				
			

			return $user_array;
					
		
	}

	
}