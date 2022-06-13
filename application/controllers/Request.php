<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("request_model");
        cek_login();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('detail_user', ['user_id' => $this->session->userdata('user_id')])->row();
        $data['title'] = "Request | Gadget Commerce";
        $data['page'] = 'request';
        $request = $this->request_model;
        $data["requestSeller"] = $request->getAllRequestForSeller();
        $data["requestBuyer"] = $request->getAllRequestForBuyer();
        $data["reviewCheck"] = $request->reviewCheck();
        $data["requests"] = $request->getAll();
        $this->load->view('dashboard/request', $data);
    }

    public function acceptReq()
    {
        $idIN = $this->input->post('reqId');
        $statusIN = $this->input->post('status');
        $date_statusIN = date('Y-m-d');

        $call = $this->db->query('call update_requestStatus("' . $idIN . '", "' . $statusIN . '", "' . $date_statusIN . '")');
        if ($call) {
            $array = array(
                'success' => true,
                'message' => "Accepted!"
            );
        } else {
            $array = array(
                'error' => true,
                'message' => "Can't accept!"
            );
        }
        echo json_encode($array);
    }

    public function declineReq()
    {
        $idIN = $this->input->post('reqId');
        $statusIN = $this->input->post('status');
        $date_statusIN = date('Y-m-d');

        $call = $this->db->query('call update_requestStatus("' . $idIN . '", "' . $statusIN . '", "' . $date_statusIN . '")');
        if ($call) {
            $array = array(
                'success' => true,
                'message' => "Accepted!"
            );
        } else {
            $array = array(
                'error' => true,
                'message' => "Can't accept!"
            );
        }
        echo json_encode($array);
    }
}
