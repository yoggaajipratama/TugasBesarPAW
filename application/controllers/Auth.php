<?php 

class Auth extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('model_userLog');
	}

	function login()
	{
		if(isset($_POST['submit'])){
     	
     		$username = $this->input->post('username');
      		$password = $this->input->post('password');

      		$berhasil = $this->model_userLog->login($username,$password);
      		
      		if ($berhasil->num_rows() ==1) {
        		foreach ($berhasil->result() as $data) {
        			$sess_data['id'] = $data->id;
        			$sess_data['username'] = $data->username;
        			$this->session->set_userdata($sess_data);
        		}
        		redirect('report');
      		}else{

        		$this->session->set_flashdata('pesan','Maaf Username/Password salah');
        		redirect('login');
      		}
    	}else{
        
        	$this->load->view('login');
    	}
  }

  function logout()
  {
   
    $this->session->sess_destroy();
    redirect('login');
  }

  function tambah(){

    if($this->input->post('submit'))
    {
      $this->model_userLog->save();
      redirect('login');
    }
  }

  function report(){

    if($this->input->post('submit'))
    {
      $this->model_userLog->report();
      $this->session->set_flashdata('pesan2','Report success!');
      redirect('report');
    }
  }

}