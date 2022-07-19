<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Jawaban_Pengguna_model');
    }

    public function index()
    {
        $data['title'] = 'Kuisioner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Jawaban_Pengguna_model');

        $this->form_validation->set_rules('kuisioner', 'Kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['kuisioner'] = $this->Jawaban_Pengguna_model->getAllKuisPengguna();
            $data['fakultas'] = $this->Jawaban_Pengguna_model->getAllKuisFakultas();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengguna/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jawaban_Pengguna_model->kirim();
            $this->session->set_flashdata('flash', 'Dikirimkan');
            redirect('pengguna/index');
        }
    }
    
}
