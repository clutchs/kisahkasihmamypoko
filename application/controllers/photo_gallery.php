<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_Gallery extends Public_Controller {

	public function __construct() {
		
        parent::__construct();
		
        // Load the necessary models
        $this->load->model('participant/Participants');
		
	}
	
	public function index() {
				
        // Check ajax requested method
		if ($this->input->is_ajax_request()) {        	
            echo json_encode(array('url'=>'?sort='.$this->input->get('sort')));
            exit;
        }

        $order = array('id' => 'DESC');
        
        $sort = $this->input->get('sort', true);
		$type = $this->input->get('type', true);
        
        // Sorting method
        if ($sort) {
            if ($sort == 'atoz') {
                $order = array('name' =>'ASC');
            } else if ($sort == 'ztoa') {
                $order = array('name' =>'DESC');
            } else if ($sort == 'scores') {
                $order = array('count' =>'DESC');
            }
        }		
		
		// Completed image activated from admin
		$status = 2;
        $sort 	= $this->input->get('sort');
        $search = $this->input->get('search');
        
        // Site search params
        $url_search 	 = $search ? array('search'=>$search) : array();
        $url_sortby		 = $sort ? array('sort'=>$sort) : array(); 
		$params			 = array_merge($url_search, $url_sortby);
        
        // Load library pagination
        $this->load->library('pagination');
		
        // Pagination options
		$config['base_url'] = base_url('photo_gallery/index/?').http_build_query($params);	
		$config['total_rows'] = $this->Participants->get_count_images($search,$status);
        $config["per_page"] = 12;
		$config['page_query_string'] = TRUE;

        // Pagination html tags
		$config['full_tag_open'] = '<div><ul class="pagination pagination-small pagination-centered vag-font">';
		$config['full_tag_close'] = '</ul></div>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

        // Pagination initialize
		$this->pagination->initialize($config);
		$page = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
		$links = $this->pagination->create_links();
		
		// Set pagination links		
        $data['links'] 		= $links; 

        // Set gallery listing
		$data['gallery'] 	= $this->Participants->get_all_images($config["per_page"], $page, $order, $search, $status);
        
		// Set main template
		$data['main']		= $this->mobile.'gallery';
				
		// Set site title page with module menu
		$data['page_title'] = 'Gallery';
		
		// Load admin template
		$this->load->view('template/public/template', $this->load->vars($data));
		
	}
	
}

/* End of file photo_gallery.php */
/* Location: ./application/controllers/photo_gallery.php */