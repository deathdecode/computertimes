<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class GetPageContents extends CI_Controller {

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
        $this->laptop();
    }
    
    public function desktop() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "desktop"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function notebook() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "notebook"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function laptop() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "laptop"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function printer() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "printer"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function tablet() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "tablet"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function software() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "software"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function networking() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "networking"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function printingaccessories() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "printeraccessories"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }
    public function solutions() {
        $this->load->model('uploadproductmodel');
        $this->data['category'] = "solutions"; 
        $this->data['alldata_desktop'] = $this->uploadproductmodel->get_product($this->data['category']);
        $this->load->view('result_view',  $this->data);
    }

    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */