<?php
defined('BASEPATH') or exit('No direct access allowed');


class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Barang';
        $data['barang'] = $this->Admin_model->getAllBarang();
        // if ($this->input->post('keyword')) {
        //     $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        // }
        $this->load->view('templets/header', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('templets/footer');
    }
    // }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Barang';

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kode_item', 'Kode Item', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('bahan', 'Bahan', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('nama_bidang', 'Nama Bidang', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templets/header', $data);
            $this->load->view('Admin/tambah');
            $this->load->view('templets/footer');
        } else {
            $this->Admin_model->tambahDataBarang();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin');
        }
    }
    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Barang';
        $data['barang'] = $this->Admin_model->getBarangById($id);

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kode_item', 'Kode Item', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('bahan', 'Bahan', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('nama_bidang', 'Nama Bidang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templets/header', $data);
            $this->load->view('admin/ubah', $data);
            $this->load->view('templets/footer');
        } else {
            $this->Admin_model->ubahDataBarang();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin');
        }
    }

    public function hapus($id)
    {
        $this->Admin_model->hapusDataBarang($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin');
    }
}
