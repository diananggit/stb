<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis extends MX_Controller {
        function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
    } 

    public function index()
    {
        $data = array();
        $data['content'] = $this->load->view('gis',$data,true);
        $this->parser->parse(TEMPLATE.'/content', $data);
    }
}
