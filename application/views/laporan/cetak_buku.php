<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Buku</title>
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
    <h2>Laporan Buku</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            <?php foreach($data as $d): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d->judul; ?></td>
                <td><?= $d->penulis; ?></td>
                <td><?= $d->penerbit; ?></td>
                <td><?= $d->stok; ?></td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>