<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Land extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Pg_Playlist');
	}
	
	public function sheet()
	{
		$this->db->select('*');
		$this->db->from('test');
		$arrStatus = $this->db->get();
		$arrStatus = $arrStatus->result_array();
		print_r($arrStatus);
		exit;
		$this->load->view('Pg_sheet');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */