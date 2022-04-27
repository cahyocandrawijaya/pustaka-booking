<?php
class Admin extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-admin');
 }
 public function cetak()
 {
 $data = [
 'nama' => $this->input->post('nama'),
 'nis' => $this->input->post('nis'),
 'kelas' => $this->input->post('kelas'),
 'tanggal' => $this->input->post('tanggal'),
 'tempat' => $this->input->post('tempat'),
 'alamat' => $this->input->post('alamat'),
 'kelamin' => $this->input->post('kelamin'),
 'laki-laki' => $this->input->post('laki-laki'),
 'perempuan' => $this->input->post('perempuan'),
 'agama' => $this->input->post('agama')
 ];
 $this->load->view('view-data-admin', $data);
 }
}