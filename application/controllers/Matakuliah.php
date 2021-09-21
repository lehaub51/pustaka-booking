<?php
class Matakuliah extends CI_Controller
{
 public function index()
 {$this->load->view('view-form-matakuliah' );}

 public function cetak()
 {
 	$this->form_validation->set_rules('kode' , 'Kode Matakuliah' ,'required|numeric' , 
 		['required' => 'Kode Matakuliah Harus diisi' ,
  		 'numeric' => 'Kode berupa angka']);
 
 	$this->form_validation->set_rules('nama' , 'Nama Matakuliah' ,'required|alpha_numeric' , 
 		['required' => 'Nama Matakuliah Harus diisi' ,
 		 'alpha_numeric' => 'Nama terlalu pendek']);
 	
 	$this->form_validation->set_rules('sks','SKS','required',
 		['required'=>'SKS harus dipilih']);

 	if ($this->form_validation->run()!=true){$this->load->view('view-form-matakuliah');}
 	else 
 	{
 		$data = ['kode' => $this->input->post('kode'),'nama' => $this->input->post('nama'),'sks' => $this->input->post('sks')];
 
 		$this->load->view('view-data-matakuliah' , $data);
 	}
 }
}