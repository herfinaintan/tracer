<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Grup Kuisioner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Grup_Model_Fakultas');

        //load library
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/tracer/grup/index';

        $config['num_links'] = 5;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        //ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $this->db->like('nama_grup', $data['keyword']);
        $this->db->from('grup_kuisioner_fakultas');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['grup_kuisioner_fakultas'] = $this->Grup_Model_Fakultas->getGrup($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('grup/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambahfakultas()
    {
        $data['title'] = 'Tambah Grup Kuisioner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Grup_Model_Fakultas');

        $this->form_validation->set_rules('nama_grup', 'Nama', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('grup/tambahfakultas', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Grup_Model_Fakultas->tambahGrupKuisioner();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('grup');
        }
    }

    public function hapusfakultas($id_grup)
    {
        $this->load->model('Grup_Model_Fakultas');
        $this->Grup_Model_Fakultas->hapusGrupKuisioner($id_grup);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('grup');
    }


    public function ubahfakultas($id_grup)
    {
        $this->load->model('Grup_Model_Fakultas');
        $data['title'] = 'Ubah Grup Kuisioner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['grup_kuisioner_fakultas'] = $this->Grup_Model_Fakultas->getGrupById($id_grup);


        $this->form_validation->set_rules('nama_grup', 'Nama', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('grup/ubahfakultas', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Grup_Model_Fakultas->ubahGrupKuisioner();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('grup');
        }
    }
}
