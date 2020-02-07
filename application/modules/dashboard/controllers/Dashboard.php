<?php

/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Dashboard extends MX_Controller {
    function __construct()
    {
        parent::__construct();
        $this->sess_id = $this->session->userdata('userid');
        $this->load->model('Dashboard_model');
    } 
    public function index()
    {
        // $data = array();
            
        // $data['css'] = $this->load->view('css','',true);
        
        // $this->db->where('wpp_geojson !=', null);
        // $q = $this->db->get('REF_WPP_RI');
        // $djs['geo_wpp'] = $q->result();
        
        // $q = $this->db->get('REF_PROVINSI');
        // $djs['geo_prov'] = $q->result();
        // $data['js'] = $this->load->view('js',$djs,true);

        // $data['content'] = $this->load->view('dashboard',$data,true);  
        // $this->parser->parse(TEMPLATE.'/content', $data);

        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        $this->load->library('pagination');
        
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('index.php/administrator/area');
        $config['total_rows'] = $this->Dashboard_model->get_all_G_USERS_count();
        $this->pagination->initialize($config);

        $data['user'] = $this->Dashboard_model->get_all_G_USERS($params);
        
        $data['content'] = $this->load->view('dashboard',$data,true);
        $this->parser->parse(TEMPLATE.'/content', $data);
    }
}
