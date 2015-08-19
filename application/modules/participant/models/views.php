<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Model Class Object for Views
class Views Extends CI_Model {
    
	// Table name for this model
	protected $table = 'participant_views';
	
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
			    . '`view_participant_id` INT(11) UNSIGNED NULL, '
			    . '`participant_id` INT(11) UNSIGNED NULL, '
			    . '`status` TINYINT(1) NULL DEFAULT 1, '
			    . '`added` INT(11) NULL, '
			    . '`modified` INT(11) NULL, '
			    . 'INDEX (`participant_id`) '
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
	
	public function getView($id = null){
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
	
	public function getAllView($admin=null){
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
	
	public function setView($object=null){

	    // Set View data
	    $data = array(	
		    'participant_id'   => $object['participant_id'],
		    'url'	=> $object['url'],
		    'title'	=> $object['title'],
		    'count'	=> $object['count'],
		    'status'    => $object['status'],
		    'added'	=> time(),	
		    'modified'  => $object['status']
	    );

	    // Insert View data
	    $this->db->insert($this->table, $data);

	    // Return last insert id primary
	    $insert_id = $this->db->insert_id();

	    // Return last insert id primary
	    return $insert_id;
		
	}	
	
	// Delete Participant
	public function deleteView($id) {
		
	    // Check Participant id
	    $this->db->where('id', $id);

	    // Delete Participant form database
	    return $this->db->delete($this->table);		
	}	
        
    /*** Additional Function - Start ***/
	public function get_all_views ($limit = 0, $start = 0, $order=array(), $search='', $column=array(), $status='') {
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

		$Q = $this->db->get('participant_views');
		if ($Q->num_rows() > 0){
			$data = $Q->result_object();
		}
		
        $Q->free_result();
        
		//print_r($this->db->last_query());
		
		return $data;	
	}

    public function get_count_views ($search='',$column=array(),$status='') {
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
        $this->db->from('participant_views');
        return $this->db->count_all_results();
    }

    public function get_count_user_views ($participant_id=0) {
        $this->db->where('participant_id',$participant_id);
        $this->db->where('status', 1);
        $this->db->from('participant_views');
        return $this->db->count_all_results();
    }
	
    public function get_view($view_id='',$participant_id='') {
        $data = array();
        $this->db->where('id',$view_id);
        //$this->db->where('participant_id',$participant_id);        
        $Q = $this->db->get('participant_views');
        if ($Q->num_rows() > 0){
            foreach ($Q->result_object() as $row)
            $data = $row;
        }
        $Q->free_result();
        return $data;   
    }

    public function insert_view($view) {
        $this->db->insert('participant_views', $view);
        return $this->db->insert_id();
    }
    
    /*** Additional Function - End ***/
    
}
