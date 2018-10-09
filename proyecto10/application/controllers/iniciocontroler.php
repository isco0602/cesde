<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class iniciocontroler extends CI_Controller{
    public function inicio(){
         $this->load->view('layous/headerview');
	 $this->load->view('iniciovistas');
         $this->load->view('layous/footerview');
    }
    
    public function principal (){
        $this->load->view('layous/headerview');
        $this->load->view('principal');
        $this->load->view('layous/footerview'); 
    }

    public function registro(){
        $this->load->view('layous/headerview');
	$this->load->view('registro');
        $this->load->view('layous/footerview');
        
    }
}
