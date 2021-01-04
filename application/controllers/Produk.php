<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelProduk');
        $this->load->model('ModelPenilaian');
    }

    public function tambah_produk()
    {
        $nama_produk = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
        $berat = $this->input->post('berat');
        $bahan = $this->input->post('bahan');
        $date  = date('Y-m-d');


        if ($nama_produk != null && $harga != null & $deskripsi != null && $kategori != null) {
            if ($berat < 100) {
                $this->session->set_flashdata('pesan', 'Mohon masukan berat diatas 100 gram');
                $this->session->set_flashdata('type', 'warning');
                redirect(base_url('dashboard/dataproduk'));
            } else if ($berat > 700) {
                $this->session->set_flashdata('pesan', 'Mohon masukan berat dibawah 700 gram');
                $this->session->set_flashdata('type', 'warning');
                redirect(base_url('dashboard/dataproduk'));
            } else if ($berat > 100 || $berat < 700) {
                $config['upload_path']          = './assets/image_produk/';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->upload->initialize($config);

                if ($this->upload->do_upload('foto')) {
                    $data_file = array('upload_data' => $this->upload->data());
                    $nama_file = $data_file['upload_data']['file_name'];

                    $data = array(
                        "nama_produk" => $nama_produk,
                        "harga"     => $harga,
                        "deskripsi" => $deskripsi,
                        "id_kategori" => $kategori,
                        "foto"     => $nama_file,
                        'tanggal'   => $date
                    );
                    $this->ModelProduk->insertData($data);

                    $getDataProduk = $this->ModelProduk->getDataEnd();
                    $id_produk = $getDataProduk['id_produk'];
                    $addPenilaian = array(
                        'harga'     => $harga,
                        'berat'     => $berat,
                        'bahan'     => $bahan,
                        'id_produk' => $id_produk
                    );
                    $this->ModelPenilaian->addPenilaian($addPenilaian);

                    redirect(base_url('dashboard/dataproduk'));
                } else {
                    $this->session->set_flashdata('pesan', 'Foto tidak tersimpan');
                    $this->session->set_flashdata('type', 'warning');
                    redirect(base_url('dashboard/dataproduk'));
                }
            }
        } else {
            $this->session->set_flashdata('pesan', 'Data tidak boleh kosong');
            $this->session->set_flashdata('type', 'warning');
            redirect(base_url('dashboard/dataproduk'));
        }
    }
    public function update_produk()
    {
        $id_produk = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
        $berat = $this->input->post('berat');
        $bahan = $this->input->post('bahan');
        $cekfoto = $_FILES['foto']['name'];
        $date = date('Y-m-d');

        if ($nama_produk != null && $harga != null & $deskripsi != null && $kategori != null) {
            if ($cekfoto != null) {

                if ($berat < 100) {
                    $this->session->set_flashdata('pesan', 'Mohon masukan berat diatas 100 gram');
                    $this->session->set_flashdata('type', 'warning');
                    redirect(base_url('dashboard/dataproduk'));
                } else if ($berat > 700) {
                    $this->session->set_flashdata('pesan', 'Mohon masukan berat dibawah 700 gram');
                    $this->session->set_flashdata('type', 'warning');
                    redirect(base_url('dashboard/dataproduk'));
                }else if($berat > 100 || $berat < 700){
                    $config['upload_path']          = './assets/image_produk/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $this->upload->initialize($config);
                    $this->upload->do_upload('foto');
                    $data_file = array('upload_data' => $this->upload->data());
                    $nama_file = $data_file['upload_data']['file_name'];
                    // var_dump($nama_file);die;
                    $data = array(
                        "nama_produk" => $nama_produk,
                        "harga" => $harga,
                        "deskripsi" => $deskripsi,
                        "id_kategori" => $kategori,
                        "foto"     => $nama_file,
                        'tanggal'   => $date
    
    
                    );
                    $this->ModelProduk->updateData($data, $id_produk);
                    $updateData = array(
                        'harga'     => $harga,
                        'berat'     => $berat,
                        'bahan'     => $bahan
                    );
                    $this->ModelPenilaian->updatePenilaian($updateData, $id_produk);
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('pesan', 'Berhasil Update Foto !!!');
                    redirect(base_url('Dashboard/dataproduk'));
                }

                
            } else {
                if ($berat < 100) {
                    $this->session->set_flashdata('pesan', 'Mohon masukan berat diatas 100 gram');
                    $this->session->set_flashdata('type', 'warning');
                    redirect(base_url('dashboard/dataproduk'));
                } else if ($berat > 700) {
                    $this->session->set_flashdata('pesan', 'Mohon masukan berat dibawah 700 gram');
                    $this->session->set_flashdata('type', 'warning');
                    redirect(base_url('dashboard/dataproduk'));
                }else if($berat > 100 || $berat < 700){
                    $data_file = $this->ModelProduk->getDataProdukId($id_produk);
                    $nama_file = $data_file['foto'];
    
                    $data = array(
                        "nama_produk" => $nama_produk,
                        "harga" => $harga,
                        "deskripsi" => $deskripsi,
                        "id_kategori" => $kategori,
                        "foto"     => $nama_file,
                        'tanggal'   => $date
                    );
    
                    $this->ModelProduk->updateData($data, $id_produk);
                    $updateData = array(
                        'harga'     => $harga,
                        'berat'     => $berat,
                        'bahan'     => $bahan
                    );
                    $this->ModelPenilaian->updatePenilaian($updateData, $id_produk);
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('pesan', 'Berhasil Update Data Produk !!!');
                    redirect(base_url('Dashboard/dataproduk'));
                }
              
            }
        } else {
            $this->session->set_flashdata('pesan', 'Data tidak boleh kosong');
            $this->session->set_flashdata('type', 'warning');
            redirect(base_url('dashboard/dataproduk'));
        }
    }
    public function delete_produk()
    {
        $id_produk = $this->uri->segment(3);

        $this->ModelProduk->deleteData($id_produk);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Delete Data Produk !!!');
        redirect(base_url('Dashboard/dataproduk'));
    }
}
