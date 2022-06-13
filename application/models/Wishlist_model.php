<?php defined('BASEPATH') or exit('No direct script access allowed');

class Wishlist_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('a.*, b.name as seller, b.city, c.name as sale, c.price, c.img');
        $this->db->from('wishlist a');
        $this->db->join('detail_user b', 'a.user_id=b.user_id');
        $this->db->join('sales c', 'a.sale_id=c.id');
        $this->db->where('a.user_id', $this->session->userdata('user_id'));
        $this->db->order_by('a.id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}
