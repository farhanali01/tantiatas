<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url() ?>dashboard"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>dashboard/dataProduk"><i class=" fas fa-align-justify"></i>Data Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>dashboard/dataKategori"><i class=" fas fa-align-justify"></i>Data Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url()?>dashboard/data_pelanggan"><i class=" fas fa-align-justify"></i>Data Pelanggan</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Data</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() ?>dashboard/data_pemesanan">Data Pemesanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() ?>dashboard/data_transaksi">Data Transaksi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        Metode
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>dashboard/data_penilaian"><i class="fas fa-list-ul"></i> Data Penilaian </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>dashboard/rekomendasi"><i class="fas fa-list-ul"></i> Rekomendasi </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>dashboard/data_kriteria"><i class="fas fa-list-ul"></i> Data Kriteria </a>
                    </li>
                    <li class="nav-divider">
                        Lain - lain
                    </li>
                   

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url()?>dashboard/laporan"><i class="fas fa-fw fa-inbox"></i>Laporan <span class="badge badge-secondary">New</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>