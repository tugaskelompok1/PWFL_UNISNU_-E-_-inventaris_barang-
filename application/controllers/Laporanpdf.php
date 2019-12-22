<?php
class Laporanpdf extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index()
    {
        $pdf = new FPDF('l', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(260, 7, 'LAPORAN INVENTORI BARANG DI DLH TPA BANDENGAN', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(30, 6, 'NAMa BARANG', 1, 0);
        $pdf->Cell(30, 6, 'KODE ITEM', 1, 0);
        $pdf->Cell(30, 6, 'MERK', 1, 0);
        $pdf->Cell(30, 6, 'JENIS BARANG', 1, 0);
        $pdf->Cell(30, 6, 'BAHAN', 1, 0);
        $pdf->Cell(30, 6, 'WARNA', 1, 0);
        $pdf->Cell(30, 6, 'TAHUN', 1, 0);
        $pdf->Cell(30, 6, 'HARGA', 1, 0);
        $pdf->Cell(30, 6, 'NAMA BIDANG', 1, 1);




        $barang = $this->db->get('tabel_barang')->result();
        foreach ($barang as $row) {
            $pdf->Cell(30, 6, $row->nama_barang, 1, 0);
            $pdf->Cell(30, 6, $row->kode_item, 1, 0);
            $pdf->Cell(30, 6, $row->merk, 1, 0);
            $pdf->Cell(30, 6, $row->jenis_barang, 1, 0);
            $pdf->Cell(30, 6, $row->bahan, 1, 0);
            $pdf->Cell(30, 6, $row->warna, 1, 0);
            $pdf->Cell(30, 6, $row->tahun, 1, 0);
            $pdf->Cell(30, 6, $row->harga, 1, 0);
            $pdf->Cell(30, 6, $row->nama_bidang, 1, 1);
        }
        $pdf->Output();
    }
}
