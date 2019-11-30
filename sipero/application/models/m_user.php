<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {
    public function get_data_user()
    {
        $data = $this->db->get('user');
        return $data->resoult_array();
    }

}