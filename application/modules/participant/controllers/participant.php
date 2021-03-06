<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Participant extends Admin_Controller {
    
    public function __construct() {
            parent::__construct();

            // Load Participant model
            $this->load->model('participant/Participants');
          
            // Load Grocery CRUD
            $this->load->library('grocery_CRUD');
      
    }
	
    public function index() {
        try {
            
            // Set our Grocery CRUD
            $crud = new grocery_CRUD();
            // Set where conditions
            $crud->where('file_name !=','');
            $crud->where('status','1');
            // Set tables
            $crud->set_table('tbl_participants');
             // Set table relation
            $crud->set_relation('province','tbl_provinces','name');
            // Set table relation
            $crud->set_relation('urbandistrict','tbl_urban_districts','name');
            // Set table relation
            $crud->set_relation('suburban','tbl_sub_urbans','name');
            // Set CRUD subject
            $crud->set_subject('Participant');                            
            
			// Set column display 
            $crud->display_as('province','Propinsi');
            $crud->display_as('urbandistrict','Kabupaten');
            $crud->display_as('suburban','Kecamatan');
            
			// Set column display 
            $crud->display_as('id_number','Id Number');
			$crud->display_as('file_name','ID Image File');
            $crud->display_as('baby_name','Baby Name');
            $crud->display_as('baby_birthday','Baby Birthday');
            $crud->display_as('findout','Activity From');
            
            // Set column
            $crud->columns('identity','profile_url','photo_url','name','email','id_number','phone_number','phone_home','address','province','urbandistrict','suburban','zipcode','findout','baby_name','baby_birthday','file_name','join_date');
            
			// Set column display 
            $crud->display_as('name','Mamy Name');
            $crud->display_as('identity','Provider');
            
			// This callback escapes the default auto field output of the field name at the edit form
			$crud->callback_edit_field('modified',array($this,'_callback_time_modified'));
            
			// This callback escapes the default auto column output of the field name at the add form
			$crud->callback_column('file_name',array($this,'_callback_filename'));
			$crud->callback_column('added',array($this,'_callback_time'));
			$crud->callback_column('modified',array($this,'_callback_time'));  
			$crud->callback_column('photo_url',array($this,'_callback_pic'));
			$crud->unset_columns('completed');
			
            // Sets the required fields of add and edit fields
			$state = $crud->getState();
			
			if ($state == 'export')
			{
				//Do your awesome coding here.
				$crud->callback_column('file_name',array($this,'_callback_filename_url'));
			} 
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
            $this->load($crud, 'participant');
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function _callback_time ($value, $row) {
		return empty($value) ? '-' : date('D, d-M-Y',$value);
    }
    
    public function _callback_time_added ($value, $row) {
		$time = time();
		return '<input type="hidden" maxlength="50" value="'.$time.'" name="added">';
    }
    
    public function _callback_time_modified ($value, $row) {
		$time = time();
		return '<input type="hidden" maxlength="50" value="'.$time.'" name="modified">';
    }
    	
	public function _callback_filename($value, $row) {
		$row->file_name = strip_tags($row->file_name);
        return $row->file_name ? '<div class="text-center"><a href="'.base_url('uploads/gallery/'.$row->file_name).'" class="image-thumbnail"><img height="110px" src="'.base_url('uploads/gallery/'.$row->file_name).'"/></a></div>' : '-';
    }
    
	public function _callback_filename_url($value, $row) {
		return ($row->file_name) ? base_url('uploads/users/'.$row->file_name) : '-';
	}
	
    public function _callback_pic($value = '', $primary_key = null){
	//print_r($primary_key->fb_id);
	//exit;
        return ($value) ? '<a href="'.$value.'" class="image-thumbnail"><img src="'.$value.'" height="80px"></a>' :'';
	//. '<img src="//graph.facebook.com/'.$primary_key->fb_id.'/picture?type=normal"></a>';
    }
    
    private function load($crud, $nav) {
        $output = $crud->render();
        $output->nav = $nav;
        if ($crud->getState() == 'list') {
            // Set Participant Title 
            $output->page_title = 'Participant Listings';
            // Set Main Template
            $output->main       = 'template/admin/metronix';
            // Set Primary Template
            $this->load->view('template/admin/template.php', $output);
        } else {
            $this->load->view('template/admin/popup.php', $output);
        }    
    }
}
