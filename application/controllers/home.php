<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Public_Controller {

	public function __construct() {
		parent::__construct();

		// Load Page related model in admin module
		$this->load->model('page/Pagemenus');
		$this->load->model('page/Pages');

	}

	public function index() {

		// Set site title page with module menu
		$data['page_title'] = $this->config->item('site_name') .' | '. config_item('site_title');

		// Set facebook link data
		$data['facebook']	= $this->Settings->getByParameter('socmed_facebook');

		// Set twitter link data
		$data['twitter']	= $this->Settings->getByParameter('socmed_twitter');

		// Set google link data
		$data['google']		= $this->Settings->getByParameter('socmed_gplus');

		// Set contact email info data
		$data['email_info']	= $this->Settings->getByParameter('email_info');

		// Set contactus address info data
		$data['contactus_address']	= $this->Settings->getByParameter('contactus_address');

		// Set contactus address info data
		$data['participants']	= $this->Participants->getAllParticipantFiles();

		// Set main template
		$data['main'] = $this->mobile.'home';

		// Load site template
		$this->load->view('template/public/template', $this->load->vars($data));

	}

	public function read ($post='') {

		// Set menu data
		//$data['menu']   = $menu;

		// Set menus data
		$menu           = $this->Pagemenus->getMenu($post);

		// Set menu data
		$data['menu']   = $this->Pagemenus->getMenu($post);

		// Set menus data
		$data['pages']  = $this->Pagemenus->getPagesByMenu($post);

		// Set main template
		$data['main']   = $this->mobile.'page';

		// Load admin template
		$this->load->view('template/public/template', $this->load->vars($data));
	}

	public function view ($post='',$page='') {

		// Set menus data
		$menu = $this->Pagemenus->getMenu($post);

		// Set menu data
		$data['menu']   = $this->Pagemenus->getMenu($post);

		// Set menus data
		$data['pages']  = $this->Pagemenus->getPagesByMenu($post);

		// Set pages data
		$data['page']   = $this->Pages->getPageByUrl($page);

		// Set main template
		$data['main']   = $this->mobile.'page_detail';

		// Load admin template
		$this->load->view('template/public/template', $this->load->vars($data));
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
