<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Model_barang extends CI_Model {
                        
public function tampil_data(){
      return $this->db->get('tabel_barang');                          
}
                                                    
}
                        
/* End of file model_barang.php */
    
                        