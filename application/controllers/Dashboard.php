<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dashboard_model");
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Dashboard | Gadget Commerce";
        $data['page'] = 'dashboard';
        $data['countSellerOnSale'] = $this->dashboard_model->getCountSellerOnSale();
        $data['countSellerSold'] = $this->dashboard_model->getCountSellerSold();
        $data['countRequestForSeller'] = $this->dashboard_model->getCountRequestForSeller();
        $data['countRequestForBuyer'] = $this->dashboard_model->getCountRequestForBuyer();
        $this->load->view('dashboard/index', $data);
    }

    /*public function detail($id = null)
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Product Detail | Gadget Commerce";
        $data['page'] = 'shop';
        $shop = $this->shop_model;
        $data["detail_product"] = $shop->getById($id);
        if (!$data["detail_product"]) show_404();

        $this->load->view("shop/product-detail", $data);
    }
    */
}
