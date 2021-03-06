<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Menu extends MX_Controller{
    function __construct()
    {
        parent::__construct();
        $this->sess_id = $this->session->userdata('userid');
        $this->load->model('Menu_model');
    } 

    /*
     * Listing of menu
     */
    function index()
    {
        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        $this->load->library('pagination');
        
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('menu?');
        $config['total_rows'] = $this->Menu_model->get_all_menu_count();
        $this->pagination->initialize($config);

        $data['menu'] = $this->Menu_model->get_all_menu($params);
        
        $data['content'] = $this->load->view('menu/index',$data,true);
        $this->parser->parse(TEMPLATE.'/content_admin', $data);
    }

    /*
     * Adding a new menu
     */
    function add()
    {   
        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        $this->load->library('form_validation');

		$this->form_validation->set_rules('menu_name','Menu Name','required|max_length[100]');
        
        $this->form_validation->set_rules('menu_type','Menu Type','required');
        if ($this->input->post('menu_type') == "url") {
            $this->form_validation->set_rules('url','Url','required|max_length[500]');
        } else if ($this->input->post('menu_type') == "cms") {
            $this->form_validation->set_rules('cms_id','CMS','required');
        }
        
		$this->form_validation->set_rules('ordering','Ordering','required|integer|max_length[11]');
		
		if($this->form_validation->run())     
        {
            $params = array(
				'menu_name' => $this->input->post('menu_name'),
				'menu_type' => $this->input->post('menu_type'),
				'url' => $this->input->post('url'),
				'cms_id' => $this->input->post('cms_id'),
				'icon' => $this->input->post('icon'),
				'ordering' => $this->input->post('ordering'),
				'created_date' => date("Y-m-d H:i:s"),
				'created_by' => $this->sess_id
            );
            $menu_id = $this->Menu_model->add_menu($params);
            $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Tersimpan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('menu');
        }
        else
        { 
            $da['js'] = $this->load->view('menu/add_js',null,true);
            $data['content'] = $this->load->view('menu/add',$da,true);
            $this->parser->parse(TEMPLATE.'/content_admin', $data);
        }
    }  

    /*
     * Editing a menu
     */
    function edit($id)
    {   
        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        // check if the menu exists before trying to edit it
        $data['menu'] = $this->Menu_model->get_menu($id);
        
        if(isset($data['menu']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('menu_name','Menu Name','required|max_length[100]');
            
            if ($this->input->post('menu_type') == "url") {
                $_POST['cms_id'] = '';
                $this->form_validation->set_rules('url','Url','required|max_length[500]');
            } else if ($this->input->post('menu_type') == "cms") {
                $_POST['url'] = '';
                $this->form_validation->set_rules('cms_id','CMS','required');
            }
            
            $this->form_validation->set_rules('ordering','Ordering','required|integer|max_length[11]');
		
			if($this->form_validation->run())     
            {
                if ($this->input->post('slug') == "") {
                    $slug = slugify($this->input->post('title'));
                } else {
                    $slug = $this->input->post('slug');
                }
                $params = array(
                    'menu_name' => $this->input->post('menu_name'),
                    'menu_type' => $this->input->post('menu_type'),
                    'url' => $this->input->post('url'),
                    'cms_id' => $this->input->post('cms_id'),
                    'icon' => $this->input->post('icon'),
                    'ordering' => $this->input->post('ordering')
                );

                $this->Menu_model->update_menu($id,$params);
                $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Tersimpan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('menu');
            }
            else
            {
                $data['js'] = $this->load->view('menu/add_js',$data,true);
                $data['content'] = $this->load->view('menu/edit',$data,true);
                $this->parser->parse(TEMPLATE.'/content_admin', $data);
            }
        }
        else
            show_error('The menu you are trying to edit does not exist.');
    } 

    /*
     * Deleting menu
     */
    function remove($id)
    {
        if(empty($this->sess_id)) {
            redirect('index.php/administrator/login');
        }
        
        $menu = $this->Menu_model->get_menu($id);

        // check if the menu exists before trying to delete it
        if(isset($menu['id']))
        {
            $this->Menu_model->delete_menu($id);
            $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible fade show" role="alert">Data Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('menu');
        }
        else
            show_error('The menu you are trying to delete does not exist.');
    }
    
}
