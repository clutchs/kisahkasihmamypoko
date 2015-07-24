<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Model Class Object for Participants
class Participants Extends CI_Model {
    
    // Table name for this model
    protected $table = 'participants';

    public function __construct(){
	// Call the Model constructor
	parent::__construct();

	$this->db = $this->load->database('default', true);

	// Set default table
	$this->table = $this->db->dbprefix($this->table);

    }

    public function install() {

		$insert_data	= FALSE;

		if (!$this->db->table_exists($this->table)) 
		$insert_data	= FALSE;

		$sql	= 'CREATE TABLE IF NOT EXISTS `'.$this->table.'` ('
				. '`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, '
				. '`identifier_id` VARCHAR(64) NULL, '
                . '`identity` VARCHAR(32) NULL, '
				. '`profile_url` VARCHAR(255) NULL, '
                . '`photo_url` VARCHAR(512) NULL, '
                . '`email` VARCHAR(72) NULL, '
                . '`website` VARCHAR(72) NULL, '
                . '`password` VARCHAR(100) NULL, '
				. '`username` VARCHAR(255) NULL, '
				. '`name` VARCHAR(255) NULL, '
				. '`gender` VARCHAR(12) NULL, '
				. '`age` TINYINT(2) NULL, '
                . '`nationality_id` INT(11) NULL, '
                . '`research_area` VARCHAR(255) NULL, '
                . '`occupation` VARCHAR(64) NULL, '
                . '`about` TEXT NULL, '
                . '`address` VARCHAR(512) NULL, '
                . '`region` VARCHAR(64) NULL, '	
				. '`phone_number` VARCHAR(32) NULL, '
                . '`phone_home` VARCHAR(32) NULL, '
                . '`id_number` VARCHAR(32) NULL, '
				. '`file_name` VARCHAR(512) NULL, '
                . '`verify` VARCHAR(8) NULL, '
				. '`completed` TINYINT(1) NULL, '
                . '`logged_in` TINYINT(1) NOT NULL DEFAULT 0, '
                . '`last_login` INT(11) NULL, '
                . '`session_id` VARCHAR(40) NOT NULL, '
				. '`status` TINYINT(1) NOT NULL DEFAULT 0, '
				. '`join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, '
				. 'INDEX (`name`) '
				. ') ENGINE=MYISAM DEFAULT CHARSET=utf8;';

		$this->db->query($sql);

		if(!$this->db->query('SELECT * FROM `'.$this->table.'` LIMIT 0 , 1;'))
			$insert_data	= TRUE;

		if ($insert_data) {
			$sql	= '';
			$this->db->query($sql);
		}

		return $this->db->table_exists($this->table);

    }

    public function getCount($status = null){
		$options = array();
		if ($status) {
			$options = array('status' => $status);
		}
		$this->db->where($options,1);
		$this->db->from($this->table);
		$data = $this->db->count_all_results();
		return $data;
    }
    
    public function getParticipantByIdentity($identifier_id='',$identity='') {
        
        if(!empty($identifier_id)){
			$data = array();
			$options = array('identifier_id' => $identifier_id,'identity'=>$identity);
			$Q = $this->db->get_where($this->table,$options,1);
			if ($Q->num_rows() > 0){
				foreach ($Q->result_object() as $row)
				$data = $row;
			}
			$Q->free_result();
			return $data;
		}
        
    }
    
    public function getActivation($params='') {
        if(!empty($params)){
			$data = array();
			$options = $params;
			$Q = $this->db->get_where($this->table,$options,1);
			if ($Q->num_rows() > 0){
				foreach ($Q->result_object() as $row)
				$data = $row;
			}
            if (!empty($data)) {
                //Get user id
                $this->db->where('id', $data->id);
                // Set data to update
                $update = array('status'=>1,'logged_in'=>1,'session_id'=>$this->session->userdata('session_id'),'last_login'=>time());
                //Return result
                $this->db->update($this->table, $update);
            }
            $Q->free_result();
            return $data;
		}        
    }
    
    public function getParticipant($id = null){
		if(!empty($id)){
			$data = array();
			$options = array('id' => $id);
			$Q = $this->db->get_where($this->table,$options,1);
			if ($Q->num_rows() > 0){
				foreach ($Q->result_object() as $row)
				$data = $row;
			}
			$Q->free_result();
			return $data;
		}
    }	

