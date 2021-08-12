<?php
    class ImageUpload_Controller extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->helper('url','form');
            $this->load->library('form_validation');
        }

        public function index(){
            $this->load->view('Image_Upload_form');
        }

        public function upload(){
            $config['upload_path']='./upload/';
            $config['allowed_types']='gif|jpg|png';
            $config['max_size']=20000;
            $config['max_width']=15000;
            $config['max_height']=15000;
            
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('profile_pic')){
                $error=array('error'=>$this->upload->display_errors());
            }
            else{
                $data=array('image_metadata'=>$this->upload->data());
                $this->load->view('ImageUpload_suceess',$data);
            }
        }
    }

?>

