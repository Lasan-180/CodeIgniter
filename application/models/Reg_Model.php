<?php

class Reg_Model extends CI_Model{
    
    public function saverecords($name,$email,$mobile){
        $query="insert into users values('','$name','$email','$mobile')";
        $this->db->query($query);
    }

    public function displayuser(){
        $query=$this->db->query("select * from users");
        return $query->result();
    }

    public function deleteuser($id){
        $this->db->query("delete from users where id='".$id."'");
    }

    public function displayuserbyid($id){
        $query=$this->db->query("select * from users where id='".$id."'");
        return $query->result();
    }

    public function updateuser($id,$name,$email,$mobile){
        $query=$this->db->query("update users SET name='$name',email='$email',mobile='$mobile' where id= '".$id."'" );
    }

}
    
?>

