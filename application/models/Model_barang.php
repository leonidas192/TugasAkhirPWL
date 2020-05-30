<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Model_barang extends CI_Model {
                        
public function tampil_data(){
      return $this->db->get('tabel_barang');                          
}
public function tambah_barang($data,$table)
{
      $this->db->insert($table,$data);
}
                                                    
}
                        
/* End of file model_barang.php */
    
                        