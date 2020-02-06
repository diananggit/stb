<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends MX_Controller {

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
        $data['content'] = $this->load->view('dashboard',$data,true);
        
        $this->parser->parse(TEMPLATE.'/content_admin', $data);
	}
    
    function login()
    {
        if(!empty($this->sess_id)) {
            redirect('index.php/administrator');
        }
        
        $data = array();
        
        $this->parser->parse(TEMPLATE.'/login', $data);
    }
    
    function login_submit()
    {
        $this->db->where('USERNAME',$this->input->post('username'));
        $this->db->where('PASSWORD',md5($this->input->post('password')));
        $q = $this->db->get('g_users');
        $res = $q->row();
        $cnt = $q->num_rows();
        $level = $res->GROUP_ID; 

        if ($cnt == 0) {
            $this->session->set_flashdata('msg',"<div class=\"alert alert-danger\" role=\"alert\">Username / NIK  OR Password wrong!</div>");
            redirect('index.php/administrator/login');
        } else if ( $cnt !== 0 && $level == 1 ) {
            // set session super admin
            $this->session->set_userdata('userid',$res->U_ID);
            $this->session->set_userdata('nik',$res->USERNAME);
            $this->session->set_userdata('username',$this->input->post('USERNAME'));
            redirect('index.php/administrator');
        } else if ( $cnt !== 0 && $level == 2 ){
            // set session admin / spv
            $this->session->set_userdata('userid',$res->U_ID);
            $this->session->set_userdata('groupId',$res->GROUP_ID);
            $this->session->set_userdata('nik',$res->USERNAME);
            $this->session->set_userdata('username',$this->input->post('USERNAME'));
            redirect('index.php/user/dashboard');
        } else if ( $cnt !== 0 && $level == 3 ){
            // set session operator
            $this->session->set_userdata('userid',$res->U_ID);
            $this->session->set_userdata('groupId',$res->GROUP_ID);
            $this->session->set_userdata('nik',$res->USERNAME);
            $this->session->set_userdata('username',$this->input->post('USERNAME'));
            redirect('index.php/user/dashboard');
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('index.php/administrator/login');
    }
}