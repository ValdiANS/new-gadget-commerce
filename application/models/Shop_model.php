<?php defined('BASEPATH') or exit('No direct script access allowed');

class Shop_model extends CI_Model
{
    private $_table = "shop";
    private $_table2 = "detail_product";
    private $_table3 = "all_review";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table2, ["sale_id" => $id])->row();
    }
}
