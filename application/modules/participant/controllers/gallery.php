<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Admin_Controller {

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
            // Set Query
            $crud->where('status',1);
            $crud->where('file_name !=','');
            // Set tables
            $crud->set_table('tbl_participants');
            // Set CRUD subject
            $crud->set_subject('Gallery');                            
            // Set column
			$crud->columns('name','baby_name','file_name', 'about','modified','join_date','status');
			
            $crud->fields('name','baby_name','file_name', 'about','status');
			$crud->field_type('status','dropdown',array('0' => 'Inactive','1' => 'Active','2' => 'Completed')); 
			$crud->field_type('about','text');
			$crud->field_type('join_date','text');
			$crud->field_type('modified','text');

			// Set column display 
            $crud->display_as('name','Mamy Name');
			
			$crud->callback_column('added',array($this,'_callback_time'));
			//$crud->callback_column('modified',array($this,'_callback_time'));
			//$crud->callback_column('join_date',array($this,'_callback_time'));  
			$crud->callback_column('file_name',array($this,'_callback_filename'));
            
			$state = $crud->getState();
			
			if ($state == 'export')
			{
				//Do your awesome coding here.
				$crud->callback_column('file_name',array($this,'_callback_filename_url'));				
			} 
			else if ($state == 'edit')
			{
				//Do your awesome coding here.
				$crud->callback_field('modified',array($this,'_callback_time_modified'));				
			}
			
            // Set upload field
            $crud->set_field_upload('file_name','uploads/gallery');
            
			// $crud->set_field_upload('file_name','uploads/gallery');
			// $crud->callback_column('modified',array($this,'_callback_time'));  
			// Sets the required fields of add and edit fields
			// $crud->required_fields('subject','name','text','status'); 
            // Set upload field
            // $crud->set_field_upload('file_name','uploads/pages');
			// $crud->unset_edit();            
			$crud->unset_add();
			$crud->unset_delete();
			$this->load($crud, 'gallery');
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function _callback_time ($value, $row) {
		return empty($value) ? '-' : date('Y-m-d h:m:s',$value);
    }
    
    public function _callback_time_added ($value, $row) {
		$time = time();
		return '<input type="hidden" maxlength="50" value="'.$time.'" name="added">';
    }
    
    public function _callback_time_modified ($value, $row) {		
		$time = time();
		return '<input type="hidden" maxlength="50" value="'.$time.'" name="modified">'.date('D, d-M-Y',$time);
    }
	
	public function _callback_filename($value, $row) {
		$row->file_name = strip_tags($row->file_name);
        return '<div class="text-center"><a href="'.base_url('uploads/gallery/'.$row->file_name).'" class="image-thumbnail"><img height="110px" src="'.base_url('uploads/gallery/'.$row->file_name).'"/></a></div>';
    }
	
	public function _callback_filename_url($value, $row) {
		return ($row->file_name) ? base_url('uploads/users/'.$row->file_name) : '-';
	}
	
	public function _send_email() {
	
		$this->load->library('email');

		$subject = 'Selamat anda';
		$message = 'Hey <b>'.$user->username.'</b>, this is your new password: <b>'.$password.'</b>';
		
		$this->email->from('noreply');
		$this->email->to($user->email);
		$this->email->subject('Your new password');
		$this->email->message('Hey <b>'.$user->username.'</b>, this is your new password: <b>'.$password.'</b>');

		//$this->email->send();
		
	}
    
    private function load($crud, $nav) {
        $output = $crud->render();
        $output->nav = $nav;
        if ($crud->getState() == 'list') {
            // Set Gallery Title 
            $output->page_title = 'Gallery Listings';
            // Set Main Template
            $output->main       = 'template/admin/metronix';
            // Set Primary Template
            $this->load->view('template/admin/template.php', $output);
        } else {
            $this->load->view('template/admin/popup.php', $output);
        }    
    }
}
