<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Dashboard</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Dashboard Template</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Produk</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?= $jumlah_produk ?></h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   
                                </div>
                            </div>
                            <div id="sparkline-revenue"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Pesanan</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?= $jumlah_pesanan?></h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   
                                </div>
                            </div>
                            <div id="sparkline-revenue2"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Pelanggan</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?= $jumlah_pelanggan?></h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                   
                                </div>
                            </div>
                            <div id="sparkline-revenue3"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Total Pendapatan</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">Rp <?= number_format($pendapatan) ?></h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                </div>
                            </div>
                            <div id="sparkline-revenue4"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>