<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function index()
    {
        $data = array();
            
        $data['css'] = $this->load->view('css','',true);
        
        // $this->db->where('wpp_geojson !=', null);
        // $q = $this->db->get('REF_WPP_RI');
        // $djs['geo_wpp'] = $q->result();
        
        // $q = $this->db->get('REF_PROVINSI');
        // $djs['geo_prov'] = $q->result();
        // $data['js'] = $this->load->view('js',$djs,true);

        $data['content'] = $this->load->view('dashboard',$data,true);  
        $this->parser->parse(TEMPLATE.'/content', $data);
    }
}
