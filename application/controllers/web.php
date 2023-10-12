<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class web extends CI_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data['judul'] = "home";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function blog()
    {
        $data['judul'] = "home";
        $this->load->view('v_header',$data);
        $this->load->view('v_blog',$data);
        $this->load->view('v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = "About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
}
