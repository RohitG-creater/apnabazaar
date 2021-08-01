<?php
class Home_Model extends CI_Model {

    public function Get_Women_Product(){
        $this->db->where('Product_Category','Women');
        return $this->db->get('tbl_product');
    }

    public function Get_Men_Product(){
        $this->db->where('Product_Category','Men');
        return $this->db->get('tbl_product');
    }

    public function Get_Single_Product($product_name){
        $this->db->like('Product_Name',$product_name);
        return $this->db->get('tbl_product')->row();
    }

   
}
?>



