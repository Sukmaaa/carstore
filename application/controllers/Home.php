<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['ModelMobil']);
    }

    public function index()
    {
        $data = [
            'judul' => 'Home',
            'mobil' => $this->ModelMobil->joinMobilNamaKategori()->result(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detailMobil()
    {
        $id = $this->uri->segment(3);
        $mobil = $this->ModelMobil->joinKategoriMobil(['mobil.id' => $id])->result();
        $desc = $this->ModelMobil->mobilDeskripsi(['id_mobil' => $id])->result();
        $data['user'] = 'Pengunjung';
        $data['judul'] = 'Detail Mobil';

        foreach ($mobil as $fields) {
            $data['nama_mobil'] = $fields->nama_mobil;
            $data['harga'] = $fields->harga;
            $data['deskripsi'] = $fields->deskripsi;
            $data['kategori'] = $fields->kategori;
            $data['surat'] = $fields->surat;
            $data['warna'] = $fields->warna;
            $data['transmisi'] = $fields->transmisi;
            $data['stok'] = $fields->stok;
            $data['image'] = $fields->image;
            $data['dipinjam'] = $fields->dipinjam;
            $data['dibooking'] = $fields->dibooking;
            $data['id'] = $id;
        }

        foreach ($desc as $des) {
            $data['kondisi'] = $des->kondisi;
            $data['mesin'] = $des->mesin;
            $data['transmisi_lengkap'] = $des->transmisi;
            $data['bahan_bakar'] = $des->bahan_bakar;
            $data['kecepatan'] = $des->kecepatan;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('carView', $data);
        $this->load->view('templates/footer', $data);
    }

    public function filterByKategori()
    {
        $kategori = $this->input->get('kategori');

        $data = [
            'judul' => 'Home',
            'mobil' => $this->ModelMobil->filterByKategori($kategori)->result(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function sendEmailSubscriber()
    {
        cek_login();
        $this->load->library('email');

        $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $email_pelanggan = $user['email'] == $this->input->post('recipient_email');

        if ($user['is_subscribe'] == 1 && $email_pelanggan == true) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-warning" role="alert">Anda telah menjadi pelanggan kami</div>');
            redirect(base_url() . 'home');
        } else if ($email_pelanggan == false) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-danger" role="alert">Mohon gunakan email yang sama dengan email akun anda ketika login!</div>');
            redirect(base_url() . 'home');
        } else if ($user['is_subscribe'] == 2 && $email_pelanggan == true) {
            $this->db->set('is_subscribe', 1);
            $this->db->where('email', $user['email']);
            $this->db->update('user');

            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-success" role="alert">Selamat anda sekarang menjadi pelanggan setia kami.</div>');
            redirect(base_url() . 'home');
        } else {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-danger" role="alert">Mohon maaf sepertinya ada gangguan mohon di coba lain waktu!</div>');
            redirect(base_url() . 'home');
        }

        // Konfigurasi Email
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_crypto' => 'ssl',
            'smtp_user' => 'aspriliyawan321@gmail.com',
            'smtp_pass' => 'imhq runf qehb crbx',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'crlf'    => "\r\n"
        );

        $this->email->initialize($config);

        // Set pengirim, penerima, subjek, dan pesan
        $this->email->from('nerostore@nerostore.com', 'NEROSTORE');
        $this->email->to($this->input->post('recipient_email'));
        $this->email->subject('Terima kasih telah menjadi Member!');
        $this->email->message('Terima kasih telah menggunakan layanan kami.');

        // Kirim email
        if ($this->email->send()) {
            $this->session->set_flashdata('pesan', '<div class="notifikasi notifikasi-success" role="alert">Selamat anda berhasil menjadi subscriber </div>');
            redirect(base_url() . 'home');
        } else {
            echo "error sent email : " . $this->email->print_debugger();
        }
    }
}
