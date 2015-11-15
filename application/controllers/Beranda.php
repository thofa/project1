<?php
class Beranda Extends CI_Controller{
	
	public function index()
	{
		
		$data['judul'] = heading("List Categories",3);
		$data['categories'] = $this->Categories_Model->getAlldata();
		$this->load->view('view_categories',$data);
		
	}
	public function kedua($nama,$usia){
		$this->load->helper("My_string");
		
		echo "Nama saya {$nama} usia {$usia} <br />";
		echo "<br>".$this->_gaji(3);
		
		
		$uri ='<ol>';
		$uri.='<li>'.$this->uri->segment(1).'</li>';
		$uri.='<li>'.$this->uri->segment(2).'</li>';
		$uri.='<li>'.$this->uri->segment(3).'</li>';
		$uri.='<li>'.$this->uri->segment(4).'</li>';
		$uri.='</ol>';
		echo $uri;
	}
	
	private function _gaji($jmlbulan){
		$gaji = (gapok + tunjangan) * $jmlbulan;
		return "Gaji : ".format_currency($gaji);
	}
	
}
