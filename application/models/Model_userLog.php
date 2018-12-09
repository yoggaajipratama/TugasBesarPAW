<?php 
defined('BASEPATH') or exit('No direct script access denied');

	class Model_userLog extends CI_model
	{
		
		function login($username, $password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get('user');
		}

		function validation($mode)
		{
		
			$this->load->library('form_validation');
			if($mode == "save")
			{
				$this->form_validation->set_rules('username', 'username', 'required|numeric|max_length[50]');
				$this->form_validation->set_rules('email', 'email', 'required|max_length[50]');
			    $this->form_validation->set_rules('telp', 'telp', 'required|max_length[12]');
			    $this->form_validation->set_rules('password', 'password', 'required|numeric|max_length[15]');
			}
			if($this->form_validation->run())
				return TRUE;
    		else
      			return FALSE;
  		}

		function save()
		{

			$data = array(
				"username" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"telp" => $this->input->post('telp'),
				"password" => $this->input->post('password')
			);
			$this->db->insert('user', $data);
		}

		function report()
		{

			$data = array(
				"nama" => $this->input->post('nama'),
				"ktp" => $this->input->post('ktp'),
				"nampro" => $this->input->post('nampro'),
				"alamat" => $this->input->post('alamat'),
				"tgl" => $this->input->post('tgl'),
				"harga" => $this->input->post('harga'),
				"ket" => $this->input->post('ket')
			);
			$this->db->insert('report', $data);
		}
	}
?>