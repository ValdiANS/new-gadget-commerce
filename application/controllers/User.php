<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index()
    {
        $this->load->view("user/user-detail");
    }

    public function detail($username = null)
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Detail User | Gadget Commerce";
        $data['page'] = 'user';
        $user = $this->user_model;
        $data["detail_user"] = $user->getById($username);
        $data["seller_sold"] = $user->getSellerSold($username);
        $data["all_review"] = $user->getAllReview($username);
        if (!$data["detail_user"]) show_404();

        $this->load->view("user/user-detail", $data);
    }
}
