<?php defined('BASEPATH') or exit('No direct script access allowed');

class Request_model extends CI_Model
{
    private $_table = "all_requestforseller";
    private $_table2 = "all_requestforbuyer";
    private $_table3 = "request";

    public function getAllRequestForSeller()
    {
        return $this->db->get_where($this->_table, ["user_id" => $this->session->userdata('user_id')])->result();
    }

    public function getAllRequestForBuyer()
    {
        return $this->db->get_where($this->_table2, ["user_id" => $this->session->userdata('user_id')])->result();
    }

    public function reviewCheck()
    {
        $this->db->select('a.id, a.sale_id, b.user_id');
        $this->db->from('review a');
        $this->db->join('sales b', 'a.sale_id=b.id');
        $this->db->where('b.user_id', $this->session->userdata('userid'));
        $query = $this->db->get();
        return $query->result();
    }

    public function getAll()
    {
        return $this->db->get_where($this->_table3, ["user_id" => $this->session->userdata('user_id')])->result();
    }
}
