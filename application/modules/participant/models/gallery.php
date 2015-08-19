<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Model Class Object for Gallery
class Gallery Extends CI_Model {
    
	// Table name for this model
	protected $table = 'participant_images';
	
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
			    . '`part_id` INT(11) UNSIGNED NULL, '
			    . '`url` VARCHAR(255) NULL, '
			    . '`title` VARCHAR(255) NULL, '
			    . '`file_name` TEXT NULL, '
			    . '`count` INT(11) NULL , '	
			    . '`status` TINYINT(1) NULL DEFAULT 1, '
			    . '`added` INT(11) NULL, '
			    . '`modified` INT(11) NULL, '
			    . 'INDEX (`part_id`, `url`) '
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
	    $data = array();
	    $options = array(); 
	    if ($status) {
		$options = array('status' => $status);
	    }
	    $this->db->where($options,1);
	    $this->db->from($this->table);
	    $data = $this->db->count_all_results();
	    return $data;
	}
	
	public function getImage($id = null){
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
	
	public function getAllImage($admin=null){
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
	
	public function setImage($object=null){

	    // Set Image data
	    $data = array(	
		    'part_id'   => $object['part_id'],
		    'url'	=> $object['url'],
		    'title'	=> $object['title'],
		    'count'	=> $object['count'],
		    'status'    => $object['status'],
		    'added'	=> time(),	
		    'modified'  => $object['status']
	    );

	    // Insert Image data
	    $this->db->insert($this->table, $data);

	    // Return last insert id primary
	    $insert_id = $this->db->insert_id();

	    // Return last insert id primary
	    return $insert_id;
		
	}	
	
	// Delete Participant
	public function deleteImage($id) {
		
	    // Check Participant id
	    $this->db->where('id', $id);

	    // Delete Participant form database
	    return $this->db->delete($this->table);		
	}	
        
    /*** Additional Function - Start ***/
    public function get_upload_type($part_id='',$type='') {
		$data = array();

        $this->db->where('part_id',$part_id);
        $this->db->where('type',$type);  

        $Q = $this->db->get('participant_images');
        
        if ($Q->num_rows() > 0){
            $data = $Q->result_object();
        }

        $Q->free_result();
        return $data;
	}
	
    public function get_all_gallery ($part_id, $limit = 0, $start = 0) {
        $data = array();

        $this->db->where('part_id',$part_id);
        //$this->db->where('status',1);        
        $this->db->order_by('id','desc');

        $Q = $this->db->get('participant_images');
        
        if ($Q->num_rows() > 0){
            $data = $Q->result_object();
        }

        $Q->free_result();
        return $data;   
    }

	public function get_user_gallery ($part_id, $limit = 0, $start = 0) {
        $data = array();

        $this->db->where('part_id',$part_id);
        $this->db->where('status',1);        
		$this->db->order_by('id','desc');

        $this->db->limit($limit, $start);
        
		$Q = $this->db->get('participant_images');
        
        if ($Q->num_rows() > 0){
			$data = $Q->result_object();
		}

		$Q->free_result();
		return $data;	
	}
	
	public function get_all_images ($limit = 0, $start = 0, $order=array(), $search='', $column=array(), $status='') {
		$data = array();
        
        if ($search) {       
            $this->db->like('name', $search); 
        } 
        if ($status) {
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

		$Q = $this->db->get('participant_images');
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
		if ($status) {
			$this->db->where('status',$status);
        }
        $this->db->from('participant_images');
        return $this->db->count_all_results();
    }

    public function get_count_user_images ($part_id=0) {
        $this->db->where('part_id',$part_id);
        $this->db->where('status', 1);
        $this->db->from('participant_images');
        return $this->db->count_all_results();
    }
	
    public function get_image($image_id='',$part_id='') {
        $data = array();
        $this->db->where('id',$image_id);
        //$this->db->where('part_id',$part_id);        
        $Q = $this->db->get('participant_images');
        if ($Q->num_rows() > 0){
            foreach ($Q->result_object() as $row)
            $data = $row;
        }
        $Q->free_result();
        return $data;   
    }

    public function insert_image($image) {
        $this->db->insert('participant_images', $image);
        return $this->db->insert_id();
    }
    
    /*** Additional Function - End ***/
    
}
