<div class="container">
    <center>
        <table>
            <?php foreach ($agt_booking as $ab) { ?>
                <tr>
                    <td>Data Anggota</td>
                    <td>:</td>
                    <th><?= $ab['nama']; ?></th>
                </tr>
                <tr>
                    <td>ID Booking</td>
                    <td>:</td>
                    <th><?= $ab['id_booking']; ?></th>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>ID Mobil</th>
                                <th>Judul Mobil</th>
                                <th>Transmisi</th>
                                <th>Surat</th>
                                <th>Warna</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($detail as $d) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $d['id_mobil']; ?></td>
                                    <td><?= $d['nama_mobil']; ?></td>
                                    <td><?= $d['transmisi']; ?></td>
                                    <td><?= $d['surat']; ?></td>
                                    <td><?= $d['warna']; ?></td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3"><a href="#" onclick="window.history.go(-1)" class="btn btn-outline-dark"><i class="fas fa-fw fa-reply"></i> Kembali</a></td>
            </tr>
        </table>
    </center>
</div>