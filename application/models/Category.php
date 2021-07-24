<?php
class Category extends CI_Model {

    public function get_category_list(){
        $query = $this->db->get('tbl_category');
        return $query;
    }

    public function save_category($data){
        $this->db->insert('tbl_category',$data);
    }

    public function get_edit_category($id){
        $this->db->where('ID',$id);
        return $this->db->get('tbl_category')->row();
    }

    public function Update_Category($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('tbl_category',$data);
    }

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
}

?>