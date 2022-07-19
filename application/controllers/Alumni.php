<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Jawaban_Alumni_model');
    }

    public function index()
    {
        $data['title'] = 'Data Diri';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('alumni/index', $data);
        $this->load->view('templates/footer');
    }

    public function kuisioner()
    {
        $data['title'] = 'Kuisioner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Jawaban_Alumni_model');

        $data['fakultas_id'] = $this->db->get('fakultas')->result_array();
        $data['jurusan_id'] = $this->db->get('jurusan')->result_array();

        $this->form_validation->set_rules('jawaban_A', 'jawaban A', 'required');
        $this->form_validation->set_rules('jawaban_B', 'jawaban B', 'required');
        $this->form_validation->set_rules('jawaban_C', 'jawaban C', 'required');
        $this->form_validation->set_rules('jawab_A', 'jawab A', 'required');
        $this->form_validation->set_rules('jawab_B', 'jawab B', 'required');
        $this->form_validation->set_rules('jawab_C', 'jawab C', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['kuisioner'] = $this->Jawaban_Alumni_model->getAllKuisAlumni();
            $data['fakultas'] = $this->Jawaban_Alumni_model->getAllKuisFakultas();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('alumni/kuisioner', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jawaban_Alumni_model->kirim();
            $this->session->set_flashdata('flash', 'Dikirimkan');
            redirect('alumni/index');
        }
    }
}
