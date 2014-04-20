<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Name:  Ion Auth Model
 *
 * Author:  Ben Edmunds
 * 		   ben.edmunds@gmail.com
 * 	  	   @benedmunds
 *
 * Added Awesomeness: Phil Sturgeon
 *
 * Location: http://github.com/benedmunds/CodeIgniter-Ion-Auth
 *
 * Created:  10.01.2009
 * 
 * Last Change: 3.22.13
 *
 * Changelog:
 * * 3-22-13 - Additional entropy added - 52aa456eef8b60ad6754b31fbdcc77bb
 * 
 * Description:  Modified auth system based on redux_auth with extensive customization.  This is basically what Redux Auth 2 should be.
 * Original Author name has been kept but that does not mean that the method has not been modified.
 *
 * Requirements: PHP5 or above
 *
 */
class UploadProductModel extends CI_Model 
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');       
    }
    
    public function up_product($data){
        $this->load->database();
        $this->db->insert('products',$data);
        
    }
    public function get_product($ptype){
        $this->load->database();
        $query = $this->db->query("select * from products where ptype ='".$ptype."'");
        return $query->result();        
    }
    public function recent_product(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM products ORDER BY pid DESC LIMIT 12");
        return $query->result();        
    }
}
