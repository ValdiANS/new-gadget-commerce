<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("shop_model");
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Shop | Gadget Commerce";
        $data['page'] = 'shop';
        $data['shop'] = $this->shop_model->getAll();
        $this->load->view('shop/shop', $data);
    }

    public function detail($id = null)
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Product Detail | Gadget Commerce";
        $data['page'] = 'shop';
        $shop = $this->shop_model;
        $data["detail_product"] = $shop->getById($id);
        if (!$data["detail_product"]) show_404();

        $this->load->view("shop/product-detail", $data);
    }
}
