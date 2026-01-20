<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->library('form_validation');
    }


	public function index()
    {


        $data['data'] = $this->db->get_where('data', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_ktp', 'No ktp', 'required|trim|is_unique[data_pelamar.no_ktp]', [
            'is_unique' => 'This email has already registered!' ]);
        $this->form_validation->set_rules('tempat_kelahiran', 'Tempat kelahiran', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Date', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Address', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('tahun_kelulusan', 'Year of Graduation', 'required|trim');
        $this->form_validation->set_rules('program_studi', 'study/faculty/university', 'required|trim');
        $this->form_validation->set_rules('pengalaman', 'Experience', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Choose Gender', 'required|trim');
        $this->form_validation->set_rules('position', 'Your Position', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('hiring', $data);
            $this->load->view('footer/layout');
            //input ke database

        } else {

            $data = [
                'no_ktp' => htmlspecialchars($this->input->post('no_ktp', true)),
                'tempat_kelahiran' => htmlspecialchars($this->input->post('tempat_kelahiran', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'tahun_kelulusan' => htmlspecialchars($this->input->post('tahun_kelulusan', true)),
                'program_studi' => htmlspecialchars($this->input->post('program_studi', true)),
                'pengalaman' => htmlspecialchars($this->input->post('pengalaman', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'position' => htmlspecialchars($this->input->post('position', true))
            ];
            $this->db->insert('data_pelamar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <center> Congratulations ! </center>
          </div>');
            redirect('dashboard');
        }
    }

    public function tambah_pelamar()
    {
        $config['upload_path']          = './file/file_lamaran';
        $config['allowed_types']        = 'pdf';
        //$config['encrypt_name']         = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            <center> Upload Failed !</center>
          </div>');
            redirect('Dashboard');
        } else {
            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $full_name             = $this->input->post('full_name', TRUE);
            $no_ktp             = $this->input->post('no_ktp', TRUE);
            $tempat_kelahiran   = $this->input->post('tempat_kelahiran', TRUE);
            $tanggal_lahir      = $this->input->post('tanggal_lahir', TRUE);
            $alamat             = $this->input->post('alamat', TRUE);
            $no_telp            = $this->input->post('no_telp', TRUE);
            $tahun_kelulusan    = $this->input->post('tahun_kelulusan', TRUE);
            $program_studi      = $this->input->post('program_studi', TRUE);
            $pengalaman         = $this->input->post('pengalaman', TRUE);
            $jenis_kelamin      = $this->input->post('jenis_kelamin', TRUE);
            $position           = $this->input->post('position', TRUE);
            //$unit           = $this->input->post('unit', TRUE);


            $data = array(
                'full_name' => $full_name,
                'no_ktp' => $no_ktp,
                'tempat_kelahiran' => $tempat_kelahiran,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
                'no_telp' => $no_telp,
                'tahun_kelulusan' => $tahun_kelulusan,
                'program_studi' => $program_studi,
                'pengalaman' => $pengalaman,
                'foto' => $foto,
                'jenis_kelamin' => $jenis_kelamin,
                'position' => $position,
                //'unit' => $unit,
            );
            $this->db->insert('data_pelamar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <center> Congratulations ! Data Uploaded </center>
          </div>');
            redirect('dashboard');
        }
    }

    public function logout(){
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out !
      </div>');
        redirect('login');
    }
}
