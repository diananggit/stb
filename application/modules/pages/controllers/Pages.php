<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pages extends MX_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
    } 

    function index($slug){
       $row = get_table_row('cms','slug',$slug);
       $data['row'] = (array) $row;
       $data['content'] = $this->load->view('pages/index',$data,true);
       $this->parser->parse(TEMPLATE.'/content', $data);          
    }

}
