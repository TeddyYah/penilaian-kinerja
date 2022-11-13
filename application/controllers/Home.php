<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer', $data);
    }
}

?>