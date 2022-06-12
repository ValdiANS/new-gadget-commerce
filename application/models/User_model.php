<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";
    private $_table2 = "detail_user";
    private $_table3 = "all_review";
    private $_table4 = "seller_sold";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($username)
    {
        $this->db->select('a.*, b.*');
        $this->db->from('user a');
        $this->db->join('detail_user b', 'a.id=b.user_id');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }

    public function getSellerSold($username)
    {
        return $this->db->get_where($this->_table4, ["username" => $username])->row();
    }

    public function getAllReview($username)
    {
        return $this->db->get_where($this->_table3, ["usernameSeller" => $username])->result();
    }
}
