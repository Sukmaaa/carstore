<?php
header("Content-Type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Mobil Rental Online</center>
</h3>
<br />
<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mobil</th>
            <th>Transmisi</th>
            <th>Surat</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($mobil as $b) {
        ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $b['nama_mobil']; ?></td>
                <td><?= $b['transmisi']; ?></td>
                <td><?= $b['surat']; ?></td>
                <td><?= $b['warna']; ?></td>
                <td><?= $b['harga']; ?></td>
                <td><?= $b['stok']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>