<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Laporan_model');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Added!</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added!</div>');
            redirect('menu/submenu');
        }
    }

    public function laporan()
    {
        $data['title'] = 'Laporan Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['fakultas'] = $this->db->get('fakultas')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function filterLaporanFakultas($id)
    {
        $data['title'] = 'Laporan Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id == 0) {
            $data['jawaban'] = $this->db->get('jawaban_alumni')->result_array();
        } else {
            $data['jawaban'] = $this->db->get_where('jawaban_alumni', ['fakultas_id' => $id])->result_array();
        }

        $data['fakultas_id'] = $id;
        $this->load->view('menu/result_fakultas', $data);
    }

    public function filterLaporanJurusan($id)
    {
        $data['title'] = 'Laporan Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id == 0) {
            $data['jawaban'] = $this->db->get('jawaban_alumni')->result_array();
        } else {
            $data['jawaban'] = $this->db->get_where('jawaban_alumni', ['jurusan_id' => $id])->result_array();
        }

        $data['jurusan_id'] = $id;
        $this->load->view('menu/result_jurusan', $data);
    }

    public function cetak_fakultas($id)
    {
        $data['title'] = 'Laporan Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id == 0) {
            $data['jawaban'] = $this->db->get('jawaban_alumni')->result_array();
        } else {
            $data['jawaban'] = $this->db->get_where('jawaban_alumni', ['fakultas_id' => $id])->result_array();
        }

        $this->load->view('menu/cetak_fakultas', $data);
    }

    public function cetak_jurusan($id)
    {
        $data['title'] = 'Laporan Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id == 0) {
            $data['jawaban'] = $this->db->get('jawaban_alumni')->result_array();
        } else {
            $data['jawaban'] = $this->db->get_where('jawaban_alumni', ['jurusan_id' => $id])->result_array();
        }

        $this->load->view('menu/cetak_jurusan', $data);
    }

    public function excel_fakultas($id)
    {
        $data['title'] = 'Laporan Excel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id == 0) {
            $data['jawaban'] = $this->db->get('jawaban_alumni')->result_array();
        } else {
            $data['jawaban'] = $this->db->get_where('jawaban_alumni', ['fakultas_id' => $id])->result_array();
        }

        $this->load->view('menu/excel_fakultas', $data);
    }

    public function excel_jurusan($id)
    {
        $data['title'] = 'Laporan Excel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id == 0) {
            $data['jawaban'] = $this->db->get('jawaban_alumni')->result_array();
        } else {
            $data['jawaban'] = $this->db->get_where('jawaban_alumni', ['jurusan_id' => $id])->result_array();
        }

        $this->load->view('menu/excel_jurusan', $data);
    }

    public function pengguna()
    {
        $data['title'] = 'Laporan Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['fakultas'] = $this->db->get('fakultas')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/pengguna', $data);
        $this->load->view('templates/footer');
    }

    public function filterLaporanPenggunaFakultas($id1)
    {
        $data['title'] = 'Laporan Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id1 == 0) {
            $data['jawaban1'] = $this->db->get('jawaban_pengguna')->result_array();
        } else {
            $data['jawaban1'] = $this->db->get_where('jawaban_pengguna', ['id_fakultas' => $id1])->result_array();
        }

        $data['id_fakultas'] = $id1;
        $this->load->view('menu/result_pengguna_fakultas', $data);
    }

    public function filterLaporanPenggunaJurusan($id1)
    {
        $data['title'] = 'Laporan Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id1 == 0) {
            $data['jawaban1'] = $this->db->get('jawaban_pengguna')->result_array();
        } else {
            $data['jawaban1'] = $this->db->get_where('jawaban_pengguna', ['id_jurusan' => $id1])->result_array();
        }

        $data['id_jurusan'] = $id1;
        $this->load->view('menu/result_pengguna_jurusan', $data);
    }

    public function cetak_pengguna_fakultas($id1)
    {
        $data['title'] = 'Laporan Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id1 == 0) {
            $data['jawaban1'] = $this->db->get('jawaban_pengguna')->result_array();
        } else {
            $data['jawaban1'] = $this->db->get_where('jawaban_pengguna', ['id_fakultas' => $id1])->result_array();
        }

        $this->load->view('menu/cetak_pengguna_fakultas', $data);
    }

    public function cetak_pengguna_jurusan($id1)
    {
        $data['title'] = 'Laporan Pengguna Alumni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id1 == 0) {
            $data['jawaban1'] = $this->db->get('jawaban_pengguna')->result_array();
        } else {
            $data['jawaban1'] = $this->db->get_where('jawaban_pengguna', ['id_jurusan' => $id1])->result_array();
        }

        $this->load->view('menu/cetak_pengguna_jurusan', $data);
    }

    public function excel_pengguna_fakultas($id1)
    {
        $data['title'] = 'Laporan Excel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id1 == 0) {
            $data['jawaban1'] = $this->db->get('jawaban_pengguna')->result_array();
        } else {
            $data['jawaban1'] = $this->db->get_where('jawaban_pengguna', ['id_fakultas' => $id1])->result_array();
        }

        $this->load->view('menu/excel_pengguna_fakultas', $data);
    }

    public function excel_pengguna_jurusan($id1)
    {
        $data['title'] = 'Laporan Excel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($id1 == 0) {
            $data['jawaban1'] = $this->db->get('jawaban_pengguna')->result_array();
        } else {
            $data['jawaban1'] = $this->db->get_where('jawaban_pengguna', ['id_jurusan' => $id1])->result_array();
        }

        $this->load->view('menu/excel_pengguna_jurusan', $data);
    }
}
