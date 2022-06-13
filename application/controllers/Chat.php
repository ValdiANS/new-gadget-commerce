<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("chat_model");
        cek_login();
    }

    public function index()
    {
        redirect('dashboard');
    }

    public function request($id = null)
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Chat | Gadget Commerce";
        $data['page'] = 'chat';
        $chat = $this->chat_model;
        $data["chats"] = $chat->getById($id);
        $data["detailItem"] = $chat->getDetailItem($id);
        //if (!$data["chats"]) redirect('dashboard');

        $this->load->view("dashboard/chat", $data);
    }

    public function sendMessage()
    {
        $from_user_idIN = $this->session->userdata('user_id');
        $to_user_idIN = $this->input->post('to_userId');
        $to_req_idIN = $this->input->post('to_reqId');
        $dateIN = date('Y-m-d');
        $timeIN = date("H:i:s");
        $descriptionIN = $this->input->post('message');

        $call = $this->db->query('call add_chat("' . $from_user_idIN . '", "' . $to_user_idIN . '", "' . $to_req_idIN . '", "' . $dateIN . '", "' . $timeIN . '", "' . $descriptionIN . '", "-")');

        if ($call) {
            $array = array(
                'success' => true,
                'message' => "Message sent!",
                'descMessage' => $descriptionIN,
                'dateMessage' => $dateIN,
                'timeMessage' => $timeIN,
            );
        } else {
            $array = array(
                'error' => true,
                'message' => "Can't send message!"
            );
        }
        echo json_encode($array);
    }
}
