<?php
    class Hello extends CI_Controller
{
    public function index(){
        echo "hello world!";
    }
    public function new(){
        echo "Name : V.D.L.W Vithanage";
       
    }
    public function indexno(){
        echo "index : 19001802";
    }
    public function about(){
        $this->load->view('views_about');
    }
}
?>

