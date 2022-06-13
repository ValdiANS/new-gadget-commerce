<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sales_model extends CI_Model
{
    private $_table = "all_sales";

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["user_id" => $this->session->userdata('user_id')])->result();
    }
}
