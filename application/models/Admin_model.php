
<?php

class Admin_model extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('tabel_barang')->result_array();
    }

    public function tambahDataBarang()
    {
        $data = [
            "nama_barang"      => $this->input->post('nama_barang', true),
            "kode_item"       => $this->input->post('kode_item', true),
            "merk"     => $this->input->post('merk', true),
            "jenis_barang"     => $this->input->post('jenis_barang', true),
            "bahan"   => $this->input->post('bahan', true),
            "warna"   => $this->input->post('warna', true),
            "tahun"   => $this->input->post('tahun', true),
            "harga"   => $this->input->post('harga', true),
            "nama_bidang"   => $this->input->post('nama_bidang', true),
        ];

        $this->db->insert('tabel_barang', $data);
    }

    public function hapusDataBarang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tabel_barang');
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('tabel_barang', ['id' => $id])->row_array();
    }

    public function ubahDataBarang()
    {
        $data = [
            "nama_barang"      => $this->input->post('nama_barang', true),
            "kode_item"       => $this->input->post('kode_item', true),
            "merk"     => $this->input->post('merk', true),
            "jenis_barang"     => $this->input->post('jenis_barang', true),
            "bahan"   => $this->input->post('bahan', true),
            "warna"   => $this->input->post('warna', true),
            "tahun"   => $this->input->post('tahun', true),
            "harga"   => $this->input->post('harga', true),
            "nama_bidang"   => $this->input->post('nama_bidang', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tabel_barang', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('jurusan', $keyword);

        return $this->db->get('mahasiswa')->result_array();
    }
}
