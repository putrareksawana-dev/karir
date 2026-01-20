<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

	public function index()
	{

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
		$this->load->view('home');
        $this->load->view('footer/layout');
        
        } else {
        //validasi sukses
        $this->_login();
        }   
    }

    private function _login()
    {
        $email  = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('data', ['email' => $email])->row_array();

        //user aktif
        if ($user) {
            //jika user aktif
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password wrong!
          </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username is not registered!
          </div>');
            redirect('login');
        }
    }
   

    public function register()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[data.email]', [
            'is_unique' => 'This email has already been registered!'
        ]);
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|is_unique[data.phone]', [
            'is_unique' => 'This phone number has already been registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password is too short!'
        ]);
    
        if ($this->form_validation->run() == false) {   
		$this->load->view('daftar');
        $this->load->view('footer/layout');
    } else {
        // Input ke database
        $data = [
            'email' => htmlspecialchars($this->input->post('email', true)),
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];
        $this->db->insert('data', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created
          </div>');

        redirect('Page');
        
	}
}

    public function test()
	{
		$this->load->view('daftar');
        $this->load->view('footer/layout');
        
	}
}
