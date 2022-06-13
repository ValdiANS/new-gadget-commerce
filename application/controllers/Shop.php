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
        $this->load->view('shop/list', $data);
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

    public function addRequest()
    {
        cek_login();
        $this->form_validation->set_rules('price', 'Price', 'required|trim|min_length[3]', [
            'required' => 'This field is required.',
            'min_length' => 'Invalid price (min. 3)',
        ]);

        if ($this->form_validation->run()) {
            $user_idIN = $this->session->userdata('user_id');
            $sale_idIN = $this->input->post('sale_id');
            $price_reqIN = $this->input->post('price');
            $date_reqIN = date('Y-m-d');
            $date_statusIN = date('Y-m-d');

            $call = $this->db->query('call add_request("' . $user_idIN . '", "' . $sale_idIN . '", "' . $price_reqIN . '", "' . $date_reqIN . '", "' . $date_statusIN . '")');

            if ($call) {
                $array = array(
                    'success' => true,
                    'message' => "Your request has been submitted!"
                );
            } else {
                $array = array(
                    'error' => true,
                    'message' => "Your request can't be submitted."
                );
            }
        } else {
            $array = array(
                'error' => true,
                'price_error' => form_error('price', '<small class="text-danger">', '</small>')
            );
        }
        echo json_encode($array);
    }
}
