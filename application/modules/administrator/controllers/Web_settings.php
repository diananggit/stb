<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_settings extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        $this->sess_id = $this->session->userdata('userid');
    }
    
	public function index()
	{
        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
		$data = array();
        //$data['css'] = $this->load->view('css','',true);
        //$data['js'] = $this->load->view('js','',true);
        $data['content'] = $this->load->view('web_settings',$data,true);
        
        $this->parser->parse(TEMPLATE.'index.php/content_admin', $data);
	}
    
}