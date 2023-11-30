<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
date_default_timezone_set('Asia/Jakarta');
class Booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model(['ModelBooking', 'ModelUser']);
    }

    public function index()
    {
        $id = ['bo.id_user' => $this->uri->segment(3)];
        $id_user = $this->session->userdata('id_user');
        $data['booking'] = $this->ModelBooking->joinOrder($id)->result();
        $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        foreach ($user as $a) {
            $data = [
                'image' => $user['image'],
                'user' => $user['nama'],
                'email' => $user['email'],
                'tanggal_input' => $user['tanggal_input']
            ];
        }

        $dtb = $this->ModelBooking->showtemp(['id_user' => $id_user])->num_rows();

        if ($dtb < 1) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-danger" role="alert">Tidak Ada Mobil dikeranjang</div>');
            redirect(base_url());
        } else {
            $data['temp'] = $this->db->query("SELECT image, nama_mobil, transmisi, surat, warna,id_mobil FROM temp WHERE id_user='$id_user'")->result_array();
        }

        $data['judul'] = "Data Booking";
        $this->load->view('templates/templates-user/header', $data);
        $this->load->view('booking/data-booking', $data);
        $this->load->view('templates/templates-user/modal');
        $this->load->view('templates/templates-user/footer');
    }

    public function tambahBooking()
    {
        $id_mobil = $this->uri->segment(3);
        //memilih data mobil yang untuk dimasukkan ke tabel temp/keranjang melalui variabel $isi
        $d = $this->db->query("SELECT * FROM mobil WHERE id='$id_mobil'")->row();
        //berupa data2 yang akan disimpan ke dalam tabel temp/keranjang

        $isi = [
            'id_mobil' => $id_mobil,
            'nama_mobil' => $d->nama_mobil,
            'id_user' => $this->session->userdata('id_user'),
            'email_user' => $this->session->userdata('email'),
            'tgl_booking' => date('Y-m-d H:i:s'),
            'image' => $d->image,
            'transmisi' => $d->transmisi,
            'surat' => $d->surat,
            'warna' => $d->warna
        ];

        //cek apakah mobil yang di klik booking sudah ada di keranjang
        $temp = $this->ModelBooking->getDataWhere('temp', ['id_mobil' => $id_mobil])->num_rows();
        $userid = $this->session->userdata('id_user');
        //cek jika sudah memasukan 3 mobil untuk dibooking dalam keranjang
        $tempuser = $this->db->query("SELECT * FROM temp WHERE id_user ='$userid'")->num_rows();
        //cek jika masih ada booking mobil yang belum diambil
        $databooking = $this->db->query("SELECT * FROM booking WHERE id_user='$userid'")->num_rows();
        if ($databooking > 0) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-danger" role="alert">Masih Ada booking mobil sebelumnya yang belum diambil.<br> Ambil mobil yang dibooking atau tunggu 1x24 Jam untuk bisa booking kembali </div>');
            redirect(base_url());
        }
        //jika mobil yang diklik booking sudah ada di keranjang
        if ($temp > 0) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-danger" role="alert">Mobil ini Sudah anda booking </div>');
            redirect(base_url() . 'home');
        }
        //jika Mobil yang akan dibooking sudah mencapai 3 item
        if ($tempuser == 3) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-danger" role="alert">Booking Mobil Tidak Boleh Lebih dari 3</div>');
            redirect(base_url() . 'home');
        }

        //membuat tabel temp jika belum ada
        $this->ModelBooking->createTemp();
        $this->ModelBooking->insertData('temp', $isi);
        //pesan ketika berhasil memasukkan mobil ke keranjang
        $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-success" role="alert">Mobil berhasil ditambahkan ke keranjang </div>');
        redirect(base_url() . 'home');
    }

    public function hapusbooking()
    {
        $id_mobil = $this->uri->segment(3);
        $id_user = $this->session->userdata('id_user');

        $this->ModelBooking->deleteData(['id_mobil' => $id_mobil], 'temp');
        $kosong = $this->db->query("SELECT * FROM temp WHERE id_user='$id_user'")->num_rows();
        if ($kosong < 1) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-danger" role="alert">Tidak Ada Mobil dikeranjang</div>');
            redirect(base_url());
        } else {
            redirect(base_url() . 'booking');
        }
    }

    public function bookingSelesai($where)
    {
        //mengupdate stok dan dibooking di tabel mobil saat proses booking diselesaikan
        $this->db->query("UPDATE mobil, temp SET mobil.dibooking=mobil.dibooking+1, mobil.stok=mobil.stok-1 WHERE mobil.id=temp.id_mobil");
        $tglsekarang = date('Y-m-d');
        $isibooking = [
            'id_booking' => $this->ModelBooking->kodeOtomatis('booking', 'id_booking'),
            'tgl_booking' => date('Y-m-d H:m:s'),
            'batas_ambil' => date('Y-m-d', strtotime('+2 days', strtotime($tglsekarang))),
            'id_user' => $where
        ];

        //menyimpan ke tabel booking dan detail booking, dan mengosongkan tabel temporari
        $this->ModelBooking->insertData('booking', $isibooking);
        $this->ModelBooking->simpanDetail($where);
        $this->ModelBooking->kosongkanData('temp');
        redirect(base_url() . 'booking/info');
    }

    public function info()
    {
        $where = $this->session->userdata('id_user');
        $data['user'] = $this->session->userdata('nama');
        $data['judul'] = "Selesai Booking";
        $data['useraktif'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id_user')])->result();
        $data['items'] = $this->db->query("SELECT * FROM booking bo, booking_detail d, mobil mo where d.id_booking=bo.id_booking AND d.id_mobil=mo.id AND bo.id_user='$where'")->result_array();

        $this->load->view('templates/templates-user/header', $data);
        $this->load->view('booking/info-booking', $data);
        $this->load->view('templates/templates-user/modal');
        $this->load->view('templates/templates-user/footer');
    }

    public function cetak()
    {
        $where = $this->session->userdata('id_user');
        $data['user'] = $this->session->userdata('nama');
        $data['judul'] = "Selesai Booking";
        $data['useraktif'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id_user')])->result();
        $data['items'] = $this->db->query("SELECT * FROM booking bo, booking_detail d, mobil mo where d.id_booking=bo.id_booking AND d.id_mobil=mo.id AND bo.id_user='$where'")->result_array();

        $this->load->view('booking/bukti-pdf', $data);
    }

    public function exportToPdf()
    {
        $id_user = $this->session->userdata('id_user');
        $nama_user = $this->session->userdata('nama');
        $data['user'] = $this->session->userdata('nama');
        $data['judul'] = "Cetak Bukti Booking";
        $data['useraktif'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id_user')])->result();
        $data['items'] = $this->db->query("SELECT * FROM booking bo, booking_detail d, mobil mo WHERE d.id_booking=bo.id_booking AND d.id_mobil = mo.id AND bo.id_user='$id_user'")->result_array();
        // $this->load->library('dompdf_gen');

        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/sukma/semester5/carstore/application/third_party/dompdf/autoload.inc.php";

        $dompdf = new Dompdf\Dompdf();
        $this->load->view('booking/bukti-pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);

        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("bukti-booking-$id_user-$nama_user.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }
}
