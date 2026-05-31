<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Penjualan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h2, h4 {
            text-align: center;
            margin: 0;
        }

        .info {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background: #eee;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body onload="window.print()">

    <h2>PT MAJU JAYA</h2>
    <h4>LAPORAN PENJUALAN</h4>

    <div class="info">
        Sistem Sales Order Berbasis Web
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>No Order</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Sales</th>
                <th>Status</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $no = 1; 
            $grand_total = 0;
            foreach($laporan as $l): 
                $grand_total += $l->total;
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $l->no_order; ?></td>
                <td><?= $l->tanggal; ?></td>
                <td><?= $l->nama_pelanggan; ?></td>
                <td><?= $l->nama_sales; ?></td>
                <td><?= ucfirst($l->status); ?></td>
                <td>Rp <?= number_format($l->total,0,',','.'); ?></td>
            </tr>

            <?php endforeach; ?>

            <tr>
                <td colspan="6" class="total">Grand Total</td>
                <td class="total">Rp <?= number_format($grand_total,0,',','.'); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>