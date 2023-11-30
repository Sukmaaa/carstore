<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        /* CSS untuk menengahkan tabel */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            /* Sesuaikan lebar tabel sesuai kebutuhan Anda */
        }

        .inside {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Tempatkan tabel Anda di sini -->
    <table border=0>
        <?php
        foreach ($useraktif as $u) {
        ?>
            <tr>
                <th>Nama Anggota : <?= $u->nama; ?></th>
            </tr>
            <tr>
                <th>Mobil Yang dibooking:</th>
            </tr>
        <?php } ?>
        <tr>
            <td>
                <div class="table-responsive inside">
                    <table border=1>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mobil</th>
                            <th>Transmisi</th>
                            <th>Surat</th>
                            <th>Warna</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($items as $i) {
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <?= $i['nama_mobil']; ?>
                                </td>
                                <td><?= $i['transmisi']; ?></td>
                                <td><?= $i['surat']; ?></td>
                                <td><?= $i['warna']; ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?= md5(date('d M Y H:i:s')); ?>
            </td>
        </tr>
    </table>
</body>

</html>