    public function getAllParticipant($admin=null){
		$data = array();
		$this->db->order_by('added');
		$Q = $this->db->get($this->table);
			if ($Q->num_rows() > 0){
				//foreach ($Q->result_object() as $row){
					//$data[] = $row;
				//}
				$data = $Q->result_object();
			}
		$Q->free_result();
		return $data;
    }	
    
    // Get participant's Email from posts 
	public function getEmail($email=null){
	    if(!empty($email)){
		$data = array();

		// Option and query result
		$options = array('email' => $email);			
		$Q = $this->db->get_where($this->table,$options,1);

		// Check result
		if($Q->num_rows() > 0) {
                // Return true if not exists
                return true;
            } else {
                // Return false if exists
                return false;
            }		 
	    }
	}
    
    // Get participant's by their Email from posts 
    public function getByEmail($email = null){
	    if(!empty($email)){
		$data = array();
		$options = array('email' => $email);
		$Q = $this->db->get_where($this->table,$options,1);
		if ($Q->num_rows() > 0){
			foreach ($Q->result_object() as $row)
			$data = $row;
		}
		$Q->free_result();
		return $data;
	    }
	}
	// Get all Participants Join stats by join_date
	public function getJoinStats() {
	    
		/* SELECT count(`part_id`) `total_join`, date(`join_date`) `join_date` FROM `tbl_participants` WHERE date(`join_date`) >= '2014-10-25' AND date(`join_date`) <= '2015-03-25' GROUP BY date(`join_date`) ORDER BY `join_date` ASC */
		
	    $sql = 'SELECT count(`id`) `total_join`, date(`join_date`) `join_date` '
                    .'FROM `'. $this->table .'`'
                    .'WHERE date(`join_date`) >= \''.date('Y-m-d',strtotime("-5 month", time())).'\' '
                    .'AND date(`join_date`) <= \''.date('Y/m/d').'\' '
                    .'GROUP BY date(`join_date`) ORDER BY `join_date` ASC';
	    
	    $query = $this->db->query($sql);
            
	    return $query->result_object();
	}
    
    // Authenticate function for user login
	public function login($object=null){		
	    if(!empty($object)){
		$data = array();
		$options = array(
				'email' => $object['email'], 
				'password' => sha1($object['email'].$object['password']));

		$Q = $this->db->get_where($this->table,$options,1);
		if ($Q->num_rows() > 0){				
		    foreach ($Q->result_object() as $row) {
                if (intval($row->status) === 1) {
                    // Update login state to true
                    $this->setLoggedIn($row->id);
                    $data = $row;
                } else {
                    $data = 'disabled';
                }
		    }
		} 			 
        
		$Q->free_result();
		return $data;
	    }
	}
	/*
    public function setActivation($object='') {
        //Get user id
	    $this->db->where('id', $object->id);
        // Set data to update
        $update = array('status'=>1,'completed'=>1,'logged_in'=>1,'session_id'=>$this->session->userdata('session_id'),'last_login'=>time());
	    //Return result
	    return $this->db->update($this->table, $update);
	}
    */
	public function setLastLogin($id=null) {
	    //Get user id
	    $this->db->where('id', $id);
	    //Return result
	    return $this->db->update($this->table, array('last_login'=>time(),'logged_in'=>0));
	}
	
	public function setLoggedIn($id=null) {
	    //Get user id
	    $this->db->where('id', $id);
	    //Return result
	    return $this->db->update($this->table, array('logged_in'=>1,'session_id'=>$this->session->userdata('session_id')));
	}
	
	public function setPassword($user=null,$changed=''){
		
	    $password = ($changed) ? $changed : random_string('alnum', 8);

	    $data = array('password' => sha1($user->username.$password));

	    $this->db->where('id', $user->id);
	    $this->db->update($this->table, $data); 

	    return $password;
		
	}
    
    public function setParticipant($object=null){

		// Set Participant data
		$data = array(			
            'identifier_id' => @$object['identifier_id'],
            'identity'      => @$object['identity'],
            'profile_url'   => @$object['profile_url'],
            'photo_url'	=> @$object['photo_url'],
            
            'username'	=> @$object['username'],
            'name'		=> @$object['name'],
            'gender'	=> @$object['gender'],
            'email'		=> @$object['email'],
            'website'	=> @$object['website'],
            'age'       => @$object['age'],
            'nationality_id' => @$object['nationality_id'],
			'id_number'	=> @$object['id_number'],
            'research_area' => @$object['research_area'],
            'occupation' => @$object['occupation'],
            
            'baby_name' => @$object['baby_name'],
            'baby_birthday' => @$object['baby_birthday'],
            
            'about' => @$object['about'],
            
            'address'	=> @$object['address'],
            'region'	=> @$object['region'],
            
            'phone_number' => @$object['phone_number'],
            'phone_home' => @$object['phone_home'],
            'id_number' => @$object['id_number'],
            
            'file_name'	=> @$object['file_name'],
            'verify' => @$object['verify'],
            'status' => @$object['status'],
		);

		// Insert Participant data
		$this->db->insert($this->table, $data);

		// Return last insert id primary
		$insert_id = $this->db->insert_id();

		// Return last insert id primary
		return $insert_id;

    }	

