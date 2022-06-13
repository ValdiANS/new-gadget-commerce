<?php defined('BASEPATH') or exit('No direct script access allowed');

class Transaction_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('all_logtransaction');
        $this->db->where('user_buyerid', $this->session->userdata('user_id'));
        $this->db->or_where('user_sellerid', $this->session->userdata('user_id'));
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}
