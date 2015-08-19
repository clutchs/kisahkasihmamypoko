<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		
		// Load user
		$this->load->model('Users');
        // Load Participant model
        $this->load->model('participant/Participants');
          		
		// Load session
		$this->load->model('Sessions');
		
		// Load user permission
		$this->load->model('UserGroupPermissions');
		
		// Put session check in constructor
		$data['user'] = $this->session->userdata('user_session');

	}
	
	public function index() {
	    
		// Check if the request via AJAX
		if ($this->input->is_ajax_request()) {
			$this->stat_dashboard();
			return false;
		}
           
		// Load WYSIHTML JS and other JS
		$data['js_files'] = array(
			base_url('assets/admin/plugins/flot/jquery.flot.min.js'),
			base_url('assets/admin/plugins/flot/jquery.flot.resize.min.js'),
			base_url('assets/admin/plugins/flot/jquery.flot.categories.min.js'),
            base_url('assets/admin/plugins/flot/jquery.flot.pie.min.js'),            
			//base_url('assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js')
            );
		
		// Load WYSIHTML CSS and Others
		//$data['css_files'] = array(base_url('assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css'));
		
		// Load Text Editor execution
		$data['js_inline'] = "Index.initCharts(); Charts.initPieCharts(); // Initialize Graph and Chart";
		
        // Total users count
	    $data['tusers']			= $this->Users->getCount(1);
	    
	    // Total participant count
	    $data['tparticipant']   = $this->Participants->getCount();
	    
	    // Total image count
	    $data['timages']	    = $this->Participants->getCountImages(1);		
		
		// Total user unregistered count
	    $data['ta_users']	    = $this->Participants->getNotRegistered(1);
        
		// Set class name to view
	    $data['class_name']		= $this->_class_name;
	    
	    // Set module with URL request 
		$data['module_title']	= $this->module;

	    // Set page title
	    $data['title']	= "Dashboard Home";
	    
	    // Set main template
	    $data['main']	= 'admin/dashboard';
	    
		// Set admin title page with module menu
		$data['page_title'] = $this->module_menu;

	    //$this->load->view('template/dashboard');
	    $this->load->view('template/admin/template', $this->load->vars($data));
		
	}
        
public function stat_dashboard() {
            
            // Check if the request via AJAX
            if (!$this->input->is_ajax_request()) {
                exit('No direct script access allowed');		
            }
			

			// Check range post
			$range_post = $this->input->post('reportrange');
			$range		= explode(" to ", $range_post);
			
			// User login stats
			$login_stats = $this->Users->getLoginStats();
            if(!empty($login_stats)) {
                    
                $temp_login = array();
                foreach ($login_stats as $login) {
                    $temp_login[] = array($login->last_login,$login->total_login);
                }
                $result['result']['stats_login'] = $temp_login;

            }
			
			// Participant Join stats
			$join_stats = $this->Participants->getJoinStats($range);
			
            if(!empty($join_stats)) {
                    
                $temp_join = array();
                foreach ($join_stats as $join) {
                    $temp_join[] = array($join->join_date,$join->total_join);
                }
                $result['result']['stats_join'] = $temp_join;

            }

            // Participant Submitted stats
			$submit_stats = $this->Participants->getSubmitStats($range);
			
            if(!empty($submit_stats)) {
                    
                $temp_submit = array();
                foreach ($submit_stats as $submit) {
                    $temp_submit[] = array($submit->join_date,$submit->total_join);
                }
                $result['result']['stats_submit'] = $temp_submit;

            }
            
            /*
            // Sender statistics Find Out stats
			$findout_stats = $this->Participants->getFindOutStats();
			
            if(!empty($findout_stats)) {

				$temp_findout = '';
				foreach ( $findout_stats as $findout) {
					$temp_findout['Facebook MamyPoko Indonesia'] = $findout->facebook;
					$temp_findout['Brosur'] = $findout->brosur;
                    $temp_findout['Lihat di Pasar'] = $findout->pasar;
					$temp_findout['Lihat di Supermarket \\ Hypermarket'] = $findout->supermarket;
					$temp_findout['Teman'] = $findout->teman;
					$temp_findout['Iklan di Facebook'] = $findout->facebook_ads;
					$temp_findout['Tabloid'] = $findout->tabloid;
					$temp_findout['TV'] = $findout->tv;
                    $temp_findout['SPG'] = $findout->spg;					
				}
				$result['result']['findout_stats'] = $temp_findout;
            }
            */
            
            // Sender statistics findout stats
			$findout_stats = $this->Participants->getFindOutStats2();
			
            if(!empty($findout_stats)) {
				  	 
				$temp_findout  = array();
				foreach ($findout_stats as $findout) {
					$temp_findout[$findout->findout] = $findout->sum;
				}
				$result['result']['findout_stats'] = $temp_findout;

            } 
            
            // Return data esult
            $data['json'] = $result;

            // Load data into view		
            $this->load->view('json', $this->load->vars($data));
	    
	}
}
