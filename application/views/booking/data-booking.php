<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped tablehover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>Nama Mobil</th>
                                <th>Transmisi</th>
                                <th>Surat</th>
                                <th>Warna</th>
                                <th>Pilihan</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($temp as $t) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/car/' . $t['image']); ?>" class="rounded" alt="No Picture" width="100%">
                                    </td>
                                    <td nowrap><?= $t['transmisi']; ?></td>
                                    <td nowrap><?= $t['surat']; ?></td>
                                    <td nowrap><?= $t['warna']; ?></td>
                                    <td nowrap>
                                        <a href="<?= base_url('booking/hapusbooking/' . $t['id_mobil']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking '.$t['nama_mobil'])">
                                            <i class="btn btn-sm btn-outline-danger fas fw fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>">
                        <span class="fas fw fa-play"></span> Lanjutkan Booking Buku
                    </a>
                    <a class="btn btn-sm btn-outline-success" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>">
                        <span class="fas fw fa-stop"></span> Selesaikan Booking
                    </a>
                </td>
            </tr>
        </table>
    </center>
</div>