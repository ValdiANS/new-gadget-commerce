<?php defined('BASEPATH') or exit('No direct script access allowed');

class Chat_model extends CI_Model
{
    private $_table = "all_request";

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->where('req_id', $id);
        $this->db->where('from_user_id', $this->session->userdata('user_id'));
        $this->db->or_where('to_user_id', $this->session->userdata('user_id'));
        $this->db->order_by('date', 'asc');
        $this->db->order_by('time', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDetailItem($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
}
