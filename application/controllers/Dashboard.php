<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLogin');
        $this->load->model('ModelKategori');
        $this->load->model('ModelProduk');
        $this->load->model('ModelKriteria');
        $this->load->model('ModelPenilaian');
        $this->load->model('ModelTransaksi');
        $this->load->model('ModelRekomendasi');
        $this->load->model('ModelUsers');
        
        
        if ($this->session->userdata('username') == null || $this->session->userdata('admin') == false) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data_pesanan = $this->ModelTransaksi->getAllDataPemesanan();
        $data_produk = $this->ModelProduk->getData();
        $data_pelanggan = $this->ModelUsers->getDataAllUsers();
        $data_pendapatan = $this->ModelTransaksi->getDataPendapata(3);
        $data = array(
            "title" => "Dashboard Toko",
            'jumlah_produk' => count($data_produk),
            'jumlah_pesanan' => count($data_pesanan),
            'jumlah_pelanggan' => count($data_pelanggan),
            'pendapatan'    => $data_pendapatan['total']
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('dashboard/footer');
    }

    public function dataKategori()
    {
        $data = array(
            "dataKategori" => $this->ModelKategori->getData()
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/kategori/datakategori');
        $this->load->view('dashboard/footer');
    }

    public function dataProduk()
    {
        $data = array(
            'title' => "Data Produk Toko",
            'dataProduk' => $this->ModelPenilaian->getDataPenilaian(),
            
            'data_kategori' => $this->ModelKategori->getData()
        );

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/produk/dataproduk');
        $this->load->view('dashboard/footer');
    }

    public function data_pemesanan()
    {

        $data = array(
            "title" => 'Data_Pemesanan',
            "data_transaksi" => $this->ModelTransaksi->getAllDataPemesanan()
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('pemesanan/data_pemesanan');
        $this->load->view('dashboard/footer');
    }

    public function data_transaksi()
    {

        $data = array(

            "title" => 'Data_Transaksi',
            "data_transaksi" => $this->ModelTransaksi->getAllDataTransaksi()
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('home/transaksi/data_transaksi');
        $this->load->view('dashboard/footer');
    }

    public function data_kriteria()
    {
        $data = array(

            "title" => 'Kriteria',
            "data_kriteria" => $this->ModelKriteria->getDataKriteria()
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/kriteria/data_kriteria');
        $this->load->view('dashboard/footer');
    }
    public function data_pelanggan()
    {
        $data = array(

            "title" => 'Data Pelanggan',
            "data_pelanggan" => $this->ModelUsers->getDataAllUsers()
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/pelanggan/data_pelanggan');
        $this->load->view('dashboard/footer');
    }

    public function data_penilaian()
    {
        $data = array(

            "title" => 'Data Penilaian',
            "data_penilaian" => $this->ModelPenilaian->getDataPenilaian(),
            'dataProduk' => $this->ModelProduk->getData(),
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/penilaian/data_penilaian');
        $this->load->view('dashboard/footer');
    }

    public function data_normalisasi()
    {
        $data = array(

            "title" => 'Data Penilaian'
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/penilaian/data_normalisasi');
        $this->load->view('dashboard/footer');
    }

    public function profileadmin()
    {
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/user/profileadmin');
        $this->load->view('dashboard/footer');
    }
    public function laporan(){

        if(isset($_POST['bulan'])){
            $date = $this->input->post('bulan');
            $arrayDate = explode("-",$date);
            $bulan = $arrayDate[1];
            $tahun = $arrayDate[0];
        }else{
            $bulan = date('m');
            $tahun = date('Y');
        }
        $date = $tahun.'-'.$bulan;

        $data = array(
            'bulan' => $this->_getMonth($bulan),
            "title" => 'Laporan',
            'date'  => $date,
            "laporan" => $this->ModelTransaksi->getDataLaporan($bulan,$tahun)
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/laporan/laporan');
        $this->load->view('dashboard/footer');
    }

    public function _getMonth($bulan){
        if($bulan == 1){
            $month = "Januari";
        }else if($bulan == 2){
            $month = "Februari";
        }else if($bulan == 3){
            $month = "Maret";
        }else if($bulan == 4){
            $month = "April";
        }else if($bulan == 5){
            $month = "Mei";
        }else if($bulan == 6){
            $month = "Juni";
        }else if($bulan == 7){
            $month = "Juli";
        }else if($bulan == 8){
            $month = "Agustus";
        }else if($bulan == 9){
            $month = "September";
        }else if($bulan == 10){
            $month = "Oktober";
        }else if($bulan == 11){
            $month = "November";
        }else if($bulan == 12){
            $month = "Desember";
        }
        return $month;
    }

    public function rekomendasi(){

        if(isset($_POST['bulan'])){
            $date = $this->input->post('bulan');
            $arrayDate = explode("-",$date);
            $bulan = $arrayDate[1];
            $tahun = $arrayDate[0];
        }else{
            $bulan = date('m');
            $tahun = date('Y');
        }
        $date = $tahun.'-'.$bulan;

        $data = array(
            'bulan' => $this->_getMonth($bulan),
            "title" => 'Data Rekomendasi',
            'date'  => $date,
            'data_rekomendasi' => $this->ModelRekomendasi->getDataRekomendasiByDate($bulan,$tahun),
            'productRekomendasi'    => $this->ModelRekomendasi->getDataPenilaianRekomendasi($bulan,$tahun),
        );
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/rekomendasi/data_rekomendasi');
        $this->load->view('dashboard/footer');
    }

    public function cetak_rekomendasi(){
        $date = $this->uri->segment(3);
        $arrayDate = explode("-", $date);
        $bulan = $arrayDate[1];
        $tahun = $arrayDate[0];

        $data = array(
            'bulan'     => $this->_getMonth($bulan),
            'laporan'   => $this->ModelRekomendasi->getDataRekomendasiByDate($bulan,$tahun)
        );

        $this->load->view('dashboard/laporan/cetak_rekomendasi',$data);
    }

    public function hitungNormalisasi()
    {
        //jumlah produk
        $produk = $this->ModelProduk->getData();
        $jumlah_produk = count($produk);

        //ambil kriteria
        $kriteria = $this->ModelKriteria->getDataKriteria();
        $kriteriaCost = $this->ModelKriteria->getDataKriteriaByTipe('cost');
        $kriteriaBenefit = $this->ModelKriteria->getDataKriteriaByTipe('benefit');

        //ambil nilai dari setiap produk
        $nilaiProduk = $this->ModelPenilaian->getDataPenilaian();


        //hasil max setiap kriteria dalam bentuk array
        $hasilMaxDariSetiapKriteria = array();
        $hasilMinDariSetiapKriteria = array();

        //hasil pembagian antara nilai kriteria dan nilai max kriteria
        $nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria = array();
        $nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMinKriteria = array();

        if ($jumlah_produk > 0) {

            //mencari nilai max dari kriteria benefit
            foreach($kriteriaBenefit as $kBenefit){
                $hasilMaxKriteria = $this->ModelPenilaian->ambilNilaiMaxBerdasarkanKriteria($kBenefit['kriteria']);

                array_push($hasilMaxDariSetiapKriteria, array(
                    'kriteria' => $kBenefit['kriteria'],
                    'hasil' => $hasilMaxKriteria[0][$kBenefit['kriteria']],
                ));
            }
            //mencari nilai min dari kriteria cost

            foreach($kriteriaCost as $kCost){
                $hasiMinKriteria = $this->ModelPenilaian->ambilNilaiMinBerdasarkanKriteria($kCost['kriteria']);

                array_push($hasilMinDariSetiapKriteria, array(
                    'kriteria' => $kCost['kriteria'],
                    'hasil' => $hasiMinKriteria[0][$kCost['kriteria']],
                ));
            }




            foreach ($nilaiProduk as $n) {
                $c = array();

                    //mencari nilai normalisasi karena faktor kriteria benefit berdasarkan nilai maksimal
                    foreach($hasilMaxDariSetiapKriteria as $hmxdsk){
                        array_push($c, array(
                            'kriteria' => $hmxdsk['kriteria'],
                            'hasil' => $n[$hmxdsk['kriteria']] / $hmxdsk['hasil'],
                        ));
                    }
                    //mencari nilai normalisasi karena faktor kriteria cost berdasarkan nilai minimal
                    foreach($hasilMinDariSetiapKriteria as $hmndsk){
                        array_push($c, array(
                            'kriteria' => $hmndsk['kriteria'],
                            'hasil' =>  $hmndsk['hasil'] / $n[$hmndsk['kriteria']],
                        ));
                    }
                
                    array_push($nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria, array(
                        'nama_produk' => $n['id_produk'],
                        'hasil_akhir' => $c,
                    ));

                    
            }
            $this->ModelPenilaian->deleteAllNormalisasi();
        
            foreach($nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria as $n){
                $addData = array(array(
                    'nilai_bahan' => $n['hasil_akhir'][0]['hasil'] * $kriteria[0]['bobot'],
                    'nilai_harga' => $n['hasil_akhir'][1]['hasil'] * $kriteria[1]['bobot'],
                    'nilai_berat' => $n['hasil_akhir'][2]['hasil'] * $kriteria[2]['bobot'],
                    'total_nilai' => $n['hasil_akhir'][0]['hasil'] * $kriteria[0]['bobot']*
                                     $n['hasil_akhir'][1]['hasil'] * $kriteria[1]['bobot']*
                                     $n['hasil_akhir'][2]['hasil'] * $kriteria[2]['bobot'],
                    'id_produk'   => $n['nama_produk'],
                    
                    )
                );
                
                $this->ModelPenilaian->insertPenilaian($addData);
            }

            redirect(base_url('dashboard/rekomendasi'));

        }
    }
}

