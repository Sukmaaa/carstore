<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No Pinjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>ID User</th>
                                <th>ID Buku</th>
                                <th>Tanggal Kembali</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Terlambat</th>
                                <th>Denda</th>
                                <th>Status</th>
                                <th>Total Denda</th>
                                <th>Pilihan</th>
                            </tr>
                            <?php
                            foreach ($pinjam as $p) {
                            ?>
                                <tr>
                                    <td><?= $p['no_pinjam']; ?></td>
                                    <td><?= $p['tgl_pinjam']; ?></td>
                                    <td><?= $p['id_user']; ?></td>
                                    <td><?= $p['id_buku']; ?></td>
                                    <td><?= $p['tgl_kembali']; ?></td>
                                    <td>
                                        <?php
                                        if ($p['status'] == 'Pinjam') {
                                            echo 'Anda belum mengembalikan Buku.';
                                        } else {
                                            echo date('Y-m-d');
                                        ?>
                                            <input type="hidden" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= date('Y-m-d'); ?>">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $tanggal_peminjaman = new DateTime($p['tgl_pinjam']);
                                        $tanggal_kembali_diharapkan = new DateTime($p['tgl_kembali']);
                                        $tanggal_pengembalian_sebenarnya = new DateTime();
                                        $selisih = $tanggal_kembali_diharapkan->diff($tanggal_pengembalian_sebenarnya)->format("%R%a");

                                        if ($selisih > 0) {
                                            echo "Anda terlambat mengembalikan buku selama " . $selisih . " hari.";
                                        } elseif ($selisih < 0) {
                                            echo "Anda mengembalikan buku lebih awal " . abs($selisih) . " hari.";
                                        } elseif ($p['status'] == 'Pinjam') {
                                            echo "Anda sedang meminjam Buku.";
                                        } else {
                                            "Anda mengembalikan buku tepat waktu.";
                                        }
                                        ?>
                                    </td>
                                    <td><?= $p['denda']; ?></td>
                                    <?php if ($p['status'] == "Pinjam") {
                                        $status = "warning";
                                    } else {
                                        $status = "secondary";
                                    } ?>
                                    <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $p['status']; ?></i></td>
                                    <?php
                                    if ($selisih < 0) {
                                        $total_denda = $p['denda'] * 0;
                                    } else {
                                        $total_denda = $p['denda'] * $selisih;
                                    }
                                    ?>
                                    <td><?= $total_denda; ?>
                                        <input type="hidden" name="totaldenda" id="totaldenda" value="<?= $total_denda; ?>">
                                    </td>
                                    <td nowrap>
                                        <?php if ($p['status'] == "Kembali") { ?>
                                            <i class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-edit"></i>Ubah Status</i>
                                        <?php } else { ?>
                                            <a class="btn btn-sm btn-outline-info" href="<?= base_url('pinjam/ubahStatus/' . $p['id_buku'] . '/' . $p['no_pinjam']); ?>"><i class="fas fa-fw fa-edit"></i>Ubah Status</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</div>