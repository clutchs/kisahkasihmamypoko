<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PageMenu extends Admin_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -  
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
	
    public function __construct() {
            parent::__construct();

            // Load Pages model
            $this->load->model('Pages');

            // Load PageMenu model
            $this->load->model('PageMenus');

            // Load Grocery CRUD
            $this->load->library('grocery_CRUD');
      
    }
	
    public function index() {
        try {
	    // Set our Grocery CRUD
            $crud = new grocery_CRUD();
            // Set tables
            $crud->set_table('tbl_page_menus');
            // Set CRUD subject
            $crud->set_subject('Page Menu');                            
            // The fields that user will see on add and edit form
			$crud->fields('name','title','synopsis','description','status','added','modified');
            // Set column
            $crud->columns('name','title','position','description','status');	
            // Changes the default field type
			// $crud->field_type('url', 'hidden');
			$crud->field_type('added', 'hidden');
			$crud->field_type('modified', 'hidden');
			// Unsets the fields at the add form.
			$crud->unset_add_fields('parent_id','sub_level','has_child','user_id','order','count','is_system','added','modified');
			// Unsets the fields at the edit form.
			$crud->unset_edit_fields('parent_id','sub_level','has_child','user_id','order','count','is_system','added','modified');
			// Set custom field display for position
            $crud->field_type('position','dropdown',array('top'=>'Top','bottom'=>'Bottom'));  
			// Sets the required fields of add and edit fields
			$crud->required_fields('subject','name','position','status');   
            // This callback escapes the default auto column output of the field name at the add form
			$crud->callback_column('added',array($this,'_callback_time'));
			$crud->callback_column('modified',array($this,'_callback_time')); 
            // Set upload field
            $crud->set_field_upload('media','uploads/pages');
            $this->load($crud, 'page');
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
    
    private function load($crud, $nav) {
        $output = $crud->render();
        $output->nav = $nav;
        if ($crud->getState() == 'list') {
            // Set Page Title 
            $output->page_title = 'Page Menu Listings';
            // Set Main Template
            $output->main       = 'template/admin/metronix';
            // Set Primary Template
            $this->load->view('template/admin/template.php', $output);
        } else {
            $this->load->view('template/admin/popup.php', $output);
        }    
    }
}

/* End of file page.php */
/* Location: ./application/module/page/controllers/pagemenu.php */