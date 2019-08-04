<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usercalls extends CI_Controller
{


    public function home()
    {
        $this->load->view('users/index');
    }
    public function computerSupport()
    {
        $this->load->view('users/computersupport');
    }
    public function printer()
    {
        $this->load->view('users/printer');
    }
    public function networking()
    {
        $this->load->view('users/networking');
    }
    public function hardware()
    {
        $this->load->view('users/hardwares');
    }
    public function signin()
    {
        $this->load->view('users/signin');
    }
    public function businessPlans()
    {
        $this->load->view('users/businessplan');
    }
    public function form()
    {
        $this->load->view('users/form');
    }
    public  function  logout()
    {
        $this->session->unset_userdata('variable');
        $this->session->sess_destroy();
        return redirect('Welcome/');
    }

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id'))
        {
            return redirect('Welcome/');
        }
    }

}