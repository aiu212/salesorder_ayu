<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Anggota</title>
    <style>
        body{
            font-family: Arial;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid black;
            padding:8px;
        }

        h2{
            text-align:center;
        }

    </style>
</head>

<body onload="window.print()">
    <h2>Laporan Anggota</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Anggota</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            <?php foreach($data as $d): ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d->nomor_anggota; ?></td>
                <td><?= $d->nama; ?></td>
                <td><?= $d->email; ?></td>
                <td><?= $d->status; ?></td>
            </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>