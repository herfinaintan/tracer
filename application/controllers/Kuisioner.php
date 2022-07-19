<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuisioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kuisioner_Alumni_model');
    }

    public function index()
    {
        $data['title'] = 'Kuisioner Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Alumni_model');

        //load library
        $this->load->library('pagination');

        //ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $this->db->like('kuisioner', $data['keyword']);
        $this->db->from('kuisioner_alumni');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['kuisioner'] = $this->Kuisioner_Alumni_model->getKuisAlumni($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/index', $data);
        $this->load->view('templates/footer');
    }

    public function pilihan()
    {
        $data['title'] = 'Kuisioner Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/pilihan', $data);
        $this->load->view('templates/footer');
    }

    public function pilihan1()
    {
        $data['title'] = 'Kuisioner Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/pilihan1', $data);
        $this->load->view('templates/footer');
    }

    public function tipe_a()
    {
        $data['title'] = 'Kuisioner Alumni Tipe A';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Alumni_model');

        $this->form_validation->set_rules('kuisioner', 'Kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['grup_kuisioner'] = $this->Kuisioner_Alumni_model->getAllGrup();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuisioner/tipe_a', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kuisioner_Alumni_model->tambahDataKuisAlumniTipeA();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kuisioner');
        }
    }

    public function tipe1_a()
    {
        $data['title'] = 'Kuisioner Pengguna Alumni Tipe A';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Pengguna_model');
        $this->form_validation->set_rules('kuisioner', 'Kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuisioner/tipe1_a',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Kuisioner_Pengguna_model->tambahDataKuisPenggunaTipeA();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kuisioner/pengguna');
        }
    }

    public function tipe_b()
    {
        $data['title'] = 'Kuisioner Alumni Tipe B';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Alumni_model');

        $this->form_validation->set_rules('kuisioner', 'Kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['grup_kuisioner'] = $this->Kuisioner_Alumni_model->getAllGrup();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuisioner/tipe_b', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kuisioner_Alumni_model->tambahDataKuisAlumniTipeB();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kuisioner');
        }
    }
    public function tipe1_b()
    {
        $data['title'] = 'Kuisioner Pengguna Alumni Tipe B';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Pengguna_model');
        $this->form_validation->set_rules('kuisioner', 'Kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuisioner/tipe1_b',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Kuisioner_Pengguna_model->tambahDataKuisPenggunaTipeB();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kuisioner/pengguna');
        }
    }

    public function tipe_c()
    {
        $data['title'] = 'Kuisioner Alumni Tipe C';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Alumni_model');

        $this->form_validation->set_rules('kuisioner', 'Kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['grup_kuisioner'] = $this->Kuisioner_Alumni_model->getAllGrup();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuisioner/tipe_c', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kuisioner_Alumni_model->tambahDataKuisAlumniTipeC();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kuisioner');
        }
    }
    
    public function pengguna()
    {
        $data['title'] = 'Kuisioner Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Pengguna_model');

        //load library
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/tracer/kuisioner/pengguna';

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
        $this->db->like('kuisioner', $data['keyword']);
        $this->db->from('kuisioner_pengguna_alumni');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['kuisioner'] = $this->Kuisioner_Pengguna_model->getKuisPengguna($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/pengguna', $data);
        $this->load->view('templates/footer');
      
    }

    public function hapus($id)
    {
        $this->load->model('Kuisioner_Alumni_model');

        $this->Kuisioner_Alumni_model->hapusKuisAlumni($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kuisioner');
    }

    public function hapus1($id)
    {
        $this->load->model('Kuisioner_Pengguna_model');

        $this->Kuisioner_Pengguna_model->hapusKuisPengguna($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kuisioner/pengguna');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Kuisioner Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Alumni_model');
        $data['kuisioner'] = $this->Kuisioner_Alumni_model->getKuisAlumniDgId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/detail', $data);
        $this->load->view('templates/footer');
    }

    public function detail1($id)
    {
        $data['title'] = 'Detail Kuisioner Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Kuisioner_Pengguna_model');
        $data['kuisioner'] = $this->Kuisioner_Pengguna_model->getKuisPenggunaDgId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/detail1', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Kuisioner Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kuisioner_Alumni_model');
        $data['kuisioner'] = $this->Kuisioner_Alumni_model->getKuisAlumniById($id);
    
        $this->form_validation->set_rules('kuisioner', 'kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['grup_kuisioner']= $this->Kuisioner_Alumni_model->getAllGrup();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuisioner/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kuisioner_Alumni_model->ubahDataKuisAlumniTipeB();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kuisioner');
        }
    }

    public function ubah1($id)
    {
        $this->load->model('Kuisioner_Pengguna_model');

        $data['title'] = 'Ubah Kuisioner Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kuisioner'] = $this->Kuisioner_Pengguna_model->getKuisPenggunaById($id);
    
        $this->form_validation->set_rules('kuisioner', 'kuisioner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['grup_kuisioner']= $this->Kuisioner_Pengguna_model->getAllGrup();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuisioner/ubah1', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kuisioner_Pengguna_model->ubahDataKuisPenggunaTipeB();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kuisioner/pengguna');
        }
    }
}
