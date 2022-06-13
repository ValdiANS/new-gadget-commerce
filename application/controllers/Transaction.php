<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("transaction_model");
        cek_login();
    }

    public function index()
    {
        redirect('transaction/log');
    }

    public function log()
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Transaction Log | Gadget Commerce";
        $data['page'] = 'transaction';
        $transaction = $this->transaction_model;
        $data["transactions"] = $transaction->getAll();
        $this->load->view('dashboard/transaction-log', $data);
    }
}
