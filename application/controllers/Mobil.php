<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Mobil
    public function index()
    {
        $data['judul'] = 'Data Mobil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->ModelMobil->getMobil()->result_array();
        $data['kategori'] = $this->ModelMobil->getKategori()->result_array();

        $this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required|min_length[1]', [
            'required' => 'Nama Mobil harus diisi',
            'min_length' => 'Nama Mobil terlalu pendek'
        ]);
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', [
            'required' => 'Kategori harus diisi',
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|min_length[3]', [
            'required' => 'harga harus diisi',
            'min_length' => 'harga terlalu pendek'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|min_length[3]', [
            'required' => 'deskripsi harus diisi',
            'min_length' => 'deskripsi terlalu pendek'
        ]);
        $this->form_validation->set_rules('surat', 'surat', 'required|min_length[3]', [
            'required' => 'surat harus diisi',
            'min_length' => 'surat terlalu pendek',
        ]);
        $this->form_validation->set_rules('warna', 'warna', 'required|min_length[3]', [
            'required' => 'warna harus diisi',
            'min_length' => 'warna terlalu pendek',
        ]);
        $this->form_validation->set_rules('transmisi', 'transmisi', 'required|min_length[3]', [
            'required' => 'transmisi harus diisi',
            'min_length' => 'transmisi terlalu pendek',
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/car/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates-admin/header', $data);
            $this->load->view('templates/templates-admin/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('mobil/index', $data);
            $this->load->view('templates/templates-admin/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'nama_mobil' => $this->input->post('nama_mobil', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'harga' => $this->input->post('harga', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'surat' => $this->input->post('surat', true),
                'warna' => $this->input->post('warna', true),
                'transmisi' => $this->input->post('transmisi', true),
                'stok' => $this->input->post('stok', true),
                'dipinjam' => 0,
                'dibooking' => 0,
                'image' => $gambar
            ];

            $this->ModelMobil->simpanMobil($data);
            redirect('mobil');
        }
    }

    public function hapusMobil()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelMobil->hapusMobil($where);
        redirect('mobil');
    }

    public function ubahMobil()
    {
        $data['judul'] = 'Ubah Data Mobil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->ModelMobil->mobilWhere(['id' => $this->uri->segment(3)])->result_array();
        $kategori = $this->ModelMobil->joinKategoriMobil(['mobil.id' => $this->uri->segment(3)])->result_array();
        foreach ($kategori as $k) {
            $data['id'] = $k['id_kategori'];
            $data['k'] = $k['kategori'];
        }
        $data['kategori'] = $this->ModelMobil->getKategori()->result_array();

        $this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required|min_length[3]', [
            'required' => 'Nama Mobil harus diisi',
            'min_length' => 'Nama Mobil terlalu pendek'
        ]);
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', [
            'required' => 'harga harus diisi',
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|min_length[3]', [
            'required' => 'harga harus diisi',
            'min_length' => 'harga terlalu pendek'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Nama deskripsi', 'required|min_length[3]', [
            'required' => 'Nama deskripsi harus diisi',
            'min_length' => 'Nama deskripsi terlalu pendek'
        ]);
        $this->form_validation->set_rules('surat', 'surat', 'required|min_length[3]|max_length[4]|numeric', [
            'required' => 'surat harus diisi',
            'min_length' => 'surat terlalu pendek',
            'max_length' => 'surat terlalu panjang',
            'numeric' => 'Hanya boleh diisi angka'
        ]);
        $this->form_validation->set_rules('warna', 'warna', 'required|min_length[1]', [
            'required' => 'warna harus diisi',
            'min_length' => 'warna terlalu pendek',
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/car/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        //memuat atau memanggil library upload
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates-admin/header', $data);
            $this->load->view('templates/templates-admin/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('mobil/ubah_mobil', $data);
            $this->load->view('templates/templates-admin/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/car/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'nama_mobil' => $this->input->post('nama_mobil', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'harga' => $this->input->post('harga', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'surat' => $this->input->post('surat', true),
                'warna' => $this->input->post('warna', true),
                'transmisi' => $this->input->post('transmisi', true),
                'stok' => $this->input->post('stok', true),
                'image' => $gambar
            ];

            $this->ModelMobil->updateMobil($data, ['id' => $this->input->post('id')]);
            redirect('mobil');
        }
    }

    //manajemen kategori
    public function kategori()
    {
        $data['judul'] = 'Kategori Mobil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelMobil->getKategori()->result_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Nama Mobil harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates-admin/header', $data);
            $this->load->view('templates/templates-admin/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('mobil/kategori', $data);
            $this->load->view('templates/templates-admin/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori', TRUE)
            ];

            $this->ModelMobil->simpanKategori($data);
            redirect('mobil/kategori');
        }
    }

    public function ubahKategori()
    {
        $data['judul'] = 'Ubah Data Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelMobil->kategoriWhere(['id' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required|min_length[3]', [
            'required' => 'Nama Kategori harus diisi',
            'min_length' => 'Nama Kategori terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates-admin/header', $data);
            $this->load->view('templates/templates-admin/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('mobil/ubah_kategori', $data);
            $this->load->view('templates/templates-admin/footer');
        } else {

            $data = [
                'kategori' => $this->input->post('kategori', true)
            ];

            $this->ModelMobil->updateKategori(['id' => $this->input->post('id')], $data);
            redirect('mobil/kategori');
        }
    }

    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelMobil->hapusKategori($where);
        redirect('mobil/kategori');
    }
}
