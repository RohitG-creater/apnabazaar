<?php
class Product_Model extends CI_Model {

    public function Save_Product($data){
        $this->db->insert('tbl_product',$data);
    }

    public function get_product_list(){
        $query = $this->db->get('tbl_product');
        return $query;
    }

    public function get_edit_product($id){
        $this->db->where('ID',$id);
        return $this->db->get('tbl_product')->row();
    }

    public function Update_Product($data,$id){
        $this->db->where('ID',$id);
        $this->db->update('tbl_product',$data);
    }

    public function Delete_Product($id){
        $this->db->where('ID',$id);
        $this->db->delete('tbl_product');
    }
}

?>