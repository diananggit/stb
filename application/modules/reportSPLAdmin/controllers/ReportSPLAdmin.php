<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportSPLAdmin extends MX_Controller {
    function __construct()
    {
        parent::__construct();
        $this->sess_id = $this->session->userdata('userid');
        $this->load->model('ReportSPLModelAdmin');
    } 

    // LIST SPL
    public function index()
    {
        ini_set('memory_limit', '-1');

        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        $this->load->library('pagination');
        
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('index.php/reportSPLAdmin/index');
        $config['total_rows'] = $this->ReportSPLModelAdmin->getAllSPLcount();
        $this->pagination->initialize($config);

        $data['dataSPLs'] = $this->ReportSPLModelAdmin->getAllSPL($params);
        
        $data['content'] = $this->load->view('reportSPLAdmin/index',$data,true);
        $this->parser->parse(TEMPLATE.'/content_admin', $data);
    }

    // search SPL report
    public function searchSPL()
    {
        ini_set('memory_limit', '-1');
        
        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');

        $this->load->library('pagination');
        
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('index.php/reportSPL/searchSPL');
        $config['total_rows'] = $this->ReportSPLModelAdmin->getSearchAllSPLcount( $startDate, $endDate );
        $this->pagination->initialize($config);

        $data['dataSPLs'] = $this->ReportSPLModelAdmin->getSearchAllSPL( $params, $startDate, $endDate );
        
        $data['content'] = $this->load->view('reportSPLAdmin/index',$data,true);
        $this->parser->parse(TEMPLATE.'/content_admin', $data);
    }
}
