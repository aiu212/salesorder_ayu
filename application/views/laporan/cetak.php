<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            padding: 20px;
            color: #000;
        }

        h2, h4 {
            text-align: center;
            margin: 0;
        }

        h2 {
            font-size: 22px;
        }

        h4 {
            font-size: 15px;
            margin-top: 4px;
        }

        .info {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .periode {
            text-align: center;
            margin-bottom: 25px;
            font-weight: bold;
            font-size: 13px;
        }

        table {
            width: 95%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
            white-space: nowrap;
        }

        th {
            background: #eee;
            font-weight: bold;
        }

        .total {
            font-weight: bold;
            background: #f2f2f2;
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
        }
    </style>
</head>

<body onload="window.print()">

    <h2>PT MAJU JAYA</h2>
    <h4>LAPORAN PENJUALAN</h4>

    <div class="info">
        Sistem Sales Order Berbasis Web
    </div>

    <?php if(!empty($tanggal_awal) && !empty($tanggal_akhir)): ?>
        <div class="periode">
            Periode:
            <?= date('d-m-Y', strtotime($tanggal_awal)); ?>
            s/d
            <?= date('d-m-Y', strtotime($tanggal_akhir)); ?>
        </div>
    <?php endif; ?>

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
                <td><strong><?= ucfirst($l->status); ?></strong></td>
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