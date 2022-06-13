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

    public function profile()
    {
        cek_login();
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['detail_user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Profile | Gadget Commerce";
        $data['page'] = 'profile';
        $user = $this->user_model;
        //  if (!$data["detail_user"]) show_404();

        $this->load->view("user/profile", $data);
    }

    public function editprofile()
    {
        cek_login();
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $email = $this->input->post('email');

        $this->db->set('name', $name);
        $this->db->set('phone', $phone);
        $this->db->set('address', $address);
        $this->db->set('city', $city);
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->update('detail_user');

        $this->db->set('username', $username);
        $this->db->set('email', $email);
        $this->db->where('id', $this->session->userdata('user_id'));
        $this->db->update('user');
        redirect('profile');
    }
}
