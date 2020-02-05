<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_reports_bathroom extends MX_Controller {
    function __construct()
    {
        parent::__construct();
        $this->sess_id = $this->session->userdata('userid');
        $this->load->model('ReportCleaningModel');
    } 

    // LIST Report Cleaning Model
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
        $config['base_url'] = site_url('index.php/admin_reports_bathroom/index');
        $config['total_rows'] = $this->ReportCleaningModel->getAllReportingCount();
        $this->pagination->initialize($config);

        $data['dataReportings'] = $this->ReportCleaningModel->getAllDataCleaning( $params );
        
        $data['content'] = $this->load->view('admin_reports_bathroom/index',$data,true);
        $this->parser->parse(TEMPLATE.'/content_admin', $data);
    }

    // search data reporting
    public function searchDataReporting()
    {
        ini_set('memory_limit', '-1');
        
        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        $startDate = $this->input->post('startDate');
        $endDate   = $this->input->post('endDate');
        $areaId  = $this->input->post('areaName');

        $this->load->library('pagination');
        
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('index.php/admin_reports_bathroom/searchSPL');
        $config['total_rows'] = $this->ReportCleaningModel->getSearchAllSPLcount( $startDate, $endDate, $areaId );
        $this->pagination->initialize($config);

        $data['dataReportings'] = $this->ReportCleaningModel->getSearchAllSPL( $params, $startDate, $endDate, $areaId );
       
        $data['content'] = $this->load->view('admin_reports_bathroom/index',$data,true);
        $this->parser->parse(TEMPLATE.'/content_admin', $data);
    }
}
