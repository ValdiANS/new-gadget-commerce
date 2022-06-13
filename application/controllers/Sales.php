<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("sales_model");
        cek_login();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Sales | Gadget Commerce";
        $data['page'] = 'sales';
        $sales = $this->sales_model;
        $data["sales"] = $sales->getAll();
        $data["types"] = $this->db->get("type")->result();
        $this->load->view('dashboard/sales', $data);
    }

    public function add()
    {
        $nameIN = $this->input->post('name');
        $brandIN = $this->input->post('brand');
        $priceIN = $this->input->post('price');
        $typeIN = $this->input->post('type');
        $descriptionIN = $this->input->post('description');
        $date_addedIN = date('Y-m-d');
        $user_id = $this->session->userdata('user_id');

        $checkIMG = $_FILES['image']['name'];

        if ($checkIMG) {
            $config['file_name'] = mt_rand();
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5120';
            $config['upload_path'] = './assets/img/products';

            $this->load->library('upload', $config);

            $this->upload->do_upload('image');

            $filename = $this->upload->data("file_name");
            $imgIN = $filename;

            $call = $this->db->query('call add_sales("' . $nameIN . '", "' . $brandIN . '", "' . $priceIN . '", 1, "' . $descriptionIN . '", "' . $date_addedIN . '", "0000-00-00", "' . $typeIN . '", "' . $user_id . '", "' . $imgIN . '")');
            if ($call) {
                $this->session->set_flashdata('message', '
                Command: toastr["success"]("Your item has been added.")
                ');
                redirect('sales');
            }
        }
    }
}
