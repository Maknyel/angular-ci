<?php

class User_class extends CI_Model
{
	public function get_all_users($data){
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function get_current_user($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('id'=>$data));
		$query = $this->db->get()->result_array();
		return $query = current($query);
	}

	public function insert_user($data){
		$arrayName = array(
			'name' 											=> $data['name'],
			'username' 										=> $data['username'],
			'password' 										=> $data['password'],
			'image_path' 									=> $data['image_path'],
		);
		$query = $this->db->insert('users', $arrayName);
		if($query){	
			return 1;
		}else{
			return 0;
		}
	}

	public function login_user($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username'=>$data['username'],'password'=>$data['password']));
		$query = $this->db->get()->result_array();
		$query = current($query);
		if($query){
				return $query;	
			
		}else{
			$user_array = 'Incorrect username or password. Please try again';
		}
		return $user_array;
	}

	public function update_user($data,$id){
		$arrayName = array(
			'name' 											=> $data['name'],
			'username' 										=> $data['username'],
			'updated_at' 									=> current_ph_date_time(),
		);
		$this->db->where('id', $id);
		$query = $this->db->update('users', $arrayName);
		if($query){	
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('id'=>$id));
			$query = $this->db->get()->result_array();
			return $query = current($query);
		}else{
			return 0;
		}
	}

	public function delete_user($data){
		$this->db->where(array('id'=>$data));
		return $this->db->delete('users');
	}

	


	public function get_all_logs($data){
		$this->db->select('*');
		$this->db->from('logs');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function get_current_log($data){
		$this->db->select('*');
		$this->db->from('logs');
		$this->db->where(array('user_id'=>$data));
		$query = $this->db->get()->result_array();
		return $query;
	}


	public function logs_today($data){
		$this->db->select('*');
		$this->db->from('logs');
		$this->db->where(array('user_id'=>$data['user_id'],'date'=>$data['dateToday']));
		$query = $this->db->get()->result_array();
		return $query = current($query);
	}

	public function logs_timeIn($data){
		$arrayName = array(
			'user_id' 										=> $data['user_id'],
			'date' 											=> $data['date'],
			'time_in' 										=> $data['time_in'],
		);
		$query = $this->db->insert('logs', $arrayName);
		if($query){	
			return [
				'id'		=> $query,
				'user_id'	=> $data['user_id'],
				'date'		=> $data['date'],
				'time_in'	=> $data['time_in']
			];
		}else{
			return 0;
		}		
	}

	public function logs_timeOut($data){
		$arrayName = array(
			'time_out' 										=> $data['time_out'],
		);
		$this->db->where('id', $data['id']);
		$query = $this->db->update('logs', $data);
		if($query){	
			return $data['id'];
		}else{
			return 0;
		}		
	}

















	

	public function update_profile_admin_user($post){
	      $this->db->where('id', user_session_val());
	      $query = $this->db->update('admin_data', $post);

	      if($query){
	        return 1;// Success Message
	      } else {
	        return $query;// Failed Message
	      }
	    
	}

	public function update_password_admin($post){
	      $this->db->where('cms_user_id', user_session_val_cms());
	      $query = $this->db->update('cms_user', $post);

	      if($query){
	        return 1;// Success Message
	      } else {
	        return $query;// Failed Message
	      }
	    
	}

	public function update_profile_admin($post){
	      $this->db->where('cms_user_id', user_session_val_cms());
	      $query = $this->db->update('cms_user', $post);

	      if($query){
	        return 1;// Success Message
	      } else {
	        return $query;// Failed Message
	      }
	    
	}

	public function update_password_admin_user($post){
	      $this->db->where('id', user_session_val());
	      $query = $this->db->update('admin_data', $post);

	      if($query){
	        return 1;// Success Message
	      } else {
	        return $query;// Failed Message
	      }
	    
	}

	


	public function fire_station_form($post){
		switch ($post['crud_type']) {
			case 'add':
				$arrayName = array(
					'fire_station_name' 							=> $post['fire_station_name'],
					'fire_station_address' 							=> $post['fire_station_address'],
					'fire_station_added' 							=> current_ph_date_time(),
				);
				$query = $this->db->insert('fire_station', $arrayName);
				if($query){	
					return 1;
				}else{
					return 0;
				}
			break;
			case 'edit':
				$arrayName = array(
					'fire_station_name' 							=> $post['fire_station_name'],
					'fire_station_address' 							=> $post['fire_station_address'],
					'fire_station_updated' 							=> current_ph_date_time(),
				);
				$this->db->where('fire_station_id', $post['fire_station_id']);
	      		$query = $this->db->update('fire_station', $arrayName);
	      		if($query){	
					return 1;
				}else{
					return 0;
				}

			break;
			case 'delete':
				$data2 = array(
				'fire_station_id'				=> $post['fire_station_id'],
				);
				$this->db->where($data2);
				$query = $this->db->delete('fire_station');
				if($query){
					return 1;
				}else{
					return 0;
				}
			break;
			case 'get_by_id':
				$this->db->select('*');
				$this->db->from('fire_station');
				$this->db->where('fire_station_id',$post['fire_station_id']);
				$query = $this->db->get()->result_array();
				
				return current($query);
			break;
			
			default:
				return 0;
			break;
		}
	}

	
}