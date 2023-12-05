<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');
class Pinjam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        cek_user();
    }

    public function index()
    {
        $data['judul'] = "Data Pinjam";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->ModelPinjam->joinData();

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('pinjam/data-pinjam', $data);
        $this->load->view('templates/templates-admin/footer');
    }


    public function daftarBooking()
    {
        $data['judul'] = "Daftar Booking";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->db->query("SELECT * FROM booking")->result_array();

        if ($data['user']['is_subscribe'] == 1) {
            $data['denda'] = '100000';
        } else {
            $data['denda'] = '1000000';
        }

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('booking/daftar-booking', $data);
        $this->load->view('templates/templates-admin/footer');
    }

    public function bookingDetail()
    {
        $id_booking = $this->uri->segment(3);
        $data['judul'] = "Booking Detail";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['agt_booking'] = $this->db->query("SELECT * FROM booking b, user u WHERE b.id_user=u.id AND b.id_booking='$id_booking'")->result_array();
        $data['detail'] = $this->db->query("SELECT id_mobil,nama_mobil,transmisi,surat,warna FROM booking_detail d, mobil b WHERE d.id_mobil=b.id AND d.id_booking='$id_booking'")->result_array();

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('booking/booking-detail', $data);
        $this->load->view('templates/templates-admin/footer');
    }

    public function pinjamAct()
    {
        $id_booking = $this->uri->segment(3);
        $lama = $this->input->post('lama', TRUE);
        $bo = $this->db->query("SELECT * FROM booking WHERE id_booking='$id_booking'")->row();
        $tglsekarang = date('Y-m-d');
        $no_pinjam = $this->ModelBooking->kodeOtomatis('pinjam', 'no_pinjam');
        $databooking = [
            'no_pinjam' => $no_pinjam,
            'id_booking' => $id_booking,
            'tgl_pinjam' => $tglsekarang,
            'id_user' => $bo->id_user,
            'tgl_kembali' => date('Y-m-d', strtotime('+' . $lama . ' days', strtotime($tglsekarang))),
            'tgl_pengembalian' => '0000-00-00',
            'status' => 'Pinjam',
            'total_denda' => 0
        ];

        $this->ModelPinjam->simpanPinjam($databooking);
        $this->ModelPinjam->simpanDetail($id_booking, $no_pinjam);
        $denda = $this->input->post('denda', TRUE);
        $this->db->query("UPDATE detail_pinjam SET denda='$denda'");

        //hapus Data booking yang bukunya diambil untuk dipinjam
        $this->ModelPinjam->deleteData('booking', ['id_booking' => $id_booking]);
        $this->ModelPinjam->deleteData('booking_detail', ['id_booking' => $id_booking]);
        $this->db->query("DELETE FROM booking WHERE id_booking='$id_booking'");

        //update dibooking dan dipinjam pada tabel buku saat buku yang dibooking diambil untuk dipinjam
        $this->db->query("UPDATE mobil, detail_pinjam SET mobil.dipinjam=mobil.dipinjam+1, mobil.dibooking=mobil.dibooking-1 WHERE mobil.id=detail_pinjam.id_mobil");
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Peminjaman Berhasil Disimpan</div>');
        redirect(base_url() . 'pinjam');
    }

    public function ubahStatus()
    {
        $id_mobil = $this->uri->segment(3);
        $no_pinjam = $this->uri->segment(4);
        $where = ['id_mobil' => $this->uri->segment(3)];
        $tgl = date('Y-m-d');
        $status = 'Kembali';

        //update status menjadi kembali pada saat buku dikembalikan
        $this->db->query("UPDATE pinjam, detail_pinjam SET pinjam.status='$status', pinjam.tgl_pengembalian='$tgl' WHERE detail_pinjam.id_mobil='$id_mobil' AND pinjam.no_pinjam='$no_pinjam'");

        //update stok dan dipinjam pada tabel buku
        $this->db->query("UPDATE mobil, detail_pinjam SET mobil.dipinjam=mobil.dipinjam-1, mobil.stok=mobil.stok+1 WHERE mobil.id=detail_pinjam.id_mobil");
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert"></div>');
        redirect(base_url('pinjam'));
    }
}
