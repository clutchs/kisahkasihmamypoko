<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends Public_Controller {

    // Class constructor
	public function __construct() {
		parent::__construct();
		
        // Load config for controller
        $this->load->config('admin/admin');
        
        // Load CAPTCHA model
		$this->load->model('Captcha');

        // Load Region models
        $this->load->model('region/Provinces');
        $this->load->model('region/Suburbans');
        $this->load->model('region/Urbandistricts');
        $this->load->model('region/Districts');     

        // Load email library
        $this->load->library('email');

        // Participant Data findout from where
        $this->findout = array(
            'Facebook MamyPoko Indonesia',
            'Brosur',
            'Lihat di Pasar',
            'Lihat di Supermarket \\ Hypermarket',
            'Teman',
            'Iklan di Facebook',
            'Tabloid',
            'TV',
            'SPG'
        );
		
		// Check if session was made 
		if ($this->participant) {
		
			// Set temporary data
			$this->_participant = $this->Participants->getParticipant($this->participant->id);
			
			// Unset data from session
			unset($this->participant);	
			
			// Set new data and to session
			$this->participant = $this->_participant;
			$this->session->set_userdata('participant',$this->participant);
			
		}
		
	}
    
	public function index() { 

		if ($this->participant->status == 1) {
				
			// Set site title page with module menu
			$data['page_title'] = 'Account Profile';
            
            // Set main template
            $data['main']    = $this->mobile.'account_profile';
			
			// Load template
            $this->load->view('template/public/template', $this->load->vars($data));
            
        } else if ($this->participant && $this->participant->status == 0) {
                        
            // Set main template
            $this->register();
			
        } else if(!$this->participant || $this->participant->verify !== '') {

			// Set to login via hauth
            //$message = "popupCenter('".base_url('hauth/login/Facebook')."', 'Facebook',480,520);";
            
            // Set flash to message user
            //$this->session->set_flashdata('inline_js', $message);
			$this->account_approval();
            
        } else {

            // Set main template
			$this->account_approval();
        }
        
    }
    
	
	public function account_approval() {
		
		// Set main template
		$data['main']    = $this->mobile.'account_approval';
		
		// Set site title page with module menu
        $data['page_title'] = 'Account Profile';

        // Load admin template
        $this->load->view('template/public/template', $this->load->vars($data));
	
	}
	
    public function register() {
        
        // Default data setup
        $fields	= array(
                        'fullname'       => '',
                        'email_register' => '',
                        'id_number'      => '',
                        
                        'address'       => '',
                        'province'      => '',
                        'urbandistrict' => '',
                        'suburban'      => '',
                        'zipcode'       => '',
                        
						'image_temp'     => '',
            
                        'phone_number'   => '',
                        'phone_home'     => '',
                        
                        'baby_name'     => '',
                        'baby_birthday' => '',
                        
                        'about'          => '',
                        'findout'        => '',
                        
                        'agreement'      => '',
                        'captcha'        => '');

        $errors	= $fields;
        
        $this->form_validation->set_error_delimiters('<p><div class="text-info"><span class="fa fa-warning text-danger"></span>&nbsp;&nbsp;<strong>', '</strong></div></p>');
        
        $this->form_validation->set_rules('fullname', 'Nama Lengkap Mamy', 'trim|required|min_length[5]|max_length[42]|xss_clean');
		//$this->form_validation->set_rules('email_register', 'Email','trim|valid_email|required|max_length[55]|callback_match_email|xss_clean');
        $this->form_validation->set_rules('email_register', 'Email','trim|valid_email|required|max_length[72]|xss_clean');
        $this->form_validation->set_rules('id_number', 'No. KTP','trim|required|max_length[84]|xss_clean');
        $this->form_validation->set_rules('image_temp', 'Foto','trim|required|max_length[84]|xss_clean');
        
        $this->form_validation->set_rules('phone_number', 'No. HP','trim|required|is_numeric|xss_clean|max_length[42]');
        $this->form_validation->set_rules('phone_home', 'No. Tlp','trim|is_numeric|xss_clean|max_length[42]');
        
        $this->form_validation->set_rules('baby_name', 'Nama Baby','trim|required|max_length[72]|xss_clean');
        $this->form_validation->set_rules('baby_birthday', 'Tanggal Lahir Baby','trim|required|max_length[55]|xss_clean');
        
        $this->form_validation->set_rules('address', 'Alamat','trim|required|xss_clean|max_length[350]');                
        $this->form_validation->set_rules('province', 'Propinsi','trim|required');	
        $this->form_validation->set_rules('urbandistrict', 'Kabupaten','trim|required');	
        $this->form_validation->set_rules('suburban', 'Kecamatan','trim|required');	
        $this->form_validation->set_rules('zipcode', 'Kode Pos','trim|required|is_numeric');	
        $this->form_validation->set_rules('findout', 'Tahu activity ini','trim|required');	
        
        $this->form_validation->set_rules('about', 'Cerita Momy','trim|required|xss_clean|max_length[2500]');
        $this->form_validation->set_rules('agreement', 'Persetujuan','trim|required|xss_clean|max_length[1]');
        $this->form_validation->set_rules('captcha', 'Kode Captcha','trim|required|xss_clean|callback_match_captcha');
		
        // Check if post is requested
        if ($this->input->server('REQUEST_METHOD') == 'POST') {			

		    // Validation form checks
		    if ($this->form_validation->run() === FALSE)
		    {

				// Set error fields
				$error = array();
				foreach(array_keys($fields) as $error) {
					$errors[$error] = form_error($error);
				}

				// Set previous post merge to default
				$fields = array_merge($fields, $this->input->post());
				
				if ($this->input->is_ajax_request()) {

					// Send fields and errors data
					$result['fields'] = $fields;
					$result['errors'] = $errors;

				}

		    } else {

                $object = array();
                
				// Main Hauth Identity
                $object['identity']        = 'Facebook';
                // Momy's data
                $object['name']            = $this->input->get_post('fullname', true);
                $object['email']           = $this->input->get_post('email_register', true);
				$object['id_number']       = $this->input->get_post('id_number', true);
                
				$object['address']         = $this->input->get_post('address', true);
                $object['province']        = $this->input->get_post('province', true);		
                $object['urbandistrict']   = $this->input->get_post('urbandistrict', true);
                $object['suburban']        = $this->input->get_post('suburban', true);
                $object['zipcode']         = $this->input->get_post('zipcode', true);
                $object['findout']         = $this->input->get_post('findout', true);                
                
                $object['file_name']       = $this->input->get_post('image_temp', true);
                // Phones
				$object['phone_number']    = $this->input->get_post('phone_number', true);
                $object['phone_home']      = $this->input->get_post('phone_home', true);
                // Baby's data
                $object['baby_name']       = $this->input->get_post('baby_name', true);
                $object['baby_birthday']   = $this->input->get_post('baby_birthday', true);
                // Momy and child stories
                $object['about']           = $this->input->get_post('about', true);                
				// Status
				$object['verify']          = $this->input->get_post('captcha', true);
                $object['status']          = '1';
                $object['completed']       = '0';
				
				// Set participant data
                // $return = $this->Participants->setParticipant($object);
				$return = $this->Participants->updateParticipant($this->participant->id,$object);
				// Update participant session
				$this->session->set_userdata('participant',$this->Participants->getParticipant($return));
				
                if (!empty($return)) {

                    // Data to send to email activation views
                    $message['site_name']       = config_item('developer_name');
                    $message['site_link']       = base_url();
                    $message['name']            = $object['name'];
					$message['baby_name']       = $object['baby_name'];
                    $message['site_copyright']  = $this->Settings->getByParameter('copyright')->value;
                    //$message['activation']      = base_url('account/activation?confirm='.base64_encode($object['verify'].'-:-'.$object['email']).'');        
                    
                    // Set email template
                    $email_template = $this->load->view('admin/emails/account_participated',$this->load->vars($message),TRUE);
                    
                    $this->email->from('no-reply-bt@mamypokoindonesia.com');
                    $this->email->to($object['email']);
                    $this->email->reply_to('no-reply-bt@mamypokoindonesia.com');
                    $this->email->subject('Kisah Kasih Mamypoko Indonesia | mamypokoindonesia.com');
                    $this->email->message($email_template);
                    $this->email->send();

                } 

                // Set message
                // $this->session->set_flashdata('message','Terima kasih Mamy <b>'.$object['name'].'</b>');
                    
				if ($this->input->is_ajax_request()) {
                    
					// Send json message
					$result['result']	= 'OK';
					$result['label']	= base_url('account');
                    
				} else {					
                    
                    // Redirect if not ajax
					redirect(base_url());
                    
				}
		    }

	    }
		        
        // Logic Register via Ajax Request
		if ($this->input->is_ajax_request()) {
			
			// Return data esult
			$data['json'] = $result;
			
			// Set json main template
			echo json_encode($result);
			exit;
		}
        
        // Set main template Data for province
        $data['provinces'] = $this->Provinces->getAllProvince();
        
        // Set findout from where data
        $data['findout']  = $this->findout;

        // Captcha data
        $data['captcha'] = $this->Captcha->image();

		// Set error data to view
		$data['errors']  = $errors;
        
        // Post Fields
		$data['fields']	 = $fields;
        
        // Set gender data
        $data['genders'] = config_item('gender');

		// Set main template
		$data['main']    = $this->mobile.'account';
				
		// Set site title page with module menu
		$data['page_title'] = 'Account Register';
		
		// Load admin template
		$this->load->view('template/public/template', $this->load->vars($data));
        
    }
    
       // Participant Dashboard
    public function dashboard() {
        
        // Check if user is already login
        if (!$this->participant) {
            
            // Redirect to account
            redirect(base_url('account'));
            
        }
        
        // Captcha data
        $data['captcha'] = $this->Captcha->image();

        // Get latest conference
		$conference         = $this->Conferences->getConferenceLatest();
        $data['conference'] = $conference;
        
        // Get Participant Conferences
        $data['part_conferences'] = $this->Participants->getConferences($conference->id,$this->participant->id);
        
        // Get Participant Attachments
        $data['part_attachments'] = $this->Attachments->getParticipantAttachment($conference->id,$this->participant->id);
        
        // Set main template
		$data['main'] = $this->participant->completed ? 'dashboard' : 'dashboard_first_time';
				
		// Set site title page with module menu
		$data['page_title'] = 'My Dashboard';
		
		// Load admin template
		$this->load->view('template/public/template', $this->load->vars($data));

    }
    
    // Forgot password method
    public function activation() {
    
        // Get activation code
        $confirm = base64_decode($this->input->get('confirm'));
        $params  = explode("-:-",$confirm);
        
        // Set array for query
        $activation['verify']   = $params[0];
        $activation['email']    = $params[1];
        
        $activated = $this->Participants->getActivation($activation);
        
        if (!empty($activated) && $activated->completed == 0) {
            
            // Unset first for duplication session
            $this->session->unset_userdata('participant');
            
            // Set user data session
            $this->session->set_userdata('participant', $activated);
            
            // Set flash message
            $this->session->set_flashdata('message','Please complete your account profile to continue!');
            
            // Redirect to dashboard
            redirect(base_url('account/dashboard'));
            
        } else {
            
            // Set message
            $this->session->set_flashdata('message','Sorry your account is not listed, please register!');

            // Redirect to user page
            redirect(base_url('account'));
            
        }
        
    }
    
    public function update_account() {
        
        // Default data setup
        $fields	= array(
                        'fullname'       => '',
                        'email'          => '',
                        'id_number'      => '',
                        'phone_number'   => '',
						'phone_home'	 => '',
                        'captcha'        => '');

        $errors	= $fields;
        
        $this->form_validation->set_rules('fullname', 'Nama Mamy', 'trim|required|min_length[5]|max_length[45]|xss_clean');
		$this->form_validation->set_rules('email', 'Email','trim|valid_email|required|max_length[128]|callback_match_email|xss_clean');
        $this->form_validation->set_rules('id_number', 'No. Ktp','trim|xss_clean||required|max_length[45]');
        $this->form_validation->set_rules('phone_number', 'No. Hp','trim|is_numeric|xss_clean|required|max_length[45]');
		$this->form_validation->set_rules('phone_home', 'No. Tlp','trim|is_numeric|xss_clean|required|max_length[45]');
        $this->form_validation->set_rules('captcha', 'Captcha Code','trim|required|xss_clean|callback_match_captcha');
		
        // Check if post is requested
        if ($this->input->server('REQUEST_METHOD') == 'POST') {			

		    // Validation form checks
		    if ($this->form_validation->run() === FALSE)
		    {

				// Set error fields
				$error = array();
				foreach(array_keys($fields) as $error) {
					$errors[$error] = form_error($error);
				}

				// Set previous post merge to default
				$fields = array_merge($fields, $this->input->post());
				
				if ($this->input->is_ajax_request()) {

					// Send fields and errors data
					//$result['fields'] = $fields;
					//$result['errors'] = $errors;
                    
                    // Send errors to JSON text
                    $result['result']['code'] = 0;
                    $result['result']['text'] = $errors;
                    // $result['result']['text'] = validation_errors();
				}
                                
		    } else {

                $object = array();
				
                $object['email']           = $this->input->get_post('email', true);
				$object['name']            = $this->input->get_post('fullname', true);
                //$object['gender']        = $this->input->get_post('gender', true);
				$object['phone_number']    = $this->input->get_post('phone_number', true);
				$object['phone_home']      = $this->input->get_post('phone_home', true);
				$object['verify']          = $this->input->get_post('captcha', true);
                $object['status']          = '0';
                $object['completed']       = '0';
				
                $return = $this->Participants->setParticipant($object);
				
                if (!empty($return)) {

                    // Data to send to email activation views
                    $message['site_name']       = config_item('developer_name');
                    $message['site_link']       = base_url();
                    $message['name']            = $activated->name;
                    $message['site_copyright']  = $this->Settings->getByParameter('copyright')->value;
                    $message['conference']      = $this->Conferences->getConferenceLatest();
                    $message['activation']      = base_url('account/activation?confirm='.base64_encode($object['verify'].'-:-'.$object['email']).'');        

                    // Set email template
                    $email_template = $this->load->view('admin/emails/account_is_active',$this->load->vars($message),TRUE);

                    $this->email->from('noreply@simplewavenet.com');
                    $this->email->to($activated->email);
                    $this->email->reply_to('noreply@simplewavenet.com');
                    $this->email->subject('Account is activated | FISIP UIN Jakarta');
                    $this->email->message($email_template);
                    $this->email->send();
        

                } 

                // Set message
                $this->session->set_flashdata('message','Please check your Email : <b>'.$object['email'].'</b> for the Account Activation!');
                    
				if ($this->input->is_ajax_request()) {
					// Send json message
					$result['result']	= 'OK';
					$result['label']	= base_url('upload');
				} else {					
                    // Redirect if not ajax
					redirect(base_url());
				}
		    }

	    }
		
        // Account is not existed
        // $result['result']['code'] = 0;
        // $result['result']['text'] = 'Email or User not found';			

        // Captcha data
        // $data['captcha'] = $this->Captcha->image();

		// Set error data to view
		$data['errors']  = $errors;
        
        // Post Fields
		$data['fields']	 = $fields;
        
        // Set gender data
        $data['genders'] = config_item('gender');

		// Set main template
		$data['main']    = 'json';
		
        // Set json data return
		$data['json'] = $result;	
        
		$this->load->view('json', $this->load->vars($data));				

    }
    
    // Forgot password method
    public function forgot_password() {
        
        // Decode email link
        $email = base64_decode($this->input->get('confirm'));
        
        // Check email link
        $participant = $this->Participants->getByEmail($email);
        
        //print_r($participant);
        
        //exit;
       
        // Default data setup
        $fields	= array(
                        'email'        	=> '',
						'password'      => '',
                        );

        $errors	= $fields;
        $this->form_validation->set_rules('email', 'Email','trim|valid_email|required|min_length[5]|max_length[64]|xss_clean');
        $this->form_validation->set_rules('password', 'Password','trim|required|xss_clean');	
        
        // Check if post is requested
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {			

		    // Validation form checks
		    if ($this->form_validation->run() === FALSE)
		    {

				// Set error fields
				$error = array();
				foreach(array_keys($fields) as $error) {
					$errors[$error] = form_error($error);
				}

				// Set previous post merge to default
				$fields = array_merge($fields, $this->input->post());
				
				if ($this->input->is_ajax_request()) {

					// Send fields and errors data
					$result['fields'] = $fields;
					$result['errors'] = $errors;

				}

		    } else {

                $fields = array();
				
				$fields['email']		= $this->input->get_post('email', true);
				$fields['password']		= $this->input->get_post('password', true);
				
                $return = $this->Participants->login($fields);
				
                if ($return) {
                    
                    // Unset variables 
                    unset($return->password);
                    
                    // Set participant 
                    $this->session->set_userdata('participant', $return);
                    
                }
                
                //$this->config->set_item('user_id', $user_id);

				//$this->session->set_userdata('user_id', $this->user_model->encode($user_id));

				if ($this->input->is_ajax_request()) {
					// Send json message
					$result['result']	= 'OK';
					$result['label']	= base_url('upload');
				} else {					
					// Redirect if not ajax
					redirect(base_url('account/dashboard'));
				}
		    }

	    }

        // Get latest conference
		$conference         = $this->Conferences->getConferenceLatest();
        $data['conference'] = $conference;
        
        // Get Participant Conferences
        $data['part_conferences'] = $this->Participants->getConferences($conference->id,$this->participant->id);
        
		// Set main template
		$data['main'] = 'forgot_password';
				
		// Set site title page with module menu
		$data['page_title'] = 'Forgot Password';
		
		// Load admin template
		$this->load->view('template/public/template', $this->load->vars($data));
        
    }
    
    public function get_area ($param=null) {
		
		$ids = $this->input->post('id');
		
		if($param == 'province') {
            
            $result['result'] = $this->Urbandistricts->getByProvince($ids);
            $result['bindto'] = 'urbandistrict';
            $result['label'] = 'KABUPATEN';
            
		} else if($param == 'urbandistrict') {
            
            $result['result'] = $this->Suburbans->getByUrban($ids);
            $result['bindto'] = 'suburban';
            $result['label'] = 'KECAMATAN';
            
		} else if($param == 'suburban') {
            
            $result['result'] = $this->Districts->getBySubUrban($ids);
            
		}
				
		// Return data esult
		$data['json'] = $result;

		// Load data into view		
		$this->load->view('json', $this->load->vars($data));	
		
	}
    
    // Redirect for social login 
    public function redirect_login ($account = '') {
        
        // Redirect from website
        redirect('hauth/login/'.$account);
        
    }
    
    // Reload Captcha to the view
    public function reload_captcha() {

		// Send image to display Captcha
		$captcha = $this->Captcha->image();

		// Echo captcha Image
		echo $captcha['image'];
		exit;

    }
    
    public function logout() {
		
	    // Set user's last login 
	    $this->Participants->setLastLogin($this->participant->id);

	    // Destroy user session		
	    $this->session->unset_userdata('participant');

	    // Redirect admin to refresh
	    redirect(base_url());

    }
    
    // -------------- CALLBACK METHODS -------------- //

    // Match Email post to Database
    public function match_email($email) {		

		// Check email if empty
		if ($email == '') {
            $this->form_validation->set_message('match_email', 'The %s can not be empty.');
            return false;
		}
		// Check email if match
		else if ($this->Participants->getEmail($email) == 1) {
            $this->form_validation->set_message('match_email', 'The %s is already taken. <a href="'.base_url('account/forgot_password/?confirm='.base64_encode($email)).'" class="forgot-password">Forgot Password</a> Maybe ?');			
            return false;
		} else {
            return true;
		} 

    }

    // Match Captcha post to Database
    public function match_captcha($captcha) {		
		
        // Check captcha if empty
		if ($captcha == '') {
            $this->form_validation->set_message('match_captcha', 'The %s code can not be empty.');
            return false;
		}
		// Check captcha if match
		else if (!$this->Captcha->match($captcha)) {
            $this->form_validation->set_message('match_captcha', 'The %s code not match.');
            return false;
        } else {
            return true;
        }
    }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */