<?php

class Registation extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Reg_Model');

    }

    public function savedata(){
        $this->load->view('registation');

        if($this->input->post('save')){
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $mobile=$this->input->post('mobile');
            $this->Reg_Model->saverecords($name,$email,$mobile);
            echo "Records saved successfully";
        }
    }

    public function displaydata(){
        $result['data']=$this->Reg_Model->displayuser();
        $this->load->view('display_users',$result);
    }

    public function deletedata(){
        $id=$this->input->get('id');
        $this->Reg_Model->deleteuser($id);
        //redirect("Registation/displaydata");
        echo "Record deleted successfully";
    }

    public function updatedata(){
        $id=$this->input->get('id');
        $result['data']=$this->Reg_Model->displayuserbyid($id);
        $this->load->view('update_users',$result);

        if($this->input->post('update')){
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $mobile=$this->input->post('mobile');
            $this->Reg_Model->updateuser($id,$name,$email,$mobile);
            echo "Records updated successfully";
        }
    }
}

?>