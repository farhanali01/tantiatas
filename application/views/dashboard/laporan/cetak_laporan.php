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
        <div class="row" style="height: 150px;">
            <div class="col-1">
                <img style="width: 100px;height:150px;" src="<?= base_url() ?>assets/home/tantia.png" class="mb-5" alt="">
            </div>
            <div class="col-11">
                <img style="width: 95%;" src="<?= base_url() ?>assets/image_produk/pt.png" class="ml-5" alt="">
                <h5 class="ml-5 mt-3" style="color: #0277bd;font-family: ui-monospace;font-weight:bold;letter-spacing: 6.9999px;">Produksi Aneka Model Tas, Dompet dan Lain-lain</h5>
                <div class="row">
                    <div class="col-2">
                    <p class="ml-5" style="color: #0277bd;text-align: justify;font-family: ui-monospace;font-weight:bold;">
                           Showroom : 
                        </p>
                    </div>
                    <div class="col-10">
                        <p class="ml-2" style="color: #0277bd;text-align: justify;font-family: ui-monospace;font-weight:bold;">
                            Jl. Raya Penggilingan Blok A 116-117-118, Komplek Perkampungan Industri Kecil (PIK) Jakarta Timur 13940 Telp. (021)46825693, Fax. (021)46821490
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border-width: 2px; border-color:#0277bd">
        <center>
            <?php if ($active_title == "bulan") { ?>
                <h3>Laporan Transaksi Bulan <?= $bulan ?></h3>
            <?php } else { ?>
                <h3>Laporan Transaksi Tahun <?= $bulan ?></h3>
            <?php } ?>
        </center>

        <table class="table table-striped table-bordered first mt-4">
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
                    <td><?= date_format(date_create($row['tanggal_transaksi']), "d F Y") ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td>Rp <?= number_format($row['total_harga'], 0, ".", ".") ?></td>

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

        <div class="ttd mt-5" style="float: right;">
            <p style="font-size: 16px;">Jakarta, <?= date('d, F Y') ?></p>
            <p style="margin-top:90px; text-align:center;"><?= $this->session->userdata('username'); ?></p>
        </div>
    </div>
</body>
<script>
    window.print();
</script>

</html>