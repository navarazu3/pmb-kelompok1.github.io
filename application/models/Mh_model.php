<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mh_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get mh by npm
     */
    function get_mh($npm)
    {
        return $this->db->get_where('mhs',array('npm'=>$npm))->row_array();
    }
        
    /*
     * Get all mhs
     */
    function get_all_mhs()
    {
        $this->db->order_by('npm', 'desc');
        return $this->db->get('mhs')->result_array();
    }
        
    /*
     * function to add new mh
     */
    function add_mh($params)
    {
        $this->db->insert('mhs',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update mh
     */
    function update_mh($npm,$params)
    {
        $this->db->where('npm',$npm);
        return $this->db->update('mhs',$params);
    }
    
    /*
     * function to delete mh
     */
    function delete_mh($npm)
    {
        return $this->db->delete('mhs',array('npm'=>$npm));
    }

    public function logged($user_id)
    {
        $this->db->where('npm', $user_id);
        $this->db->update('mhs', ['is_logged_in' => 1]);

        return 1;
    }
}
