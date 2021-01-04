<?php

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKriteria');
    }

    public function addKriteria()
    {
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');
        $tipe_kriteria = $this->input->post('tipe_kriteria');

        if ($kriteria != null && $bobot != null && $tipe_kriteria != null) {
            $data = array(
                'kriteria'  => $kriteria,
                'bobot'     => $bobot,
                'tipe_kriteria'     => $tipe_kriteria
            );

            $this->ModelKriteria->addKriteria($data);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('pesan','Berhasil Tambah Data Kriteria !!!');
            redirect(base_url('dashboard/data_kriteria'));
        }else{
            $this->session->set_flashdata('type','warning');
            $this->session->set_flashdata('pesan','Data Tidak Boleh Kosong !!!');
            redirect(base_url('dashboard/data_kriteria'));
        }
    }

    public function update_kriteria()
    {
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');
        $tipe = $this->input->post('tipe');
        $id_kriteria = $this->input->post('id_kriteria');
        if ($kriteria != null && $bobot != null) {
            $data = array(
                'kriteria' => $kriteria,
                'bobot' => $bobot,
                'tipe_kriteria' => $tipe
            );
            $this->ModelKriteria->updateKriteria($data, $id_kriteria);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Update Data Kriteria !!!');
            redirect(base_url('dashboard/data_kriteria'));
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Data Tidak Boleh Kosong !!!');
            redirect(base_url('dashboard/data_kriteria'));
        }
    }

    public function delete_kriteria()
    {
        $id_kriteria = $this->uri->segment(3);

        $this->ModelKriteria->deleteData($id_kriteria);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Delete Data Kategori !!!');
        redirect(base_url('Dashboard/data_kriteria'));
    }
}
