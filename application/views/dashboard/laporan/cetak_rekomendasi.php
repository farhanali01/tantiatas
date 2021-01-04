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
        <h5>Laporan Produk Rekomendasi Bulan <?= $bulan ?></h5>

        <table class="table table-striped table-bordered first">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Nilai Harga</th>
                    <th>Nilai Bahan</th>
                    <th>Nilai Berat</th>
                    <th>Total Nilai</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($laporan as $row) { ?>
                    <tr>
                        <td> <?= $i++ ?></td>
                        <td><?= $row['nama_produk'] ?></td>
                        <td><?= $row['nilai_harga'] ?></td>
                        <td><?= $row['nilai_bahan'] ?></td>
                        <td><?= $row['nilai_berat'] ?></td>
                        <td><?= $row['total_nilai'] ?></td>


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