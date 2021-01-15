<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h5>Laporan Transaksi Bulan <?= $bulan ?></h5>

        <table class="table table-striped table-bordered first">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Nama Produk</th>
                    <th>Tanggal Pesanan</th>
                    <th>Alamat</th>
                    <th>Total Harga</th>

                </tr>
            </thead>
            <?php $i = 1;
            foreach ($laporan as $row) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['fullname'] ?></td>
                    <td><?= $row['nama_produk'] ?></td>
                    <td><?= date_format(date_create($row['tanggal_transaksi']),"d F Y") ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td>Rp <?= number_format($row['total_harga'],0,".",".") ?></td>

                </tr>
            <?php } ?>

            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Nama Produk</th>
                    <th>Tanggal Pesanan</th>
                    <th>Alamat</th>
                    <th>Total Harga</th>

                </tr>
            </tfoot>
        </table>
    </div>
</body>
<script>
    window.print();
</script>
</html>