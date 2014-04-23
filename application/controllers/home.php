<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->recent_product();
    }
    public function recent_product() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "Recent Products"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->recent_product();
        $this->load->view('home',  $this->data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */