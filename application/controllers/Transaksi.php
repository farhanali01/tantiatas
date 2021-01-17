<?php

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTransaksi');
    }
    public function proses_pemesanan()
    {
        $id_transaksi = $this->uri->segment(3);

        $data = array(
            "status_transaksi" => 1
        );

        $this->ModelTransaksi->updateStatusTransaksi($data, $id_transaksi);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Proses');
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('title', 'Berhasil');
        redirect(base_url('dashboard/data_pemesanan'));
    }

    public function proses_bayar()
    {

        $id_transaksi = $this->input->post('id_transaksi');
        $config['upload_path']          = './assets/image_produk/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $data_file = array('upload_data' => $this->upload->data());
            $nama_file = $data_file['upload_data']['file_name'];

            $data = array(
                "foto_bukti"     => $nama_file,
                "status_transaksi" => 2

            );
            $this->ModelTransaksi->updateDataTransaksi($data, $id_transaksi);
            redirect(base_url('home/transaksi'));
        } else {
            $this->session->set_flashdata('pesan', 'Foto Tidak Terupload');
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('title', 'Foto Kosong');
            redirect(base_url('home/transaksi'));
        }
    }
    public function konfirmasi_bayar()
    {
        $id_transaksi = $this->uri->segment(3);

        $data = array(
            "status_transaksi" => 3

        );

        $this->ModelTransaksi->updateStatus($data, $id_transaksi);
        $this->session->set_flashdata('pesan', 'Konfirmasi Berhasil');
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('title', 'Sukses');
        redirect(base_url('home/form_transaksi'));
    }
    public function cancel_pembayaran()
    {
        $id_transaksi = $this->uri->segment(3);


        $this->ModelTransaksi->deleteStatus($id_transaksi);
        $this->session->set_flashdata('pesan', 'Cancel Berhasil');
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('title', 'Sukses');
        redirect(base_url('home/transaksi'));
    }
    public function proses_transaksi()
    {
        $id_transaksi = $this->uri->segment(3);

        $data = array(
            "status_transaksi" => 3
        );

        $this->ModelTransaksi->updateProsesTransaksi($data, $id_transaksi);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Proses');
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('title', 'Berhasil');
        redirect(base_url('dashboard/data_transaksi'));
    }
    public function delete_transaksi()
    {
        $id_transaksi = $this->uri->segment(3);

        $this->ModelTransaksi->deleteData($id_transaksi);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Delete Data Transaksi !!!');
        redirect(base_url('Dashboard/data_transaksi'));
    }
    public function delete_pemesanan()
    {
        $id_transaksi = $this->uri->segment(3);

        $this->ModelTransaksi->deleteDataPemesanan($id_transaksi);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Delete Data Pemesanan !!!');
        redirect(base_url('Dashboard/data_pemesanan'));
    }
    public function detailTransaksi()
    {
        $id_transaksi = $this->uri->segment(3);

        $this->ModelTransaksi->getDataDetail($id_transaksi);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Melihat Detail Transaksi !!!');
        redirect(base_url('Dashboard/data_transaksi'));
    }

    public function getDataTransaksi()
    {
        $id = $this->uri->segment(3);

        $getDataTransaksi = $this->ModelTransaksi->getDataTransaksiByIdTransaksi($id);
        echo json_encode($getDataTransaksi);
    }

    public function cetak_laporan()
    {
        $active_cetak = $this->uri->segment(4);
        $date = $this->uri->segment(3);


        if ($active_cetak == "bulan") {
            $arrayDate = explode("-", $date);
            $bulan = $arrayDate[1];
            $tahun = $arrayDate[0];
            $laporan = $this->ModelTransaksi->getDataLaporan($bulan, $tahun);
            $title = $this->_getMonth($bulan).' '.$tahun;
            $activeTitle = "bulan";
        } else {
            $date = $this->uri->segment(3);
            $laporan = $this->ModelTransaksi->getDataLaporanPerTahun($date);
            $title = $date;
            $activeTitle = "tahun";
        }
        $data = array(
            'bulan'     => $title,
            'laporan'   => $laporan,
            'active_title'=> $activeTitle
        );

        $this->load->view('dashboard/laporan/cetak_laporan', $data);
    }
    public function _getMonth($bulan)
    {
        if ($bulan == 1) {
            $month = "Januari";
        } else if ($bulan == 2) {
            $month = "Februari";
        } else if ($bulan == 3) {
            $month = "Maret";
        } else if ($bulan == 4) {
            $month = "April";
        } else if ($bulan == 5) {
            $month = "Mei";
        } else if ($bulan == 6) {
            $month = "Juni";
        } else if ($bulan == 7) {
            $month = "Juli";
        } else if ($bulan == 8) {
            $month = "Agustus";
        } else if ($bulan == 9) {
            $month = "September";
        } else if ($bulan == 10) {
            $month = "Oktober";
        } else if ($bulan == 11) {
            $month = "November";
        } else if ($bulan == 12) {
            $month = "Desember";
        }
        return $month;
    }
}
