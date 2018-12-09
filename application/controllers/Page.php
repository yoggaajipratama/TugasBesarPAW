<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function view($halaman= 'index'){
		
		if (!file_exists(APPPATH."views/page/".$halaman.'.php')) {
			show_404();
		}
		
		$this->load->helper('url');
		$this->load->view('page/'.$halaman);
	}


}
