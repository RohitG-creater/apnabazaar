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

    public function Delete_Category($id){
        $this->db->where('ID',$id);
        $this->db->delete('tbl_category');
    }
    
}

?>