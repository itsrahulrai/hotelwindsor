<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // This function insert admin

    public function m_cek_mail()
    {
        return $this->db->get_where('admin', array('email' => $this->input->post('email')));
    }

    // This function get user by email

    public function get_user_by_email($email)
    {
        return $this->db->get_where('admin', ['email' => $email])->row();
    }

    // This function update admin password
    public function update_password($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->update('admin', ['password' => $password]);
    }
}
