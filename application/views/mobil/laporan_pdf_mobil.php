<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 10px 10px 10px;
        }
    </style>
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
</body>

</html>