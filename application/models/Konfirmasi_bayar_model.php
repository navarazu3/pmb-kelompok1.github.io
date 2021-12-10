<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Konfirmasi_bayar_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get konfirmasi_bayar by npm
     */
    function get_konfirmasi_bayar($npm)
    {
        return $this->db->get_where('konfirmasi_bayar',array('npm'=>$npm))->row_array();
    }
        
    /*
     * Get all konfirmasi_bayar
     */
    function get_all_konfirmasi_bayar()
    {
        $this->db->order_by('npm', 'desc');
        return $this->db->get('konfirmasi_bayar')->result_array();
    }
        
    /*
     * function to add new konfirmasi_bayar
     */
    function add_konfirmasi_bayar($params)
    {
        $this->db->insert('konfirmasi_bayar',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update konfirmasi_bayar
     */
    function update_konfirmasi_bayar($npm,$params)
    {
        $this->db->where('npm',$npm);
        return $this->db->update('konfirmasi_bayar',$params);
    }
    
    /*
     * function to delete konfirmasi_bayar
     */
    function delete_konfirmasi_bayar($npm)
    {
        return $this->db->delete('konfirmasi_bayar',array('npm'=>$npm));
    }
}