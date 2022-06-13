<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dashboard_model");
        $this->load->model("wishlist_model");
        cek_login();
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

    public function wishlist()
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Wishlist | Gadget Commerce";
        $data['page'] = 'wishlist';
        $wishlist = $this->wishlist_model;
        $data["wishlists"] = $wishlist->getAll();
        $this->load->view('dashboard/wishlist', $data);
    }
}
