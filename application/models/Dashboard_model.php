<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    private $_table = "seller_onsale";
    private $_table2 = "seller_sold";
    private $_table3 = "seller_request";
    private $_table4 = "buyer_request";

    public function getCountSellerOnSale()
    {
        return $this->db->get_where($this->_table, ["user_id" => $this->session->userdata('user_id')])->row();
    }

    public function getCountSellerSold()
    {
        return $this->db->get_where($this->_table2, ["user_sellerid" => $this->session->userdata('user_id')])->row();
    }

    public function getCountRequestForSeller()
    {
        return $this->db->get_where($this->_table3, ["user_id" => $this->session->userdata('user_id')])->row();
    }

    public function getCountRequestForBuyer()
    {
        return $this->db->get_where($this->_table4, ["user_id" => $this->session->userdata('user_id')])->row();
    }

    /*public function getById($id)
    {
        return $this->db->get_where($this->_table2, ["sale_id" => $id])->row();
    }*/
}
