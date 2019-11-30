<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_view extends CI_Controller {
    function __construct()
    {
    parent::__construct();
    $this->load->model('user');
    }

    public function index()
    {
        $data = [];
        $data['title'] = "user";
        $data['dataUser'] = $this->m_user->get_data_user();
        $this->load->view('show_user', $data);

    }
}