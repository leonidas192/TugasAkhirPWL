<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Data_barang extends CI_Controller {

public function index()
{
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/data_barang');
    $this->load->view('template_admin/footer');            
}
        
}
        
    /* End of file  data_barang.php */
        
                            