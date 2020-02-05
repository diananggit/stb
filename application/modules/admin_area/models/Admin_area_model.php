<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Admin_area_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get G_USERS by id
     */
    function get_G_USERS($id)
    {
        return $this->db->get_where('dt_areas',array('AREA_ID'=>$id))->row_array();
    }
    
    /*
     * Get all G_USERS count
     */
    function get_all_G_USERS_count()
    {
        $this->db->from('dt_areas');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all G_USERS
     */
    function get_all_G_USERS($params = array())
    {
        $sql = " SELECT * FROM dt_areas ORDER BY MODIFIED_DATE DESC";
        $query = $this->db->query( $sql );
       

        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }

       return $query->result();
    }
        
    /*
     * function to add new G_USERS
     */
    function add_G_USERS($params)
    {
        $this->db->insert('dt_areas',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update G_USERS
     */
    function update_G_USERS($id,$params)
    {
        $this->db->where('U_ID',$id);
        return $this->db->update('g_users',$params);
    }
    
    /*
     * function to delete G_USERS
     */
    function delete_G_USERS($id)
    {
        return $this->db->delete('dt_areas',array('AREA_ID'=>$id));
    }
    
    function check_username($username,$id) {
        $this->db->where('USERNAME',$username);
        $this->db->where('U_ID !=',$id);
        $q = $this->db->get('g_users');
        return $q->num_rows();
    }
    
    function check_pass($id) {
        $this->db->where('U_ID',$id);
        $q = $this->db->get('g_users');
        $res = $q->row();
        $pwd = @$res->PASSWORD;
        return $pwd;
    }
    
    /*
    * function to list group desc
    */
    function listGropDesc(){
        $sql = "SELECT * FROM emp0004 WHERE ORDER BY Group_ID DESC";
        $this->db->query($sql);
    }

    /*
     * Get all spl count
     */
    function get_all_spl_count(){
        $this->load->library('session');
        $data =   $this->session->all_userdata();

        $this->db->select('*');
        $this->db->order_by('SPLID', 'desc');

        $keyword = $this->session->userdata('kom_sess_keyword');
        if ($keyword != "") {
            $this->db->like('k.pengirim',$keyword);
            $this->db->or_like('k.komentar',$keyword);
        }
        $this->db->from('emp0011');
        
        return $this->db->count_all_results();
    }

     /*
     * Get all SPL
     */
    function get_all_spl($params = array()){
        $this->load->library('session');
        $data =   $this->session->all_userdata();
 
        $this->db->select('*');
        $this->db->order_by('SPLID', 'desc');

        if(isset($params) && !empty($params)){
            $this->db->limit($params['limit'], $params['offset']);
        }
        
        $keyword = $this->session->userdata('kom_sess_keyword');
        if ($keyword != "") {
            $this->db->like('k.pengirim',$keyword);
            $this->db->or_like('k.komentar',$keyword);
        }
        
        return $this->db->get('emp0011')->result_array();
    }
}
