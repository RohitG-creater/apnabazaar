<?php
class User_Model extends CI_Model {

    public function Check_Mobile_Exist($mobile){
        $this->db->where('User_Mobile',$mobile);
        return $this->db->get('tbl_user')->row();
    }

    public function Save_Registration($data){
        $this->db->insert('tbl_user',$data);
    }

    public function Check_Account_Exist($mobile,$password){
        $this->db->where('User_Mobile',$mobile);
        $this->db->where('User_Password',$password);
        return $this->db->get('tbl_user')->row();
    }
}

?>