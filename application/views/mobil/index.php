<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#mobilBaruModal"><i class="fas fa-file-alt"></i> Mobil Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Surat</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Transmisi</th>
                        <th scope="col">Stok</th>
                        <th scope="col">DiPinjam</th>
                        <th scope="col">DiBooking</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $a = 1;
                    foreach ($mobil as $b) {
                    ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $b['nama_mobil']; ?></td>
                            <td><?= $b['harga']; ?></td>
                            <td><?= $b['deskripsi']; ?></td>
                            <td><?= $b['surat']; ?></td>
                            <td><?= $b['warna']; ?></td>
                            <td><?= $b['transmisi']; ?></td>
                            <td><?= $b['stok']; ?></td>
                            <td><?= $b['dipinjam']; ?></td>
                            <td><?= $b['dibooking']; ?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/car/') . $b['image']; ?>" class="img-fluid img-thumbnail" alt="...">
                                </picture>
                            </td>
                            <td>
                                <a href="<?= base_url('mobil/ubahMobil/') . $b['id']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('mobil/hapusMobil/') . $b['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $b['nama_mobil']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah Mobil baru-->
<div class="modal fade" id="mobilBaruModal" tabindex="-1" role="dialog" aria-labelledby="mobilBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mobilBaruModalLabel">Tambah Mobil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('mobil'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_mobil" name="nama_mobil" placeholder="Masukkan Nama Mobil">
                    </div>
                    <div class="form-group">
                        <select name="id_kategori" class="form-control form-control-user">
                            <option value="">Pilih Kategori</option>
                            <?php
                            foreach ($kategori as $k) {
                            ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan harga">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="surat" name="surat" placeholder="Masukkan surat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="warna" name="warna" placeholder="Masukkan nominal warna">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="transmisi" name="transmisi" placeholder="Masukkan nominal transmisi">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="image" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->