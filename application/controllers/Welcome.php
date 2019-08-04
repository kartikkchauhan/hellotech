<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function computerSupport()
	{
		$this->load->view('computersupport');
	}
    public function printer()
    {
        $this->load->view('printer');
    }
    public function networking()
    {
        $this->load->view('networking');
    }
    public function hardware()
    {
        $this->load->view('hardwares');
    }
    public function signup()
    {
        $this->load->view('signup');
    }
    public function signin()
    {
        $this->load->view('signin');
    }
    public function businessPlans()
    {
        $this->load->view('businessplan');
    }
    public function signup_call()
    {
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $number=$this->input->post('number');

        $this->load->model('userscall_model');
        $id=$this->userscall_model->signup_insert($firstname, $lastname, $email, $password, $number);
        if($id)
        {
            $this->session->set_userdata('user_id',$id);
            return redirect('Usercalls/home');
        }
        else
        {
            echo "Error While Logging you in";
        }
    }
    public function signin_call()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $this->load->model('userscall_model');
        $id=$this->userscall_model->signin_check($email, $password);
        if($id)
        {
            $this->session->set_userdata('user_id',$id);
            return redirect('Usercalls/home');
        }
        else
        {
            echo "Error While Logging you in";
        }
    }

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id'))
        {
            redirect('Usercalls/home');
        }
    }

}