	public function updateParticipant($id=null, $object) {
	
		// Set Participant data
		$data = array(			
            'identifier_id' => @$object['identifier_id'],
            'identity'      => @$object['identity'],
            'profile_url'   => @$object['profile_url'],
            'photo_url'	=> @$object['photo_url'],
            
            'username'	=> @$object['username'],
            'name'		=> @$object['name'],
            'gender'	=> @$object['gender'],
            'email'		=> @$object['email'],
            'website'	=> @$object['website'],
            'age'       => @$object['age'],
            'nationality_id' => @$object['nationality_id'],
			'id_number'	=> @$object['id_number'],
            'research_area' => @$object['research_area'],
            'occupation' => @$object['occupation'],
            
            'baby_name' => @$object['baby_name'],
            'baby_birthday' => @$object['baby_birthday'],
            
            'about' => @$object['about'],
            
            'address'	=> @$object['address'],
            'region'	=> @$object['region'],
            
            'phone_number' => @$object['phone_number'],
            'phone_home' => @$object['phone_home'],
            'id_number' => @$object['id_number'],
            
            'file_name'	=> @$object['file_name'],
            'verify' => @$object['verify'],
            'status' => @$object['status'],
		);
	    //Get user id
	    $this->db->where('id', $id);
	    //Return result
	    return $this->db->update($this->table, $object);
	}
	
    // Delete page
    public function deleteParticipant($id) {

		// Check page id
		$this->db->where('id', $id);

		// Delete page form database
		return $this->db->delete($this->table);		
    }	
	    
    public function get_all_gallery ($part_id, $limit = 0, $start = 0) {
        $data = array();

        $this->db->where('id',$part_id);
        //$this->db->where('status',1);        
        $this->db->order_by('id','desc');

        $Q = $this->db->get('participants');
        
        if ($Q->num_rows() > 0){
            $data = $Q->result_object();
        }

        $Q->free_result();
        return $data;   
    }
	
	public function get_all_images ($limit = 0, $start = 0, $order=array(), $search='', $column=array(), $status='') {
		$data = array();
        
        if ($search != '') {       
            $this->db->like('name', $search); 
        } 
        if ($status != '') {
			$this->db->where('status',$status);
        }
		$this->db->where('file_name !=','');
        
        if (is_array($order)) {
            foreach ($order as $key => $value) {                
                $this->db->order_by($key,$value);
            }
        }
		
		if (is_array($column)) {
            foreach ($column as $col => $val) {      			
                $this->db->where($col, $val);
            }
        }
        $this->db->limit($limit, $start);        

		$Q = $this->db->get('participants');
		if ($Q->num_rows() > 0){
			$data = $Q->result_object();
		}
		
        $Q->free_result();
        
		//print_r($this->db->last_query());
		
		return $data;	
	}

    public function get_count_images ($search='',$column=array(),$status='') {
        if (!empty($search)) {
            $this->db->like('name', $search);            
        }
		if (is_array($column)) {
            foreach ($column as $col => $val) {                
                $this->db->where($col, $val);
            }
        }
		if ($status != '') {
			$this->db->where('status',$status);
        }
        $this->db->from('participants');
        return $this->db->count_all_results();
    }

    public function get_count_user_images ($part_id=0) {
        $this->db->where('id',$part_id);
        $this->db->where('status', 1);
        $this->db->from('participants');
        return $this->db->count_all_results();
    }
	
    public function get_image($image_id='',$part_id='') {
        $data = array();
        $this->db->where('id',$image_id);
        //$this->db->where('part_id',$part_id);        
        $Q = $this->db->get('participants');
        if ($Q->num_rows() > 0){
            foreach ($Q->result_object() as $row)
            $data = $row;
        }
        $Q->free_result();
        return $data;   
    }

    public function insert_image($image) {
        $this->db->insert('participants', $image);
        return $this->db->insert_id();
    }
}
