<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function laporan_mobil()
    {
        $data['judul'] = 'Laporan Data Mobil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->ModelMobil->getMobil()->result_array();
        $data['kategori'] = $this->ModelMobil->getKategori()->result_array();

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('mobil/laporan_mobil', $data);
        $this->load->view('templates/templates-admin/footer');
    }

    public function cetak_laporan_mobil()
    {
        $data['mobil'] = $this->ModelMobil->getMobil()->result_array();
        $data['kategori'] = $this->ModelMobil->getKategori()->result_array();

        $this->load->view('mobil/laporan_print_mobil', $data);
    }

    public function laporan_mobil_pdf()
    {
        $data['mobil'] = $this->ModelMobil->getMobil()->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/sukma/semester5/carstore/application/third_party/dompdf/autoload.inc.php";

        $dompdf = new Dompdf\Dompdf();
        $this->load->view('mobil/laporan_pdf_mobil', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait ataulandscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);

        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_mobil.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function export_excel()
    {
        $data = array('title' => 'Laporan Mobil', 'mobil' => $this->ModelMobil->getMobil()->result_array());

        $this->load->view('mobil/export_excel_mobil', $data);
    }

    public function laporan_pinjam()
    {
        $data['judul'] = 'Laporan Data Peminjaman';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['laporan'] = $this->db->query("SELECT * FROM pinjam p,detail_pinjam d,mobil b,user u WHERE d.id_mobil=b.id AND p.id_user=u.id AND p.no_pinjam=d.no_pinjam")->result_array();

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar');
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('pinjam/laporan-pinjam', $data);
        $this->load->view('templates/templates-admin/footer');
    }

    public function cetak_laporan_pinjam()
    {
        $data['laporan'] = $this->db->query("SELECT * FROM pinjam p,detail_pinjam d,mobil b,user u WHERE d.id_mobil=b.id AND p.id_user=u.id AND p.no_pinjam=d.no_pinjam")->result_array();
        $this->load->view('pinjam/laporan-print-pinjam', $data);
    }

    public function laporan_pinjam_pdf()
    {
        $data['laporan'] = $this->db->query("SELECT * FROM pinjam p,detail_pinjam d,mobil b,user u WHERE d.id_mobil=b.id AND p.id_user=u.id AND p.no_pinjam=d.no_pinjam")->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/sukma/semester5/carstore/application/third_party/dompdf/autoload.inc.php";

        $dompdf = new Dompdf\Dompdf();
        $this->load->view('pinjam/laporan_pdf_pinjam', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);

        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan data peminjaman.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function export_excel_pinjam()
    {
        $data = array(
            'title' => 'Laporan Data Peminjaman Mobil',
            'laporan' => $this->db->query("SELECT * FROM pinjam p,detail_pinjam d,mobil b,user u WHERE d.id_mobil=b.id AND p.id_user=u.id AND p.no_pinjam=d.no_pinjam")->result_array()
        );
        $this->load->view('pinjam/export-excel-pinjam', $data);
    }

    public function laporan_anggota()
    {
        $data['judul'] = 'Laporan Data Anggota';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['laporan'] = $this->db->query("SELECT * FROM user ")->result_array();

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar');
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('member/laporan-anggota', $data);
        $this->load->view('templates/templates-admin/footer');
    }

    public function cetak_laporan_anggota()
    {
        $data['laporan'] = $this->db->query("SELECT * FROM user ")->result_array();
        $this->load->view('member/laporan-print-anggota', $data);
    }

    public function laporan_anggota_pdf()
    {
        $data['laporan'] = $this->db->query("SELECT * FROM user")->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/sukma/pustakabooking/application/third_party/dompdf/autoload.inc.php";

        $dompdf = new Dompdf\Dompdf();
        $this->load->view('member/laporan_pdf_anggota', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);

        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan data anggota.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function export_excel_anggota()
    {
        $data = array(
            'title' => 'Laporan Data Anggota',
            'laporan' => $this->db->query("SELECT * FROM user")->result_array()
        );
        $this->load->view('member/export-excel-anggota', $data);
    }
}
