<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UploadProduct extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->data['pname'] = array(
            'name' => 'pname',
            'id' => 'pname',
            'type' => 'text',
            'value' => $this->form_validation->set_value('name')
        );
        $this->data['pdesc'] = array(
            'name' => 'pdesc',
            'id' => 'pdesc',
            'type' => 'text',
            'value' => $this->form_validation->set_value('name')
        );
        $this->data['ptype'] = array(
            'name' => 'ptype',
            'id' => 'ptype',
            'type' => 'text',
            'value' => $this->form_validation->set_value('name')
        );
        $this->data['pprice'] = array(
            'name' => 'pprice',
            'id' => 'pprice',
            'type' => 'text',
            'value' => $this->form_validation->set_value('name')
        );
        $this->data['pimage'] = array(
            'name' => 'pimage',
            'id' => 'pimage',
            'type' => 'file',
            'value' => $this->form_validation->set_value('name')
        );
        $this->data['submit_create_product'] = array(
            'name' => 'submit_create_product',
            'id' => 'submit_create_product',
            'type' => 'submit',
            'value' => 'Submit',
        );
        $this->data['options'] = array(
            'desktop' => 'Desktop',
            'networking' => 'Networking',
            'printer' => 'Printer',
            'notebook' => 'Notebook',
            'tablet' => 'Tablet',
            'printeraccessories' => 'Printing Accessories',
            'peripheral' => 'Peripheral',
            'software' => 'Software',
            'enterpriseSolution' => 'Enterprise Solution',
            'webdevelopment' => 'Web Development'
        );
        $this->data['products']=array(
            'name' => 'products',
            'class' => 'form-control',
        );

        
        $this->data['SuccessMessage'] = "";
        $this->data['imagedesc'] = "";
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
        $this->load->view('uploadProduct', $this->data);
    }

    public function upload() {
        if ($this->input->post('upload')) {
            $additional_data = array(
                'pname' => $this->input->post('pname'),
                'pdesc' => $this->input->post('pdesc'),
                'pprice' => $this->input->post('pprice'),
                'ptype' => $this->input->post('ptype'),
                'unit_price' => $this->input->post('unit_price'),
                'image' => $this->input->post('')
            );
            $product_name = $this->input->post('name');
            $this->load->model('UploadProduct');
            $this->UploadProduct->up_product();
        }

        $this->load->view('uploadProduct', $this->data);
    }

    function go() {
        if (isset($_POST['submit_create_product'])) {
            /* Create the config for upload library */
            /* (pretty self-explanatory) */
            $config['upload_path'] = './images/'; /* NB! create this dir! */
            $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $ext = 'jpg';
            $imagename = $this->input->post('products').rand(1, 10000000).'.'.$ext;
            $config['file_name'] = $imagename;


            /* Load the upload library */
            $this->load->library('upload', $config);

            /* Create the config for image library */
            /* (pretty self-explanatory) */
            $configThumb = array();
            $configThumb['image_library'] = 'gd2';
            $configThumb['source_image'] = '';
            $configThumb['create_thumb'] = TRUE;
            $configThumb['maintain_ratio'] = TRUE;
            /* Set the height and width or thumbs */
            /* Do not worry - CI is pretty smart in resizing */
            /* It will create the largest thumb that can fit in those dimensions */
            /* Thumbs will be saved in same upload dir but with a _thumb suffix */
            /* e.g. 'image.jpg' thumb would be called 'image_thumb.jpg' */
            $configThumb['width'] = 140;
            $configThumb['height'] = 210;
            /* Load the image library */
            $this->load->library('image_lib');

            /* We have 5 files to upload
             * If you want more - change the 6 below as needed
             */
//      for($i = 1; $i < 6; $i++) {
//        /* Handle the file upload */
            $upload = $this->upload->do_upload('pimage');
            $additional_data = array(
                'pname' => $this->input->post('pname'),
                'pdesc' => $this->input->post('pdesc'),
                'pprice' => $this->input->post('pprice'),
                'ptype' => $this->input->post('products')
            );
            $additional_data['imagename'] = $imagename;
//                $product_name = $this->input->post('name');
            $this->load->model('UploadProductModel');
            $this->UploadProductModel->up_product($additional_data);
//        /* File failed to upload - continue */
//        if($upload === FALSE) continue;
//        /* Get the data about the file */
//        $data = $this->upload->data();
// 
//        $uploadedFiles[$i] = $data;
//        /* If the file is an image - create a thumbnail */
//        if($data['is_image'] == 1) {
//          $configThumb['source_image'] = $data['full_path'];
//          $this->image_lib->initialize($configThumb);
//          $this->image_lib->resize();
//        }
//      }
            if ($upload) {
                $this->data['imagedesc'] = $this->input->post('pimage');
                $this->data['SuccessMessage'] = "Image uploaded Successfully";
                $this->load->view('uploadProduct', $this->data);
            } else {
                $this->data['SuccessMessage'] = "Image upload failed";
                $this->load->view('uploadProduct', $this->data);
            }
        }
        /* And display the form again */
        //$this->load->view('uploadProduct',  $this->data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */