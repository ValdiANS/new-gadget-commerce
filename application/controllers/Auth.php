<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('auth/login');
    }

    public function login()
    {
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $data['title'] = "Login | Gadget Commerce";
        $this->load->view('auth/login', $data);
    }

    public function register()
    {
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $data['title'] = "Register | Gadget Commerce";
        $this->load->view('auth/register', $data);
    }

    public function loginProcess()
    {
        $this->form_validation->set_rules('usermail', 'Username / Email', 'trim|required', [
            'required' => 'Enter your email address / username.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Please enter your password.'
        ]);

        if ($this->form_validation->run()) {
            $array = array(
                'success_1' => true
            );
            $usermail = $this->input->post('usermail');
            $password = $this->input->post('password');

            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('email', $usermail);
            $this->db->or_where('username', $usermail);
            $user = $this->db->get()->row_array();
            if ($user != NULL) {
                $detailUser = $this->db->query('select * from detail_user where user_id="' . $user['id'] . '"');
                $rowDetUser = $detailUser->row_array();
                $explode = explode(" ", $rowDetUser['name']);
            }

            // jika usernya ada
            if ($user) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'username' => $user['username']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['username']) {
                        $array = array(
                            'success_2' => true,
                            'message' => "Hello, $explode[0]!"
                        );
                    }
                } else {
                    $array = array(
                        'error_2' => true,
                        'message' => 'Wrong password.'
                    );
                }
            } else {
                $array = array(
                    'error_2' => true,
                    'message' => 'Sorry. Your email address / username is not registered yet.'
                );
            }
        } else {
            $array = array(
                'error' => true,
                'usermail_error' => form_error('usermail', '<small class="text-danger">', '</small>'),
                'password_error' => form_error('password', '<small class="text-danger">', '</small>')
            );
        }
        echo json_encode($array);
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Anda telah keluar!
        </div>
        ');
        redirect('home');
    }

    public function registerProcess()
    {
        $this->form_validation->set_rules('address', 'Address', 'required|trim', [
            'required' => 'This field is required.'
        ]);
        $this->form_validation->set_rules('city', 'City', 'required|trim', [
            'required' => 'This field is required.'
        ]);
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'This field is required.'
        ]);
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric|min_length[10]|max_length[15]', [
            'required' => 'This field is required.',
            'numeric' => 'Invalid phone number.',
            'min_length' => 'Invalid phone number (min. 10)',
            'max_length' => 'Invalid phone number (max. 15)'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'required' => 'This field is required.',
            'is_unique' => 'This username is not available.'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'This field is required.',
            'valid_email' => 'Invalid email.',
            'is_unique' => 'This email already used.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', [
            'required' => 'This field is required.',
            'min_length' => 'Password minimum 8 characters.'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
            'required' => 'Confirm your password.',
            'matches' => "Password doesn't match."
        ]);

        if ($this->form_validation->run()) {
            $usernameIN = htmlspecialchars($this->input->post('username', true));
            $emailIN = htmlspecialchars($this->input->post('email', true));
            $passwordIN = password_hash($this->input->post('password2'), PASSWORD_DEFAULT);
            $nameIN = htmlspecialchars($this->input->post('name', true));
            $phoneIN = htmlspecialchars($this->input->post('phone', true));
            $addressIN = $this->input->post('address');
            $cityIN = htmlspecialchars($this->input->post('city', true));
            $date_joinedIN = date('Y-m-d');

            $call = $this->db->query('CALL add_user("' . $usernameIN . '", "' . $emailIN . '", "' . $passwordIN . '", "' . $nameIN . '", "' . $phoneIN . '", "' . $addressIN . '", "' . $cityIN . '", "' . $date_joinedIN . '", @last_generate_id)');

            if ($call) {
                $array = array(
                    'success' => true,
                    'message' => "Your account has been created. Do a Login!"
                );
            } else {
                $array = array(
                    'error' => true,
                    'message' => "Your account can't be created."
                );
            }
        } else {
            $array = array(
                'error' => true,
                'username_error' => form_error('username', '<small class="text-danger">', '</small>'),
                'email_error' => form_error('email', '<small class="text-danger">', '</small>'),
                'password_error' => form_error('password', '<small class="text-danger">', '</small>'),
                'password2_error' => form_error('password2', '<small class="text-danger">', '</small>'),
                'name_error' => form_error('name', '<small class="text-danger">', '</small>'),
                'phone_error' => form_error('phone', '<small class="text-danger">', '</small>'),
                'address_error' => form_error('address', '<small class="text-danger">', '</small>'),
                'city_error' => form_error('city', '<small class="text-danger">', '</small>')
            );
        }
        echo json_encode($array);
    }
}
